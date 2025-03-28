{{-- @extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>
@if(auth()->check())
    <form action="{{ route('comments.store', $post) }}" method="POST">
        @csrf
        <textarea name="body" class="form-control" rows="3" required></textarea>
        <button type="submit" class="btn btn-primary mt-2">Post Comment</button>
    </form>
@else
    <p><a href="{{ route('login') }}">Log in</a> to post a comment.</p>
@endif

<h3>Comments</h3>
@foreach($post->comments as $comment)
    <div class="mb-3 border p-3">
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
    </div>
@endforeach

@endsection  --}}

@extends('layouts.app')

@section('content')
<div class="w-4/5 mx-auto text-left">
    <div class="py-10 border-b border-gray-300">
        <h1 class="text-6xl font-bold text-gray-900">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 mx-auto pt-10">
    <span class="text-gray-600">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on 
        {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <div class="mt-5">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="Post Image" class="w-full h-96 object-cover rounded-lg shadow-lg">
    </div>

    <p class="text-lg text-gray-700 pt-8 pb-10 leading-relaxed">
        {{ $post->description }}
    </p>
</div>

<div class="w-4/5 mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    @if(auth()->check())
        <h3 class="text-2xl font-semibold mb-4">Leave a Comment</h3>
        <form action="{{ route('comments.store', $post) }}" method="POST" class="space-y-4">
            @csrf
            <textarea name="body" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" placeholder="Write your comment here..." required></textarea>
            <button type="submit" class="px-5 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                Post Comment
            </button>
        </form>
    @else
        <p class="text-gray-600 text-lg">
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Log in</a> to post a comment.
        </p>
    @endif
</div>

<div class="w-4/5 mx-auto mt-10">
    <h3 class="text-2xl font-semibold mb-4">Comments ({{ $post->comments->count() }})</h3>
    @foreach($post->comments as $comment)
        <div class="mb-4 p-4 bg-gray-100 rounded-lg shadow-sm">
            <div class="flex items-center space-x-2 mb-2">
                <span class="font-bold text-gray-800">{{ $comment->user->name }}</span>
                <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
            </div>
            <p class="text-gray-700">{{ $comment->body }}</p>
        </div>
    @endforeach
</div>
@endsection
