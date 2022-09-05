<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Add new user') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-12">

                <form action="{{ route('user.store')}}" method="POST"
                    enctype="application/x-www-form-urlencoded" accept-charset="UTF-8"
                    autocomplete="off" class="px-8 py-6 w-full relative">
                    @method("POST")
                    @csrf

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                    <x-jet-validation-errors class="mb-4" />

                    <div class="flex flex-col md:flex-row gap-x-4">
                        <div class="mb-5 w-full md:w-1/2">
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name"
                                class="block mt-1 bg-gray-50 w-full {{ $errors->has('name') ? ' border-rose-400' : '' }}"
                                type="text" name="name" :value="old('name')" autofocus />
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>
                        <div class="mb-5 w-full md:w-1/2">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email"
                                class="block mt-1 bg-gray-50 w-full {{ $errors->has('email') ? ' bemail-rose-400' : '' }}"
                                type="email" name="email" :value="old('email')" autofocus />
                            <x-jet-input-error for="email" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-5">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password"
                            class="block mt-1 bg-gray-50 w-full {{ $errors->has('password') ? ' bpassword-rose-400' : '' }}"
                            type="password" name="password" :value="old('password')" autofocus />
                        <x-jet-input-error for="password" class="mt-2" />
                    </div>

                    <div class="mb-5">
                        <div class="mb-3 xl:w-96">
                            <select
                                class="form-select appearance-none
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label="{{ __(" Select role") }}"
                                name="role" id="role"
                                >
                                <option selected>{{ __("Select a role for the user") }}</option>
                                <option value="1">{{ __("Admin") }}</option>
                                <option value="2">{{ __("Client") }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="inline">
                        <x-jet-button type="submit" class="mr-2">{{ __("Add user") }}
                        </x-jet-button>
                        <a href="{{ route('user.index')}}" class="inline-flex items-center px-4 py-2 mb-4 bg-transparent border border-gray-800
                            first-line:rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-70
                          active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                            disabled:opacity-25 transition">{{ __('Cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>