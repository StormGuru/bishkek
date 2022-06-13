<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, User $user)
    {
        $data = request()->validate([
            'comm_text' => 'string'
        ]);
        $data['user_id'] = auth()->user()->id;

        Comment::create($data);
        return redirect()->route('bishkek');
    }

    public function show(){
        $comments = Comment::all();
        return view('commlist', compact('comments'));
    }
}
