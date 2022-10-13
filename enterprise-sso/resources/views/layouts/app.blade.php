<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BoxyHQ Enterprise SSO</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <header>
      <nav class="border-gray-200 px-4 py-4 shadow">
        <div class="max-w-7xl mx-auto">
            <ul class="flex gap-4">
                <li>
                    <a href="/" class="font-normal text-gray-900">Home</a>
                </li>
                <li>
                    <a href="/settings" class="font-normal text-gray-900">SAML SSO</a>
                </li>
                
                @guest
                    <li>
                        <a href="/sso" class="font-normal text-gray-900">Login</a>
                    </li>
                @endguest

                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href={{ route('logout') }} class="font-normal text-gray-900" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                        </form>
                    </li>
                </form>
            @endauth

            <li>
              <a href="/profile" class="font-normal text-gray-900">Profile</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    @yield('content')
  </body>
</html>