<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="{{ config('app.name', 'Laravel') }}" />
        <meta name="description" content="{{ config('app.name', 'Laravel') }}" />
        <meta name="author" content="{{ config('app.name', 'Laravel') }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        @include('layouts.components.styles')
    </head>
    <body>
        <header>
            @include('layouts.components.navbar')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            @include('layouts.components.footer')
        </footer>

        @include('layouts.components.scripts')
    </body>
</html>
