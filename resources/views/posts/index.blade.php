<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post List') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-full">
                    <section class="space-y-6">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Create your posts') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Data post list yang anda upload atau posting') }}
                            </p>
                        </header>

                        <form action="{{ route('posts.create') }}" method="get">
                            @csrf
                            @method('GET')
                            <x-primary-button>{{ __('Create new post') }}</x-primary-button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="py-3">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-full">
                    @include('posts.partials.list-posts')
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
