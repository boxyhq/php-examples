<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SettingsController extends Controller
{
    public function create(Request $request)
    {
        $jackson = config('jackson');

        $tenant = 'boxyhq.com';

        $response = Http::withHeaders([
            'Authorization' => 'Api-Key ' . $jackson['api_key'],
        ])->get($jackson['host'] . '/api/v1/connections', [
            'tenant' => $tenant,
            'product' => $jackson['product'],
        ]);

        $hasConnection = count($response->json()) > 0;

        return view('settings', compact('hasConnection'));
    }

    public function store(Request $request)
    {
        $appUrl = config('app.url');
        $jackson = config('jackson');

        $tenant = 'boxyhq.com';

        $metadata = $request->input("metadata");

        $response = Http::withHeaders([
            'Authorization' => 'Api-Key ' . $jackson['api_key'],
        ])->post($jackson['host'] . '/api/v1/connections', [
            'rawMetadata' => $metadata,
            'defaultRedirectUrl' => $jackson['redirect'],
            'redirectUrl' => $jackson['redirect'],
            'tenant' => $tenant,
            'product' => $jackson['product'],
        ]);

        return redirect('/settings');
    }
}