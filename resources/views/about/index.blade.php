<x-app-layout class="bg-white dark:bg-gray-800">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

<div class="py-12 h-screen">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 ">
            <div class=" text-center bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <img src="{{ ('./images/dashboard.jpg') }}" alt="dashboard" class=" w-50 h-50 mx-auto mb-4 sm:rounded-lg">
                    {{ __("Welcome To Docasdos") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
