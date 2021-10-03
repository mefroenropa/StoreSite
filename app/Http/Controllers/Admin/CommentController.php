<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Controllers\Admin\AdminController;

class CommentController extends AdminController
{
    public function index()
    {
        $comments = Comment::where('isConfirm', 0)->whereOr('isConfirm', 1)->get();
       
        return view("admin.comment.index", compact('comments'));
    }

    public function unConfirm()
    {
        $comments = Comment::where('isConfirm', 2)->get();
        return view("admin.comment.unConfirm", compact('comments'));
    }

    public function isConfirm($isConfirm, $id)
    {
        $comment = Comment::find($id);
        $comment->isConfirm = $isConfirm;
        $comment->save();
        return back();
    }

    public function destroy($id)
    {
        Comment::delete($id);
        return back();
    }
}
