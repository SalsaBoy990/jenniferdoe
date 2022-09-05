<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Manage users') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 mb-12">

                <div class="my-6">

                    <a href="{{ route('user.create') }}" class="inline-flex items-center px-4 py-2 mb-4 bg-blue-600 border border-transparent
                                    rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-800
                                    active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300
                                    disabled:opacity-25 transition">
                        <x-icon.add></x-icon.add>
                        <span class="ml-1">
                            {{ __('Add new') }}
                        </span>

                    </a>
                </div>

                <table class="min-w-full">
                    <thead class="border-b">
                        <tr>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('#') }}
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('Name') }}
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('Email') }}
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('Role') }}
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('Actions') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="border-b">
                            <td class="py-4 px-2">
                                <div class="text-base">{{ $user->id }}</div>
                            </td>
                            <td class="py-4 px-2">
                                <h3 class="text-lg font-bold">{{ $user->name }}</h3>
                            </td>

                            <td class="py-4 px-2">
                                <div class="text-base">{{ $user->email }}</div>
                            </td>

                            <td class="py-4 px-2">
                                <span
                                    class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 font-semibold text-sm flex align-center w-max transition duration-300 ease">
                                    {{ $user->role }}
                                </span>
                            </td>
                            <td>
                                @if ($user->id !== auth()->user()->id)
                                <form action="{{ route('user.destroy', $user->id)}}" method="POST"
                                    class="">
                                    @csrf
                                    @method('DELETE')

                                    <x-jet-danger-button type="submit" class="text-xs"
                                        @click="return confirm('Are you sure you want to delete the user?')">
                                        <x-icon.trash></x-icon.trash>
                                        <span class="ml-2">{{ __('Delete') }}</span>
                                    </x-jet-danger-button>
                                </form>
                                @else
                                <span class="text-sm text-gray-700">{{ __("You are the admin. Cannot delete yourself here.")}}</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>