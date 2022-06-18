@extends('layouts.app')
@section('title', 'Update Post')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12 ">
                <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('posts.partials.form')
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
