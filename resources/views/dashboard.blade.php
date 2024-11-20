<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid gap-6 lg:grid-cols-[30%_minmax(0,_1fr)] lg:gap-8">
                    <div class="p-6 text-gray-900 overflow-hidden m-3 bg-gray-700 dark:text-gray-100">
                        <div>
                            <livewire:book.book-modal />
                        </div>
                    </div>
                    <div class="p-6 text-gray-900 overflow-hidden m-3 bg-gray-700 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
