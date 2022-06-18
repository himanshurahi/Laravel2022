@extends('layouts.app')
@section('title', 'Add Post')
@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @include('posts.partials.form')
        <button type="submit">Save</button>
    </form>
@endsection
