<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <p class="text-white">Welcome to the blog page!</p>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-white">{{ $post['title'] }}</h2>
                {{-- text-gray-900 --}}
            </a>
            <div class="text-base text-gray-500 ">
                <a href="/authors/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a> |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo; </a>
        </article>
    @endforeach
    {{-- <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Judul Artikel 1</h2>
        <div class="text-base text-gray-500">
            <a href="#">Sandhika Galih</a> | 1 January 2024
        </div>
        <p class="my-4 font-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque aspernatur quas error
            exercitationem aliquam
            esse amet nam modi consequuntur, libero nemo optio voluptas, numquam repellat eveniet provident repellendus
            natus possimus.</p>
        <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo; </a>
    </article>
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Judul Artikel 2</h2>
        <div class="text-base text-gray-500">
            <a href="#">Sandhika Galih</a> | 2 February 2024
        </div>
        <p class="my-4 font-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque aspernatur quas error
            exercitationem aliquam
            esse amet nam modi consequuntur, libero nemo optio voluptas, numquam repellat eveniet provident repellendus
            natus possimus.</p>
        <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo; </a>
    </article> --}}
</x-layout>
