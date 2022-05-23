<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function listComment()
    {
        $comment = Comment::with('product')->orderBy('comment_status','DESC')->paginate(config("constant.paginate"));
        return view('backend.comment.index',[
            'comment' =>$comment
        ]);
    }
    
    public function allowComment(Request $request)
    {
        $data = $request->all();
        $comment = Comment::find($data['comment_id']);
        $comment->comment_status = $data['comment_status'];
        $comment->save();
    }
    
    public function replyComment(Request $request)
    {
        $data = $request->all();
        $comment = new Comment();
        $comment->comment = $data['comment'];
        $comment->comment_products_id = $data['comment_products_id'];
        $comment->comment_parent_comment = $data['comment_id'];
        $comment->comment_status = 0;
        $comment->comment_name = 'VCamera';
        $comment->save();
    }
}
