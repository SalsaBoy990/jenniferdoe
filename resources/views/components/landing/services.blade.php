<section class="services services-bg w-full m-h-480">

    <div class="container-fluid content:px-4 mx-auto sm:px-4 md:px-6 lg:px-6 xl:px-9 pb-12 sm:pb-16">
        <h2 class="pt-14 text-center text-2xl sm:text-4xl font-bold tracking-wide text-white leading-tight">
            {{ __('What I can help you with') }}</h2>
            <div class="services-decoration bg-accent-turquoise mx-auto mb-12"></div>

        <div class="flex flex-col md:flex-row gap-10 md:gap-10 lg:gap-8 items-center md:items-left md:justify-between">
            @foreach ($services as $service)
                <div class="flex flex-col justify-center text-center max-w-344">

                    <img class="mx-auto h-16 w-16 rounded-full"
                        src="{{ $service->logo_image_url_link }}" alt="{{ $service->title }}">

                    <h3 class="text-22px mb-10px font-bold text-white">{{ $service->title }}</h3>
                    <div class="text-white80pc text-lg md:text-lg">{!! $service->description !!}</div>
                </div>
            @endforeach
        </div>
    </div>

</section>
