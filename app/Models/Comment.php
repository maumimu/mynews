<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'news_id' => 'required',
        'name' => 'required',
        'text' => 'required',
        );
         public function update1(Request $request)
    {
        // News Modelからデータを取得する
        $news = News::find($request->id);
        // 送信されてきたフォームデータを格納する
        $news_form = $request->all();

        // 該当するデータを上書きして保存する
        $news->fill($news_form)->save();

        // 以下を追記
        $comment = new comment();
        $comment->news_id = $news->id;
        $comment->save();

        return redirect('admin/news');
    }
}
