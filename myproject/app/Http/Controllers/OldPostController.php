<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class OldPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400'
        ]);

        $validated['user_id'] = auth()->id();

        $post->update($validated);

        $request->session()->flash('message', '更新しました');
        return back();
    }

    // 個別表示機能の搭載
    public function show (Post $post)
    {
        return view('post.show', compact('post'));
    }

    // 編集機能の搭載
    public function edit (Post $post)
    {
        return view('post.edit', compact('post'));
    }

    // 消去機能の処理
    public function destroy(Request $request, Post $post)
    {
        $post->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('post.index');
    }



}
