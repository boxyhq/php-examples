@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mt-10">
    <div class="space-y-3 px-3 py-3 border border-gray-200">
        <h1 class="text-2xl">Enterprise SSO + Laravel Framework Example</h1>
        <p>
            This is an example web app that demonstrate how to use Enterprise SSO
            with Laravel Framework.
        </p>
        <ul class="flex flex-row space-x-6">
            <li>
                <a
                    class="underline underline-offset-2"
                    target="_blank"
                    rel="noreferrer"
                    href="https://boxyhq.com/docs/jackson/overview"
                    >
                Documentation
                </a>
            </li>
            <li>
                <a
                    class="underline underline-offset-2"
                    target="_blank"
                    rel="noreferrer"
                    href="https://github.com/boxyhq/jackson"
                    >
                Github
                </a>
            </li>
            <li>
                <a
                    class="underline underline-offset-2"
                    target="_blank"
                    rel="noreferrer"
                    href="https://hub.docker.com/r/boxyhq/jackson"
                    >
                Docker Hub
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection