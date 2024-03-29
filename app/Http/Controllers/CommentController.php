<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Offre;
use App\Comment;
use App\User;
class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $comment = new Comment;
        $comment->fill($request->all());

        $user = Auth::user();
        $comment->user()->associate($user);

        $comment->offre()->associate($offre);

        $comment->save();

        return back()->with(['status' => 'Comment created!']);
    }
}
