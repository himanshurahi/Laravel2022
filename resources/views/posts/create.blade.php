@extends('layouts.app')
@section('title', 'Add Post')
@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <input type="text" name="title" id="" value="{{old('title')}}">
        @error('title')
            <p>{{ $message }}</p>
        @enderror
        <input type="text" name="body" id="" value="{{old('body')}}">
        @error('body')
            <p>{{ $message }}</p>
        @enderror
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <button type="submit">Save</button>
    </form>
@endsection
