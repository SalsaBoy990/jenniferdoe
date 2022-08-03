<section class="mb-2">

    <div class="flex flex-row">
        <div class="w-1/4">
            <h2>{{ __('I help you in the solution') }}</h2>
            <div>{{ __('Call me for appointment:') }}</div>
            <div>{{ $phoneNumber }}</div>
            <div>{{ __('E-mail:') }}</div>
            <div>{{ $emailAddress }}</div>
        </div>
        <div class="w-3/4">
            <h2>{{ __('Qualifications & experience') }}</h2>
            <ul>
                @foreach ($qualifications as $qualification)
                    <li>
                        <h3>{{$qualification->date }}</h3>
                        <div>{!! $qualification->description !!}</p>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>

</section>