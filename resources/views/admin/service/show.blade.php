<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Edit service') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-12">

                <h2 class="text-lg md:text-xl font-bold text-gray-900 px-6 mt-5 mb-5">
                    {{ $service->title }}
                </h2>

                <form action="{{ route('service.update', $service->id)}}" method="POST"
                    enctype="multipart/form-data" accept-charset="UTF-8" autocomplete="off"
                    class="px-8 pt-6 w-full relative">
                    @method("PUT")
                    @csrf

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                    <x-jet-validation-errors class="mb-4" />

                    <div class="flex flex-col md:flex-row gap-x-4">
                        <div class="mb-5">
                            <x-jet-label for="title" value="{{ __('Service title') }}" />
                            <x-jet-input id="title"
                                class="block mt-1 bg-gray-50 w-full {{ $errors->has('title') ? ' border-rose-400' : '' }}"
                                type="text" name="title" :value="old('title') ?? $service->title"
                                autofocus />
                            <x-jet-input-error for="title" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <x-jet-label for="order" value="{{ __('Service order') }}" />
                            <x-jet-input id="order"
                                class="block mt-1 bg-gray-50 w-full {{ $errors->has('order') ? ' border-rose-400' : '' }}"
                                type="number" name="order" :value="old('order') ?? $service->order"
                                autofocus />
                            <x-jet-input-error for="order" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-5">
                        <x-jet-label for="description" value="{{ __('Service description') }}" />
                        <textarea name="description" rows="5"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('description') ?? $service->description }}</textarea>
                        <x-jet-input-error for="description" class="mt-2" />
                    </div>

                    <div class="flex flex-col md:flex-row">
                        <div class="mb-5">

                            @if($service->logo_image_url)
                            <x-admin.image-preview :url="$service->logo_image_url_link"
                                :alt="$service->title">
                            </x-admin.image-preview>
                            @endif
                            <x-jet-label for="logo_image_url"
                                value="{{ __('Service logo (as image)') }}" />

                            <div class="mb-3 mt-1 w-96">
                                <input
                                    class="form-control block w-full px-3 py-1.5
                                    text-sm font-normal
                                  text-gray-700
                                  bg-white bg-clip-padding border border-solid 
                                    {{ $errors->has('logo_image_url') ? ' border-rose-400' : 'border-gray-300' }} 
                                    rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    type="file" id="logo_image_url" name="logo_image_url" autofocus>
                            </div>
                            <x-jet-input-error for="logo_image_url" class="mt-2" />
                        </div>
                    </div>
                    <div>
                        <x-jet-button type="submit">{{ __("Save changes") }}
                        </x-jet-button>
                        <a href="{{ route('service.index')}}"
                            class="inline-flex items-center px-4 py-2 mb-4 bg-transparent border border-gray-800
                            rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-70
                            active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                            disabled:opacity-25 transition">{{ __('Cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>