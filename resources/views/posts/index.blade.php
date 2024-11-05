@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-muted-dark mb-4">Blog Posts</h1>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card bg-pastel-blue shadow-sm">
                        @if ($post->image)
                            <img src="{{ asset('storage/post_images/' . $post->image) }}" alt="Profile Picture">
                        @else
                            <img src="{{ asset('assets/img/post.png') }}" alt="Default Profile Picture">
                        @endif
                        {{--  <img src="{{ $post->image }}" class="card-img-top" alt="Post Image">  --}}
                        <div class="card-body">
                            <h5 class="card-title text-muted-dark">{{ $post->title }}</h5>
                            <p class="card-text text-muted">{{ $post->subtitle }}</p>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
