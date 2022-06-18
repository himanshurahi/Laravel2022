@extends('layouts.app')
@section('title', 'Add Post')
@section('content')
    {{-- @include('posts.partials.form') --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12 ">
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    @include('posts.partials.form')
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
