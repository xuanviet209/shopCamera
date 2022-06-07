<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function listComment()
    {
        $comment = Comment::with('product')->orderBy('comment_status', 'DESC')->paginate(config("constant.paginate"));
        return view('backend.comment.index', [
            'comment' => $comment
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
        // $comment = Comment::find($data['comment_id']);
        $comment = new Comment();
        $comment->comment = $data['comment'];
        $comment->comment_products_id = $data['comment_products_id'];
        $comment->comment_parent_comment = $data['comment_id'];
        $comment->comment_status = 0;
        $comment->comment_name = 'VCamera';
        $comment->save();
    }

    public function deleteComment(Request $request)
    {
        if ($request->ajax()) {
            $comment_id = $request->comment_id;
            $comment_id = is_numeric($comment_id) ? $comment_id : 0;
            if ($comment_id > 0) {
                $del = DB::table('comment')->where('id', $comment_id)->delete();
                if ($del) {
                    return response()->json([
                        'cod' => 200,
                        'mess' => 'delete success'
                    ]);
                } else {
                    return response()->json([
                        'cod' => 500,
                        'mess' => 'Error delete'
                    ]);
                }
            } else {
                return response()->json([
                    'cod' => 404,
                    'mess' => 'Error param id'
                ]);
            }
        }
    }
}
