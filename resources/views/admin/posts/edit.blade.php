{{-- resources/views/admin/posts/edit.blade.php --}}
@extends('layouts.admin')

@section('content')
    <div class="container my-4">
        <h2 class="text-center mb-4">Edit Post</h2>

        <div class="card shadow p-4">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="6" required>{{ $post->content }}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-warning">Update Post</button>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
