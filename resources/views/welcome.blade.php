<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jennifer Doe</title>

    <!-- Fonts -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=commissioner:400,500,600,700,800"
        rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])

</head>

<body class="antialiased">
    <x-navbar></x-navbar>

    <x-intro :subTitle="$meta->subtitle" :title="$meta->title" :description="$meta->description"
        :phoneNumber="$meta->phone_number" :phoneNumberLink="$meta->phone_number_link"
        :profileImageUrl="$meta->profile_image_url">
    </x-intro>

    <div id="services"></div>
    <x-services :services="$services"></x-services>

    <div id="contact"></div>
    <x-cta-area :emailAddress="$meta->email_address" :phoneNumber="$meta->phone_number"
        :phoneNumberLink="$meta->phone_number_link" :qualifications="$qualifications">
    </x-cta-area>

    <div id="location"></div>
    <x-location :location="$meta->location"></x-location>

    <x-footer :emailAddress="$meta->email_address" :phoneNumber="$meta->phone_number"
        :facebookLink="$meta->facebook_link" :youtubeLink="$meta->youtube_link">
    </x-footer>
</body>

</html>