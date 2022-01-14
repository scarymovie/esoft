<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Посты') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($posts as $post)
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6 text-center  flex">
                    <h3 class="text-lg font-medium text-gray-900">
                        {{$post->title}}
                    </h3>
                </div>

            @endforeach
                {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
