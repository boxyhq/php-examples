<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function create(Request $request)
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $jackson = config('jackson');

        $tenant = $request->input('teamId');

        return Socialite::driver('jackson')
            ->with(['tenant' => $tenant, 'product' => $jackson['product']])
            ->redirect();
    }

    public function callback(Request $request)
    {
        $user = Socialite::driver('jackson')->user();

        // Do your business logic here. $user has all the properties you need.

        $createdUser = User::updateOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'provider' => 'saml',
            'provider_id' => $user->id,
        ]);
     
        Auth::login($createdUser);
     
        return redirect('/profile');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/sso');
    }
}
