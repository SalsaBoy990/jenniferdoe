<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jennifer Doe</title>

    <!-- Fonts -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/js/app.js'])

</head>

<body class="antialiased">
    <div class="items-top relative flex h-24 justify-center bg-gray-100 py-4 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <div class="container-fluid content:px-4 mx-auto sm:px-4 md:px-6 lg:px-6 xl:px-9">
        <x-navbar></x-navbar>

        <x-intro
            :subTitle="$meta->subtitle"
            :title="$meta->title"
            :description="$meta->description">
        </x-intro>

        <x-services :services="$services"></x-services>

        <x-cta-area
            :emailAddress="$meta->email_address"
            :phoneNumber="$meta->phone_number"
            :qualifications="$qualifications">
        </x-cta-area>

        <x-location :location="$meta->location"></x-location>

        <x-footer
            :emailAddress="$meta->email_address"
            :phoneNumber="$meta->phone_number"
            :facebookLink="$meta->facebook_link"
            :youtubeLink="$meta->youtube_link">
        </x-footer>
    </div>
</body>

</html>
