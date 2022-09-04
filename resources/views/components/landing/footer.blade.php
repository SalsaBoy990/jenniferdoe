<footer class="bg-main-blue-gray text-white relative">
    <div class="container-fluid content:px-4 mx-auto sm:px-4 md:px-6 lg:px-6 xl:px-9">
        <div class="flex flex-col justify-between gap-8 pt-12 sm:flex-row">
            <div class="max-w-400 mb-0 sm:mb-8">
                <div class="inline-block">
                    <img src="{{ asset('storage/images/logo-dark.png') }}" alt=""
                        class="logo -mt-4 inline-block">
                    <span
                        class="-ml-2 inline-block text-lg font-bold text-white">{{ __('ennifer Doe') }}</span>
                </div>
                <ul class="pt-5">
                    <li class="w-177">
                        <a class="text-white80pc border-white30pc hover:border-accent-turquoise mb-3 inline-block cursor-pointer border-b py-1 text-base hover:text-white hover:transition-colors"
                            href="" download>{{ __('Curriculum vitae (in pdf)') }}</a>
                    </li>
                    <li>
                        <a class="border-white30pc hover:border-accent-turquoise text-white80pc mb-3 inline-block border-b py-1 text-base hover:text-white hover:transition-colors"
                            href="">{{ __('They don’t expect me to repair their children– Interview') }}</a>
                    </li>
                    <li class="w-159">
                        <a class="border-white30pc hover:border-accent-turquoise text-white80pc mb-3 inline-block border-b py-1 text-base hover:text-white hover:transition-colors"
                            href="">{{ __('Privacy policy (GDPR)') }}</a>
                    </li>
                </ul>
            </div>

            <div class="min-w-250 pr-2 sm:pr-4 md:pr-12 lg:pr-24">
                <div>
                    <h2
                        class="text-light-blue mb-5 text-base font-semibold uppercase tracking-wide">
                        {{ __('Contact') }}
                    </h2>
                    <div>{{ __('Call me for appointment:') }}</div>
                    <a class="text-22px text-accent-turquoise hover:accent-turquoise block font-bold hover:underline"
                        href="tel:+">{{ $phoneNumber }}</a>
                    <div class="mt-5">{{ __('E-mail:') }}</div>
                    <a class="text-22px text-accent-turquoise hover:accent-turquoise block font-bold hover:underline"
                        href="mailto:{{ $emailAddress }}">{{ $emailAddress }}</a>
                </div>

                <nav class="pt-12 pb-10">
                    <a href="{{ $facebookLink }}" class="mr-4 inline-block sm:mr-2"
                        title="{{ __('Facebook') }}">
                        <svg class="inline-block" width="18" height="18" viewBox="0 0 18 18"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.0714 0H1.92857C1.41708 0 0.926543 0.203188 0.564865 0.564866C0.203188 0.926543 0 1.41708 0 1.92857L0 16.0714C0 16.5829 0.203188 17.0735 0.564865 17.4351C0.926543 17.7968 1.41708 18 1.92857 18H7.44308V11.8804H4.91183V9H7.44308V6.80464C7.44308 4.30754 8.92969 2.92821 11.2066 2.92821C12.2971 2.92821 13.4373 3.12268 13.4373 3.12268V5.57357H12.1809C10.943 5.57357 10.5569 6.34179 10.5569 7.12969V9H13.3204L12.8784 11.8804H10.5569V18H16.0714C16.5829 18 17.0735 17.7968 17.4351 17.4351C17.7968 17.0735 18 16.5829 18 16.0714V1.92857C18 1.41708 17.7968 0.926543 17.4351 0.564866C17.0735 0.203188 16.5829 0 16.0714 0Z"
                                fill="white" fill-opacity="0.5" />
                        </svg>
                    </a>
                    <a href="{{ $youtubeLink }}" title="{{ __('Youtube') }}">
                        <svg class="inline-block" width="24" height="17" viewBox="0 0 24 17"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.2084 2.60777C22.9358 1.58129 22.1326 0.772873 21.1128 0.498524C19.2642 0 11.8519 0 11.8519 0C11.8519 0 4.43954 0 2.59097 0.498524C1.57114 0.772917 0.767925 1.58129 0.495312 2.60777C0 4.46832 0 8.35017 0 8.35017C0 8.35017 0 12.232 0.495312 14.0926C0.767925 15.1191 1.57114 15.8938 2.59097 16.1681C4.43954 16.6667 11.8519 16.6667 11.8519 16.6667C11.8519 16.6667 19.2642 16.6667 21.1128 16.1681C22.1326 15.8938 22.9358 15.1191 23.2084 14.0926C23.7037 12.232 23.7037 8.35017 23.7037 8.35017C23.7037 8.35017 23.7037 4.46832 23.2084 2.60777ZM9.4276 11.8746V4.82574L15.6229 8.35026L9.4276 11.8746Z"
                                fill="white" fill-opacity="0.5" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
        <small
            class="text-white50pc block pt-6 pb-10 text-sm sm:-mt-14 sm:pt-0">{{ __('© Jennifer Doe 2022. All rights reserved.') }}</small>
    </div>

    <button x-data="{ scrollToTop() { window.scrollTo({top: 0, behavior: 'smooth'}) } }"
        @click="scrollToTop()" x-transition x-transition.duration.700ms
        title="Go to the top of the page" class="absolute right-8 bottom-4 h-7 w-7">
        <svg width="28" height="28" viewBox="0 0 44 44" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 21.7969C0 9.75586 9.75586 0 21.7969 0C33.8379 0 43.5938 9.75586 43.5938 21.7969C43.5938 33.8379 33.8379 43.5938 21.7969 43.5938C9.75586 43.5938 0 33.8379 0 21.7969ZM12.6211 24.3369L18.9844 17.7012V33.75C18.9844 34.9189 19.9248 35.8594 21.0938 35.8594H22.5C23.6689 35.8594 24.6094 34.9189 24.6094 33.75V17.7012L30.9727 24.3369C31.79 25.1895 33.1523 25.207 33.9873 24.3721L34.9453 23.4053C35.7715 22.5791 35.7715 21.2432 34.9453 20.4258L23.291 8.7627C22.4648 7.93652 21.1289 7.93652 20.3115 8.7627L8.63965 20.4258C7.81348 21.252 7.81348 22.5879 8.63965 23.4053L9.59766 24.3721C10.4414 25.207 11.8037 25.1895 12.6211 24.3369V24.3369Z"
                fill="white" fill-opacity="0.6" />
        </svg>
    </button>
</footer>