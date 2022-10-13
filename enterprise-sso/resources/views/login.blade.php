@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto h-screen">
    <div class="flex flex-col space-y-5 justify-center h-full">
        <h2 class="text-center text-3xl">Log in to App</h2>
        <div class="max-w-md mx-auto w-full px-3 md:px-0">
            <div class="py-5 px-5 border-gray-200 border bg-white rounded">
                <form class="space-y-3" method="POST" action="/sso">
                    @csrf
                    <label htmlFor="teamId" class="block text-sm">Team ID</label>
                    <input
                        type="text"
                        name="teamId"
                        id="teamId"
                        placeholder="boxyhq"
                        value="boxyhq.com"
                        class="appearance-none text-sm block w-full border border-gray-300 rounded placeholder-gray-400 focus:outline-none focus:ring-indigo-500"
                        required
                        />
                    <button
                        type="submit"
                        class="px-4 py-2 w-full border border-transparent rounded text-sm font-medium text-white bg-indigo-600 focus:outline-none"
                        >
                    Continue with SAML SSO
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection