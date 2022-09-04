<div class="p-6 sm:px-10 bg-white border-b border-gray-200">
    <div class="mt-4 text-2xl">
        Welcome to the dashboard!
    </div>

    <div class="mt-4 mb-8 text-gray-500">
        Edit your site's data. Choose from these options:
    </div>


    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <a href="{{ route('meta.index') }}"
            class="flex flex-col lg:flex-row items-center p-4 bg-white hover:bg-blue-50 border border-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
            <div
                class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <x-icon.cog></x-icon.cog>
            </div>
            <div
                class="text-lg font-bold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                {{ __('Site settings') }}
            </div>
        </a>
        <!-- Card -->
        <a href="{{ route('meta.index') }}"
            class="flex flex-col lg:flex-row items-center p-4 bg-white hover:bg-blue-50 rounded-lg border border-gray-200 shadow-xs dark:bg-gray-800">
            <div
                class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                <x-icon.services></x-icon.services>
            </div>
            <div
                class="text-lg font-bold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                {{ __('Services') }}
            </div>
        </a>

        <!-- Card -->
        <a href="{{ route('meta.index') }}"
            class="flex flex-col lg:flex-row items-center p-4 bg-white hover:bg-blue-50 rounded-lg border border-gray-200 shadow-xs dark:bg-gray-800">
            <div
                class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                <x-icon.qualifications></x-icon.qualifications>
            </div>
            <div
                class="text-lg font-bold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                {{ __('Qualifications') }}
            </div>
        </a>

        <a href="{{ route('profile.show') }}"
            class="flex flex-col lg:flex-row items-center p-4 bg-white hover:bg-blue-50 rounded-lg border border-gray-200 shadow-xs dark:bg-gray-800">
            <div
                class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                <x-icon.user></x-icon.user>
            </div>
            <div
                class="text-lg font-bold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                {{ __('Your Profile') }}
            </div>
        </a>
    </div>
</div>