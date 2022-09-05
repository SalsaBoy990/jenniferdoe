<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Manage Qualifications') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-12">

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <x-jet-validation-errors class="mb-4" />

                <ol class="bg-white rounded-lg border border-gray-200 text-gray-900 mx-6 mt-6">

                    @foreach ($qualifications as $qualification)

                    @if ($loop->first)
                    <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg">
                        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center">

                            <div class="w-56">
                                <h2 class="text-lg font-semibold">{{ $qualification->date }}</h2>
                                <div class="text-sm">{!! $qualification->description !!}</div>
                            </div>

                            <div class="action-buttons mt-5 lg:mt-0">
                                <a href="{{ route('qualification.show', $qualification->id)}}"
                                    class="inline-flex items-center px-4 py-2 mb-4 lg:mb-0 bg-gray-800 border border-transparent
                                    rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-70
                                    active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                                    disabled:opacity-25 transition">
                                    <x-icon.edit></x-icon.edit>
                                    <span class="ml-2">{{ __('Edit') }}</span>
                                </a>
                                <form
                                    action="{{ route('qualification.destroy', $qualification->id)}}"
                                    method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <x-jet-danger-button type="submit" class="text-xs"
                                        @click="return confirm('Are you sure you want to delete it?')">
                                        <x-icon.trash></x-icon.trash>
                                        <span class="ml-2">{{ __('Delete') }}</span>
                                    </x-jet-danger-button>
                                </form>
                            </div>
                        </div>
                    </li>
                    @elseif ($loop->last)
                    <li class="px-6 py-2 w-full rounded-b-lg">
                        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center">

                            <div class="w-56">
                                <h2 class="text-lg font-semibold">{{ $qualification->date }}</h2>
                                <div class="text-sm">{!! $qualification->description !!}</div>
                            </div>

                            <div class="action-buttons mt-5 lg:mt-0">
                                <a href="{{ route('qualification.show', $qualification->id)}}"
                                    class="inline-flex items-center px-4 py-2 mb-4 lg:mb-0 bg-gray-800 border border-transparent
                                                        rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-70
                                                        active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                                                        disabled:opacity-25 transition">
                                    <x-icon.edit></x-icon.edit>
                                    <span class="ml-2">{{ __('Edit') }}</span>
                                </a>
                                <form
                                    action="{{ route('qualification.destroy', $qualification->id)}}"
                                    method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <x-jet-danger-button type="submit" class="text-xs"
                                        @click="return confirm('Are you sure you want to delete it?')">
                                        <x-icon.trash></x-icon.trash>
                                        <span class="ml-2">{{ __('Delete') }}</span>
                                    </x-jet-danger-button>
                                </form>
                            </div>
                        </div>
                    </li>
                    @else
                    <li class="px-6 py-2 border-b border-gray-200 w-full">
                        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center">

                            <div class="w-56">
                                <h2 class="text-lg font-semibold">{{ $qualification->date }}</h2>
                                <div class="text-sm">{!! $qualification->description !!}</div>
                            </div>

                            <div class="action-buttons mt-5 lg:mt-0">
                                <a href="{{ route('qualification.show', $qualification->id)}}"
                                    class="inline-flex items-center px-4 py-2 mb-4 lg:mb-0 bg-gray-800 border border-transparent
                                    rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-70
                                    active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                                    disabled:opacity-25 transition">
                                    <x-icon.edit></x-icon.edit>
                                    <span class="ml-2">{{ __('Edit') }}</span>
                                </a>
                                <form
                                    action="{{ route('qualification.destroy', $qualification->id)}}"
                                    method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <x-jet-danger-button type="submit" class="text-xs"
                                        @click="return confirm('Are you sure you want to delete it?')">
                                        <x-icon.trash></x-icon.trash>
                                        <span class="ml-2">{{ __('Delete') }}</span>
                                    </x-jet-danger-button>
                                </form>
                            </div>
                        </div>

                    </li>

                    @endif
                    @endforeach
                </ol>

                <x-jet-section-border />

                <h3 class="text-lg md:text-xl font-bold text-gray-900 px-6">
                    {{ __("Add new qualification") }}
                </h3>

                <form action="{{ route('qualification.store')}}" method="POST"
                    enctype="application/x-www-form-urlencoded" accept-charset="UTF-8"
                    autocomplete="off" class="px-6 py-6 w-full relative">
                    @method("POST")
                    @csrf

                    <div class="flex flex-col md:flex-row gap-x-4">
                        <div class="mb-5">
                            <x-jet-label for="date" value="{{ __('Date') }}" />
                            <x-jet-input id="date"
                                class="block mt-1 bg-gray-50 w-full {{ $errors->has('date') ? ' border-rose-400' : '' }}"
                                type="text" name="date" :value="old('date')" autofocus />
                            <x-jet-input-error for="date" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <x-jet-label for="order" value="{{ __('Order') }}" />
                            <x-jet-input id="order"
                                class="block mt-1 bg-gray-50 w-full {{ $errors->has('order') ? ' border-rose-400' : '' }}"
                                type="number" name="order" :value="old('order')" autofocus />
                            <x-jet-input-error for="order" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-5">
                        <x-jet-label for="description" value="{{ __('Description') }}" />
                        <textarea name="description" rows="5"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('description') }}</textarea>
                        <x-jet-input-error for="description" class="mt-2" />
                    </div>
                    <div>

                        <x-jet-button type="submit" class="inline-flex items-center px-4 py-2 mb-4 bg-blue-600 border border-transparent
                                    rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-800
                                    active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300
                                    disabled:opacity-25 transition">{{ __("Add qualification") }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>