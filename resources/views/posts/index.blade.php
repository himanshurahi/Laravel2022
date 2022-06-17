@extends('layouts.app')
@section('title', 'Post')
@section('content')
    @if (count($posts))
        @foreach ($posts as $key => $post)
            @include('posts.partials.post')
        @endforeach
    @else
        <h1>No Post</h1>
    @endif

@endsection
