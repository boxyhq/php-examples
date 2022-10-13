@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mt-10">
    <div class="max-w-[50%]">
        <div class="py-5 px-5 border-gray-200 border bg-white rounded">
            <ul class="flex flex-col space-y-3">
                <li class="flex flex-col">
                    <span class="font-normal">User ID</span>
                    <span class="text-gray-500">{{ $user->id }}</span>
                </li>
                <li class="flex flex-col">
                    <span class="font-normal">Provider ID</span>
                    <span class="text-gray-500">{{ $user->provider_id }}</span>
                </li>
                <li class="flex flex-col">
                    <span class="font-normal">Email</span>
                    <span class="text-gray-500">{{ $user->email }}</span>
                </li>
                <li class="flex flex-col">
                    <span class="font-normal">Name</span>
                    <span class="text-gray-500">{{ $user->name }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection