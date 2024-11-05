{{-- resources/views/admin/posts/create.blade.php --}}
@extends('layouts.admin')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container my-4">
        <h2 class="text-center mb-4">Create New Post</h2>

        <div class="card shadow p-4">
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="subtitle">Post subtitle</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" required>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
                </div>

                <div class="post-image-wrapper">
                    <label for="image">post image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Publish Post</button>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
