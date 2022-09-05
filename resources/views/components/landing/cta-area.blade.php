<section class="cta-area bg-light-blue mb-2 min-h-435" style="min-height: 435px;">
    <div class="container-fluid content:px-4 mx-auto sm:px-4 md:px-6 lg:px-6 xl:px-9">

        <div class="flex flex-col sm:flex-col md:flex-col lg:flex-row gap-x-8 sm:gap-x-8 md:gap-x-32 pt-14 items-center lg:items-start"
            style="padding-bottom: 73px;">
            <div
                class="border-accent-turquoise relative rounded-lg border bg-white mx-4 sm:mx-0 main-box">

                <div class="text-center sm:text-left">
                    <div class="px-0 sm:px-6 cta-header-grid">

                        <div class=" papillon-left-position">
                            <svg width="27" height="44" viewBox="0 0 27 44" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.8532 42.7242C16.6284 42.1609 16.6391 37.5652 16.8685 36.0439C17.2517 33.504 18.0007 31.8141 19.4087 30.3125C20.9352 28.6847 23.1769 27.5875 25.5211 27.3208L26.4586 27.2142V32.0437V36.8733L25.8066 37.6774C24.5263 39.2564 21.0725 41.4928 17.9747 42.7486L17.0177 43.1367L16.8532 42.7242ZM16.655 24.5768C7.38962 22.0969 1.96845 16.4031 0.443194 7.54989C0.122208 5.68675 -0.119557 1.15819 0.062756 0.427305L0.169497 0L2.25203 0.0888365C4.69265 0.192945 6.10447 0.474452 7.40437 1.11625C8.8498 1.82981 8.92583 2.01991 9.27875 5.80039C9.76441 11.0031 10.3296 13.753 11.5304 16.7526C12.9878 20.3938 14.8191 22.5481 18.3381 24.7605C18.62 24.9378 18.6196 24.9426 18.3229 24.9423C18.1557 24.9422 17.4056 24.7777 16.655 24.5768ZM24.5638 23.1089C19.0008 22.2941 15.0761 18.4454 14.1364 12.8836C13.766 10.6918 13.7684 4.16622 14.1395 3.56219C14.2438 3.39249 14.6095 3.49341 16.0237 4.08222C20.1652 5.80645 24.3517 8.6714 25.6832 10.6926L26.1542 11.4072V17.1013C26.1542 20.233 26.1126 22.9042 26.0618 23.0372C25.961 23.3011 25.897 23.3042 24.5638 23.1089Z"
                                    fill="#55D6BE" />
                            </svg>
                        </div>
                        <h2 class="text-main-blue text-22px font-extrabold uppercase text-center">
                            {{ __('I help you in the solution') }}
                        </h2>
                        <div class="papillon-right-position">
                            <svg width="27" height="43" viewBox="0 0 27 43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.1871 42.6352C6.65957 41.9921 4.91779 41.0506 3.54124 40.124C2.06419 39.1297 0.199861 37.3077 0.0564742 36.7184C0.00720872 36.5159 -0.0139196 34.3209 0.00964878 31.8405L0.052217 27.3307L0.472345 27.2821C1.13469 27.2056 3.28838 27.8107 4.53781 28.4244C5.36985 28.8331 5.99038 29.2983 6.83306 30.145C9.01215 32.3344 9.72908 34.6894 9.74642 39.7135C9.75554 42.3034 9.65534 43.0034 9.27733 42.9938C9.13759 42.9902 8.64707 42.8289 8.1871 42.6352ZM8.45137 24.5141C12.42 22.3142 14.9962 18.1723 16.3031 11.8905C16.6541 10.2036 16.9101 8.18003 17.2959 4.04455C17.4171 2.74523 17.5089 2.37982 17.8152 1.97605C18.641 0.887554 20.9268 0.208225 24.1908 0.0813019L26.2815 0V2.38309C26.2815 6.82559 25.5547 10.4119 24.0126 13.5783C22.9315 15.7981 21.747 17.4347 20.0236 19.0899C17.3588 21.6493 13.7118 23.5885 9.55757 24.6549C7.81488 25.1023 7.46956 25.0583 8.45137 24.5141ZM0.538488 23.1825C0.480099 23.1238 0.432352 20.3841 0.432352 17.0943V11.1129L1.15461 10.2607C2.41438 8.77413 4.01353 7.50749 6.43849 6.07513C7.88376 5.22141 11.7161 3.41138 12.0862 3.40771C12.4071 3.40453 12.4785 3.92701 12.5562 6.84564C12.6462 10.2288 12.3687 13.0676 11.7614 14.9773C10.469 19.0412 7.26277 21.9384 3.01727 22.8789C1.61275 23.19 0.661804 23.3065 0.538488 23.1825Z"
                                    fill="#55D6BE" />
                            </svg>
                        </div>
                    </div>

                    <div class="px-0 sm:px-12">
                        <div class="text-22px text-main-blue pb0-pt-36px"
                            style="padding-bottom: 0px;padding-top: 36px;">
                            {{ __('Call me for appointment:') }}
                        </div>
                        <div class="text-accent-turquoise text-xl md:text-3xl font-bold">
                            <a href="{{ 'tel:+' . $phoneNumberLink }}"
                                class="hover:border-accent-turquoise inline-block border-b-2 border-transparent">{{ $phoneNumber }}</a>
                        </div>
                        <div class="text-22px text-main-blue -mb-1 pt-22px"
                            style="padding-top: 22px;">
                            {{ __('E-mail:') }}
                        </div>
                        <div class="text-accent-turquoise text-xl md:text-3xl font-bold">
                            <a href="{{ 'mailto:' . $emailAddress }}"
                                class="hover:border-accent-turquoise inline-block border-b-2 border-transparent">{{ $emailAddress }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qualifications" style="max-width: 681px; padding-top: 42px;">
                <h2
                    class="text-main-blue text-22px font-extrabold uppercase mb-6 lg:text-left text-center">
                    {{ __('Qualifications & experience') }}
                </h2>

                <div
                    class="grid grid-cols-1 md:grid-cols-2 md:gap-12 justify-items-start md:justify-items-center">

                    <div class="max-w-280" style="max-width: 280px">
                        @foreach ($qualifications as $qualification)
                        @if ($loop->index < 2) <h3
                            class="font-bold italic text-sm text-main-blue80pc">
                            {{ $qualification->date }}</h3>
                            <div class="leading-snug pb-5 text-lg text-main-blue80pc">{!!
                                $qualification->description !!}</div>
                            @endif
                            @endforeach
                    </div>

                    <div class="max-w-340" style="max-width: 340px">
                        @foreach ($qualifications as $qualification)
                        @if ($loop->index >= 2)
                        <h3 class="font-bold italic text-sm text-main-blue80pc">
                            {{ $qualification->date }}
                        </h3>
                        <div class="leading-snug pb-5 text-lg text-main-blue80pc">{!!
                            $qualification->description !!}</div>
                        @endif
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>

</section>