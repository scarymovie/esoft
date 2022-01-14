<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Посты') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($posts as $post)
                <table>
                    <tr>
                        <th>Название</th>
                        <th>Описание</th>
                    </tr>
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                    </tr>
                </table>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6 text-center  flex">

                </div>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
