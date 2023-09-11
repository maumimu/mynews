<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //以下を追記
    public function add()
    {
        return view('admin.comment.create');
    }
    
     public function create(Request $request)
    {
        // 以下を追記
        // dd($request);

        $comment = new Comment;
        // $comment->news_id = $request->news_id;
        $comment->news_id = 4;
        $comment->name = $request->name;
        $comment->text = $request->text;

       
        // データベースに保存する
        $comment->save();

        return redirect()->route('admin.comment.create', ['id' => $comment->id,
        ]);
    }
    
   
   
   
}
