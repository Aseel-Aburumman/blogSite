{{-- resources/views/admin/posts/index.blade.php --}}
@extends('layouts.admin')

@section('content')
    <div class="container my-4">
        <h1 class="text-center mb-4">Manage Blog Posts</h1>

        <div class="text-right mb-3">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">+ Add New Post</a>
        </div>

        <table class="table table-hover shadow-sm rounded">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created At</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at->format('M d, Y') }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
