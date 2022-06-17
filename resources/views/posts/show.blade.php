@extends('layouts.app')
@section('title', $post['id'])
@section('content')
    @if ($post['is_new'])
        <h1>{{ $post['id'] }}</h1>
        <h1>{{ $post['title'] }}</h1>
        <h1>{{ $post['body'] }}</h1>
    @else
        <h1>Post Is Old</h1>
    @endif

    @isset($post['has_comments'])
        <h1>Has Comments</h1>
    @endisset

@endsection
