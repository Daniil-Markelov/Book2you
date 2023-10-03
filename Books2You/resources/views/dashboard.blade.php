<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
                <a class="btn btn-primary fs-5 me-2 py-2 px-4" role="button" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <a class="btn btn-primary fs-5 me-2 py-2 px-4" role="button" href="{{ route('login') }}">{{ __('Sign Up') }}</a>
            </div>
        </div>
    </div>
</x-app-layout>
