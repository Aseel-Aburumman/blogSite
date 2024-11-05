@extends('layouts.app')

@section('content')
    <!-- Debugging output -->
    <p>Editing Comment ID: {{ session('editing_comment_id') }}</p>

    <div class="container mt-5">
        <div class="card bg-pastel-green shadow-sm">
            @if ($post->image)
                <img src="{{ asset('storage/post_images/' . $post->image) }}"class="card-img-top" alt="Post Picture">
            @else
                <img src="{{ asset('assets/img/post.png') }}"class="card-img-top" alt="Default Post Picture">
            @endif
            <div class="card-body">
                <h2 class="text-muted-dark">{{ $post->title }}</h2>
                <p class="text-muted">{{ $post->subtitle }}</p>
                <p>{{ $post->content }}</p>
            </div>
        </div>

        <hr class="my-4">

        <h4 class="text-muted-dark">Comments</h4>
        @foreach ($post->comments as $comment)
            <div class="card bg-pastel-pink mb-3">
                <div class="card-body">
                    @if (Auth::check() && Auth::id() === $comment->user_id)
                        <!-- Check if this comment is being edited -->
                        @if (session('editing_comment_id') == $comment->id)
                            <form action="{{ route('comments.update', $comment->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <textarea class="form-control" name="content" rows="2" required>{{ $comment->content }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary btn-sm">Cancel</a>
                            </form>
                        @else
                            <!-- Display Comment Content -->
                            <p class="card-text">{{ $comment->content }}</p>
                            <small class="text-muted">By {{ $comment->user->name }} on
                                {{ $comment->created_at->format('M d, Y') }}</small>
                            <!-- Edit Button -->
                            <form action="{{ route('comments.edit', $comment->id) }}" method="GET" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm mt-2">Edit</button>
                            </form>
                        @endif
                    @else
                        <p class="card-text">{{ $comment->content }}</p>
                        <small class="text-muted">By {{ $comment->user->name }} on
                            {{ $comment->created_at->format('M d, Y') }}</small>
                    @endif
                </div>
            </div>
        @endforeach

        @auth
            <div class="card bg-light mt-4">
                <div class="card-body">
                    <h5 class="text-muted-dark">Leave a Comment</h5>
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="mb-3">
                            <textarea class="form-control" name="content" rows="3" placeholder="Write your comment..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Post Comment</button>
                    </form>
                </div>
            </div>
        @else
            <p class="text-muted">Please <a href="{{ route('login') }}">log in</a> to leave a comment.</p>
        @endauth
    </div>
@endsection
