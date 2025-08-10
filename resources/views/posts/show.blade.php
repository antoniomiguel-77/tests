@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto space-y-6">
    <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
    <img src="{{ $post->image }}" alt="" class="rounded-lg">
    <p class="text-gray-300">{{ $post->content }}</p>

    <div class="flex space-x-3 items-center">
        <form action="{{ route('likes.store', ['type'=>'post','id'=>$post->id]) }}" method="POST">@csrf
            <button class="px-3 py-1 bg-green-500 rounded">👍 {{ $post->likes()->where('type','like')->count() }}</button>
        </form>
        <form action="{{ route('likes.store', ['type'=>'post','id'=>$post->id]) }}" method="POST">@csrf
            <input type="hidden" name="type" value="dislike">
            <button class="px-3 py-1 bg-red-500 rounded">👎 {{ $post->likes()->where('type','dislike')->count() }}</button>
        </form>
    </div>

    <hr class="border-gray-700">

    <h2 class="text-2xl font-bold">Comentários</h2>
    @auth
    <form action="{{ route('comments.store', $post) }}" method="POST" class="space-y-3">
        @csrf
        <textarea name="content" class="w-full bg-gray-900 text-white p-3 rounded" placeholder="Escreva algo..."></textarea>
        <button class="bg-primary px-4 py-2 rounded">Comentar</button>
    </form>
    @endauth

    <div class="space-y-4 mt-4">
        @forelse($post->comments as $comment)
        <div class="bg-gray-800 p-3 rounded-lg">
            <p>{{ $comment->content }}</p>
            <div class="flex space-x-3 mt-2">
                <form action="{{ route('likes.store', ['type'=>'comment','id'=>$comment->id]) }}" method="POST">@csrf
                    <button class="text-green-400">👍 {{ $comment->likes()->where('type','like')->count() }}</button>
                </form>
                <form action="{{ route('likes.store', ['type'=>'comment','id'=>$comment->id]) }}" method="POST">@csrf
                    <input type="hidden" name="type" value="dislike">
                    <button class="text-red-400">👎 {{ $comment->likes()->where('type','dislike')->count() }}</button>
                </form>
            </div>
        </div>
        @empty
        <p class="text-gray-500">Nenhum comentário ainda.</p>
        @endforelse
    </div>
</div>
@endsection
