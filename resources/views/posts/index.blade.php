@extends('layouts.app')

@section('title', 'blog')

@section('meta-description', 'Blog meta description')

@section('content')

    <h1>Blog</h1>

    @auth
    <a href="{{ route('posts.create') }}">Create new post</a>
    @endauth

    @foreach ($posts as $post)
    <div style="display: flex; align-items: baseline">

        <h2> 
            <a href="{{ route('posts.show' , $post->id) }}">
                {{ $post->title }}
            </a>

            @auth
        </h2> &nbsp;
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
            @endauth
        
    </div>
        
    @endforeach
@endsection
