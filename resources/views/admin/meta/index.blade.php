<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Site Settings') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('meta.update', $meta->id)}}" method="POST"
                    enctype="multipart/form-data" accept-charset="UTF-8" autocomplete="off"
                    class="px-8 py-6 max-w-3xl relative">
                    @method("PUT")
                    @csrf

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                    <x-jet-validation-errors class="mb-4" />

                    <div class="absolute top-5 right-5">
                        <x-jet-button type="submit">{{ __("Save") }}</x-jet-button>
                    </div>

                    <!-- General settings -->
                    <div class="md:col-span-1 flex flex-col justify-between">
                        <div class="px-4 sm:px-0 mb-5">
                            <h3 class="text-lg font-medium text-gray-900">
                                {{ __("General settings") }}
                            </h3>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Setup your main website details here") }}
                            </p>
                        </div>
                        <fieldset>
                            <div class="mb-5">
                                <x-jet-label for="title" value="{{ __('Site title') }}" />
                                <x-jet-input id="title"
                                    class="block mt-1 bg-gray-50 w-full {{ $errors->has('title') ? ' border-rose-400' : '' }}"
                                    type="text" name="title" :value="old('title') ?? $meta->title"
                                    autofocus />
                                <x-jet-input-error for="title" class="mt-2" />
                            </div>

                            <div class="mb-5">
                                <x-jet-label for="subtitle" value="{{ __('Site subtitle') }}" />
                                <x-jet-input id="subtitle"
                                    class="block mt-1 bg-gray-50 w-full {{ $errors->has('subtitle') ? ' border-rose-400' : '' }}"
                                    type="text" name="subtitle"
                                    :value="old('subtitle') ?? $meta->subtitle" autofocus />
                                <x-jet-input-error for="subtitle" class="mt-2" />
                            </div>

                            <div class="mb-5">
                                <x-jet-label for="description"
                                    value="{{ __('Site description') }}" />
                                <textarea name="description" id="text-editor-tiny-cme" rows="10"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $meta->description }}</textarea>
                                <x-jet-input-error for="description" class="mt-2" />
                            </div>
                            <div class="flex flex-col lg:flex-row gap-x-4 w-full mt-5">
                                <div class="mb-5 w-full lg:w-1/2">
                                    <x-jet-label for="email_address"
                                        value="{{ __('Site e-mail address') }}" />
                                    <x-jet-input id="email_address"
                                        class="block mt-1 bg-gray-50 w-full {{ $errors->has('email_address') ? ' border-rose-400' : '' }}"
                                        type="email" name="email_address"
                                        :value="old('email_address') ?? $meta->email_address"
                                        autofocus />
                                    <x-jet-input-error for="email_address" class="mt-2" />
                                </div>

                                <div class="mb-5 w-full lg:w-1/2">
                                    <x-jet-label for="phone_number"
                                        value="{{ __('Site phone number') }}" />
                                    <x-jet-input id="phone_number"
                                        class="block mt-1 bg-gray-50 w-full {{ $errors->has('phone_number') ? ' border-rose-400' : '' }}"
                                        type="tel" name="phone_number"
                                        :value="old('phone_number') ?? $meta->phone_number"
                                        autofocus />
                                    <x-jet-input-error for="phone_number" class="mt-2" />
                                </div>
                            </div>

                            <div class="mb-5">

                                @if($meta->profile_image_url)
                                <x-admin.image-preview :url="$meta->profile_image_url"
                                    :alt="$meta->title"></x-admin.image-preview>
                                @endif
                                <x-jet-label for="profile_image_url"
                                    value="{{ __('Your profile image') }}" />

                                <div class="mb-3 mt-1 w-96">
                                    <input
                                        class="form-control block w-full
                                        px-3
                                        py-1.5
                                        text-sm
                                        font-normal
                                      text-gray-700
                                       bg-white bg-clip-padding
                                        border border-solid 
                                        {{ $errors->has('profile_image_url') ? ' border-rose-400' : 'border-gray-300' }} 
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        type="file" id="profile_image_url" name="profile_image_url"
                                        autofocus>
                                </div>
                                <x-jet-input-error for="profile_image_url" class="mt-2" />
                            </div>

                            <div class="mb-5">
                                <x-jet-label for="location"
                                    value="{{ __('Location / address') }}" />
                                <x-jet-input id="location"
                                    class="block mt-1 bg-gray-50 w-full {{ $errors->has('location') ? ' border-rose-400' : '' }}"
                                    type="text" name="location"
                                    :value="old('location') ?? $meta->location" autofocus />
                                <x-jet-input-error for="location" class="mt-2" />
                            </div>
                        </fieldset>
                    </div>

                    <div>
                        <x-jet-button type="submit">{{ __("Save changes") }}</x-jet-button>
                    </div>

                    <x-jet-section-border />

                    <!-- SEO settings -->
                    <div class="md:col-span-1 flex flex-col justify-between">
                        <div class="px-4 sm:px-0 mb-5">
                            <h3 class="text-lg font-medium text-gray-900">{{ __("SEO settings") }}
                            </h3>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Setup your website metadata for search engines") }}
                            </p>
                        </div>
                        <fieldset>
                            <div class="mb-5">
                                <x-jet-label for="seo_title" value="{{ __('Site seo title') }}" />
                                <x-jet-input id="seo_title"
                                    class="block mt-1 bg-gray-50 w-full {{ $errors->has('seo_title') ? ' border-rose-400' : '' }}"
                                    type="text" name="seo_title"
                                    :value="old('seo_title') ?? $meta->seo_title" autofocus />
                                <x-jet-input-error for="seo_title" class="mt-2" />
                            </div>

                            <div class="mb-5">
                                <x-jet-label for="seo_description"
                                    value="{{ __('Site seo description') }}" />
                                <x-jet-input id="seo_description"
                                    class="block mt-1 bg-gray-50 w-full {{ $errors->has('seo_description') ? ' border-rose-400' : '' }}"
                                    type="text" name="seo_description"
                                    :value="old('seo_description') ?? $meta->seo_description"
                                    autofocus />
                                <x-jet-input-error for="seo_description" class="mt-2" />
                            </div>

                            <div>
                                @if($meta->seo_image_url)
                                <x-admin.image-preview :url="$meta->seo_image_url"
                                    :alt="$meta->title"></x-admin.image-preview>
                                @endif

                                <x-jet-label for="seo_image_url"
                                    value="{{ __('Seo image url') }}" />

                                <div class="mb-3 mt-1 w-96">
                                    <input
                                        class="form-control block w-full
                                        px-3
                                        py-1.5
                                        text-sm
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid 
                                        {{ $errors->has('seo_image_url') ? ' border-rose-400' : 'border-gray-300' }} 
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        type="file" id="seo_image_url" name="seo_image_url"
                                        autofocus>
                                </div>
                                <x-jet-input-error for="seo_image_url" class="mt-2" />
                            </div>
                        </fieldset>
                    </div>

                    <div class="mt-5">
                        <x-jet-button type="submit">{{ __("Save changes") }}</x-jet-button>
                    </div>

                    <x-jet-section-border />

                    <!-- Social media settings -->
                    <div class="md:col-span-1 flex flex-col justify-between">
                        <div class="px-4 sm:px-0 mb-5">
                            <h3 class="text-lg font-medium text-gray-900">
                                {{ __("Social media settings") }}
                            </h3>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Edit your social media links") }}
                            </p>
                        </div>
                        <fieldset>
                            <div class="flex flex-col lg:flex-row gap-x-4 w-full">
                                <div class="mb-5 w-full lg:w-1/2">
                                    <x-jet-label for="facebook_link"
                                        value="{{ __('Facebook page URL') }}" />
                                    <x-jet-input id="facebook_link"
                                        class="block mt-1 bg-gray-50 w-full {{ $errors->has('facebook_link') ? ' border-rose-400' : '' }}"
                                        type="text" name="facebook_link"
                                        :value="old('facebook_link') ?? $meta->facebook_link"
                                        autofocus />
                                    <x-jet-input-error for="facebook_link" class="mt-2" />
                                </div>

                                <div class="mb-5 w-full lg:w-1/2">
                                    <x-jet-label for="youtube_link"
                                        value="{{ __('Youtube channel URL') }}" />
                                    <x-jet-input id="youtube_link"
                                        class="block mt-1 bg-gray-50 w-full {{ $errors->has('youtube_link') ? ' border-rose-400' : '' }}"
                                        type="text" name="youtube_link"
                                        :value="old('youtube_link') ?? $meta->youtube_link"
                                        autofocus />
                                    <x-jet-input-error for="youtube_link" class="mt-2" />
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div>
                        <x-jet-button type="submit">{{ __("Save changes") }}</x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>