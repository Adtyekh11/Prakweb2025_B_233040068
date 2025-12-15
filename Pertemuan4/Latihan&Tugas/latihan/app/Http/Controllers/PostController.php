<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

use function Pest\Laravel\post;

class PostController extends Controller
{
    public function index()
{
    $posts = Post::with(['author', 'category'])->get();
    return view('posts.index', compact('posts'));
}

    public function create()
{
    $categories = Category::all(); 
    return view('posts.create', compact('categories'));
}

public function show(Post $post)
{
    $post->load(['author', 'category']);
    return view('posts.show', compact('post'));
}

    public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}

public function update(Request $request, Post $post)
{
    $validated = $request->validate([
        'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required',
    ]);

    $post->update($validated);

    return redirect('/posts')->with('success', 'Post berhasil diperbarui');
}

public function destroy(Post $post)
{
    $post->delete();

    return redirect('/posts')->with('success', 'Post berhasil dihapus');
}

}
