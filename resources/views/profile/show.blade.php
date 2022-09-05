<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            <div class="md:grid lg:grid-cols-3 lg:gap-6">
                <x-jet-section-title>
                    <x-slot name="title">{{ __("Your Role") }}</x-slot>
                    <x-slot name="description">{{ __("You can be either a customer or an admin. You cannot change your role.") }}</x-slot>
                </x-jet-section-title>

                <div class="mt-5 lg:mt-0 lg:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md">
                        <div class="grid grid-cols-6 gap-6">

                            <span
                                class="px-4 py-2 rounded-full border border-gray-300 text-gray-500 font-semibold text-sm flex align-center w-max transition duration-300 ease">
                                {{ auth()->user()->role}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <x-jet-section-border />

            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('profile.update-profile-information-form')

            <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>

            <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="mt-10 sm:mt-0">
                @livewire('profile.two-factor-authentication-form')
            </div>

            <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
            @endif
        </div>
    </div>
</x-admin-layout>