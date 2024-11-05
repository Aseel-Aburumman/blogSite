<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['content' => 'required']);
        Comment::create([
            'post_id' => $request->post_id,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);
        return redirect()->route('posts.show', $request->post_id);
    }

    public function edit($id)
    {
        // Store the comment ID to session to know which comment to edit in the view
        session(['editing_comment_id' => $id]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate(['content' => 'required']);

        $comment = Comment::findOrFail($id);

        // Ensure only the owner of the comment can edit it
        if ($comment->user_id !== auth()->id()) {
            abort(403);
        }

        $comment->update(['content' => $request->content]);

        // Remove editing comment ID from session
        session()->forget('editing_comment_id');

        return redirect()->route('posts.show', $comment->post_id)->with('success', 'Comment updated successfully.');
    }
}
