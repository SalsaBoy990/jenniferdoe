<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200 flex justify-start items-center"
            href="#">
            <img src="{{ asset('/storage/images/logo.png') }}" class="h-8 mr-2 relative -top-1"
                alt="">
            {{ __("Admin") }}
        </a>
        <ul class="mt-6">
            <li
                class="relative px-6 py-3 {{ request()->routeIs('dashboard') ? 'bg-blue-50' : '' }}">
                <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm {{ request()->routeIs('dashboard') ? 'font-bold text-gray-800' : 'font-semibold' }} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                    href="{{ route('dashboard') }}">
                    <x-icon.home></x-icon.home>
                    <span class="ml-4">{{ __('Dashboard') }}</span>
                </a>
            </li>
        </ul>
        <ul>
            <li
                class="relative px-6 py-3 {{ request()->routeIs('meta.index') ? 'bg-blue-50' : '' }}">
                <a class="inline-flex items-center w-full text-sm {{ request()->routeIs('meta.index') ? 'font-bold text-gray-800' : 'font-semibold' }} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('meta.index')}}">
                    <x-icon.cog></x-icon.cog>
                    <span class="ml-4">{{ __("Site settings") }}</span>
                </a>
            </li>
            <li
                class="relative px-6 py-3 {{ request()->routeIs('qualification.index') ? 'bg-blue-50' : '' }}">
                <a class="inline-flex items-center w-full text-sm transition-colors {{ request()->routeIs('qualification.index') ? 'font-bold text-gray-800' : 'font-semibold' }} duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('qualification.index')}}">
                    <x-icon.qualifications></x-icon.qualifications>
                    <span class="ml-4">{{ __("Qualifications") }}</span>
                </a>
            </li>
            <li
                class="relative px-6 py-3 {{ request()->routeIs('service.index') ? 'bg-blue-50' : '' }}">
                <a class="inline-flex items-center w-full text-sm {{ request()->routeIs('service.index') ? 'font-bold text-gray-800' : 'font-semibold' }} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('service.index')}}">
                    <x-icon.services></x-icon.services>
                    <span class="ml-4">{{ __("Services") }}</span>
                </a>
            </li>

            @if (auth()->user()->role === 'admin')
            <li
                class="relative px-6 py-3 {{ request()->routeIs('user.index') ? 'bg-blue-50' : '' }}">
                <a class="inline-flex items-center w-full text-sm {{ request()->routeIs('user.index') ? 'font-bold text-gray-800' : 'font-semibold' }} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('user.index')}}">
                    <x-icon.users></x-icon.users>
                    <span class="ml-4">{{ __("Users") }}</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</aside>