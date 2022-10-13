@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mt-10">
    <div class="max-w-[50%]">
        <div class="mb-5">
            @if($hasConnection)
            <span
                class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded"
                >SAML SSO Enabled</span
                >
            @else
            <span
                class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded"
                >SAML SSO Not Enabled</span
                >
            @endif
        </div>
        <div class="py-5 px-5 border-gray-200 border bg-white rounded">
            <form class="space-y-3" method="POST" action="/settings">
                @csrf
                <label htmlFor="metadata" class="block text-sm">XML Metadata</label>
                <textarea
                    name="metadata"
                    id="metadata"
                    placeholder="Paste the XML Metadata"
                    class="appearance-none text-sm block w-full border border-gray-300 rounded placeholder-gray-400 focus:outline-none focus:ring-indigo-500"
                    required
                    rows="10"
                    ></textarea>
                <button
                    type="submit"
                    class="px-4 py-2 w-full border border-transparent rounded text-sm font-medium text-white bg-indigo-600 focus:outline-none"
                    >
                Save Changes
                </button>
            </form>
        </div>
    </div>
</div>
@endsection