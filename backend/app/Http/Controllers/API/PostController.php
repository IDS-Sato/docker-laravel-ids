<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;   // 追加

class PostController extends Controller
{
    //
    public function index()
    {
    // 投稿を作成日時の新しい順でペジネーションした結果を返す
    return Post::latest()->paginate();
    }

    public function store(Request $request)
    {
       // リクエストパラメータから取得した値をもとにPostを作成する
       return Post::create($request->all());
    }

    public function show(Post $post)
    {
       // Eloquentオブジェクトを返す
       return $post;
    }

    public function update(Request $request, Post $post)
    {
       // リクエストパラメータから取得した値をもとにPostを更新する
       $post->update($request->all());
       return $post;
    }

    public function destroy(Post $post)
    {
       // Eloquentオブジェクトを削除する
       $deleted = $post->delete();
       return compact('deleted');
    }
}
