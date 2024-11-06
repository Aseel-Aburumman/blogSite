<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'subtitle' => 'required|string',
            'image' => 'required|image'

        ]);
        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->subtitle = $request->subtitle;



        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/post_images', $imageName);
            $post->image = $imageName;
        }

        $post->save();

        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'subtitle' => 'required|string',
            'image' => 'nullable|image'  // Optional, as updating without changing the image may be desired
        ]);

        $post->update($validatedData);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($post->image && Storage::exists('public/post_images/' . $post->image)) {
                Storage::delete('public/post_images/' . $post->image);
            }

            // Store new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/post_images', $imageName);
            $post->image = $imageName;
        }

        $post->save();

        return redirect()->route('admin.posts.index');
    }

    public function destroy(Post $post)
    {
        if ($post->image && Storage::exists('public/post_images/' . $post->image)) {
            Storage::delete('public/post_images/' . $post->image);
        }

        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
