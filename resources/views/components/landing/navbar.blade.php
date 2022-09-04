<header class="rounded border-gray-200 bg-white py-2.5 dark:bg-gray-900 navbar-bottom-shadow">
    <nav class="container-fluid content:px-4 mx-auto sm:px-4 md:px-6 lg:px-6 xl:px-9">
        <div class="flex flex-wrap items-center justify-between" x-data="{ mobileMenuOpen: false }">
            <a href="http://localhost:8000/" class="flex items-center">
                <img src="{{ asset('storage/images/logo.png') }}" class="-mr-1 h-9 -mt-3"
                    alt="Jennifer Doe website" />
                <span
                    class="self-center whitespace-nowrap text-xl font-bold dark:text-white">{{ __('ennifer Doe') }}</span>
            </a>
            <button type="button" @click="mobileMenuOpen = ! mobileMenuOpen"
                :class="{ 'invisible': mobileMenuOpen }"
                class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">{{ __('Open main menu') }}</span>
                <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <div x-show="mobileMenuOpen" :class="{ 'offcanvas-end': ! mobileMenuOpen }"
                @click.outside="mobileMenuOpen = false"
                class="offcanvas offcanvas-end md:invisible fixed h-auto flex flex-col max-w-full  bg-clip-padding shadow-sm outline-none transition duration-500 ease-in-out text-gray-700 top-0 right-0 border-none w-72"
                tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header bg-transparent flex justify-end items-center p-4"
                    style="height: 63px;">

                    <button type="button" @click="mobileMenuOpen = false"
                        class="btn-close box-content w-4 h-4 p-2 mr-1 -my-5 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        aria-label="{{ __('Close') }}"></button>
                </div>
                <div class="offcanvas-body bg-white flex-grow p-4 overflow-y-auto">
                    <ul
                        class="flex flex-col rounded-lg md:p-4 dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 bg-white md:text-base font-medium md:dark:bg-gray-900">
                        <li>
                            <a href="#services" @click="mobileMenuOpen = false"
                                class="block rounded  py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('What I can help you') }}</a>
                        </li>
                        <li>
                            <a href="#location" @click="mobileMenuOpen = false"
                                class="block rounded py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('Location') }}</a>
                        </li>
                        <li>
                            <a href="#contact" @click="mobileMenuOpen = false"
                                class="block rounded py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('Contact') }}</a>
                        </li>
                        @if (Route::has('login'))
                        @auth
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="block rounded py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('Dashboard') }}</a>
                        </li>
                        @else
                        <li>
                            <a href="{{ route('login') }}"
                                class="block rounded py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('Log
                                                                   in') }}</a>
                        </li>

                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}"
                                class="block rounded py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @endauth

                        @endif

                    </ul>
                </div>
            </div>



            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:text-base md:font-medium md:dark:bg-gray-900">
                    <li>
                        <a href="#services"
                            class="block rounded  py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('What I can help you') }}</a>
                    </li>
                    <li>
                        <a href="#location"
                            class="block rounded py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('Location') }}</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="block rounded py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('Contact') }}</a>
                    </li>
                    @if (Route::has('login'))
                    @auth
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="block rounded py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('Dashboard') }}</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('login') }}"
                            class="block rounded py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('Log
                                                   in') }}</a>
                    </li>

                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}"
                            class="block rounded py-2 pr-4 pl-3 text-main-blue80pc hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-accent-turquoise md:dark:hover:bg-transparent md:dark:hover:text-white">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @endauth

                    @endif

                </ul>
            </div>
        </div>
    </nav>

    </div>


</header>