@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-muted-dark mb-4">Blog Posts</h1>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-6 mb-4">
                    <div class="card bg-white shadow-sm border-0" style="border-radius: 15px;">
                        <!-- Post Image -->
                        @if ($post->image)
                            <img src="{{ asset('storage/post_images/' . $post->image) }}" alt="Post Image" class="card-img-top"
                                style="height: 200px; object-fit: cover; border-radius: 15px 15px 0 0;">
                        @else
                            <img src="{{ asset('assets/img/post.png') }}" alt="Default Image" class="card-img-top"
                                style="height: 200px; object-fit: cover; border-radius: 15px 15px 0 0;">
                        @endif

                        <!-- Card Body -->
                        <div class="card-body">
                            <!-- Post Title -->
                            <h5 class="card-title text-dark">{{ $post->title }}</h5>

                            {{--  <!-- Author and Date Row -->
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('storage/author_images/' . $post->author->profile_image) }}"
                                    alt="Author Image"
                                    style="width: 35px; height: 35px; object-fit: cover; border-radius: 50%;"
                                    class="mr-2">
                                <div>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">{{ $post->author->name }}</p>
                                    <p class="mb-0 text-muted" style="font-size: 0.8rem;">
                                        {{ $post->created_at->format('M d, Y') }}</p>
                                </div>
                            </div>  --}}

                            <!-- Post Excerpt -->
                            <p class="card-text text-muted">{{ Str::limit($post->content, 80) }}</p>

                            <!-- Read More Button -->
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-link p-0 navbar-brand"
                                style="font-size: 0.9rem;">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
