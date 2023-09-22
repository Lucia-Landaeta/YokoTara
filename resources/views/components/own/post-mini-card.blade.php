@props(['post'])
<a href="{{ route('posts.show', $post) }}">
    <article class="card">
        <img class="h-22 w-full object-cover"
            src="{{ $post->image ? Storage::url($post->image->url) : 'https://imagen_prueba.com' }}" alt="">
        <div class="px-6 py-4">
            <div class="flex justify-between text-xs text-gray-500">
                <p>{{$post->type}} - {{$post->locality->name}}</p>
            </div>
        </div>
    </article>
</a>