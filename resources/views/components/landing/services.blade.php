<div class="mb-2">
    <h2 class="text-center text-2xl font-bold">{{ __('What I can help you with') }}</h2>

    <div class="flex flex-row gap-4">
        @foreach ($services as $service)
            <div class="text-center">
                <h3 class="text-xl font-bold">{{ $service->title }}</h3>
                <div>{!! $service->description !!}</div>
            </div>
        @endforeach
    </div>

</div>
