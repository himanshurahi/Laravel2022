@extends('layouts.app')
@section('title', 'Update Post')
@section('content')
    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
        @method('PUT')
        @csrf
        @include('posts.partials.form')
        <button type="submit">Update</button>
    </form>
@endsection
