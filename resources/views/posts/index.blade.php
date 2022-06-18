@extends('layouts.app')
@section('title', 'Post')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                    @if (count($posts))
                        @foreach ($posts as $post)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#post{{ $post->id }}" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        {{ $post->title }}
                                    </button>
                                </h2>
                                <div id="post{{ $post->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ $post->body }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No posts found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- @if (count($posts))
        @foreach ($posts as $key => $post)
            @include('posts.partials.post')
        @endforeach
    @else
        <h1>No Post</h1>
    @endif --}}
@endsection
