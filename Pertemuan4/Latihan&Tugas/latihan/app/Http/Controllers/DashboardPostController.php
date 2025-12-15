<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardPostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::user()->id);

        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%');
        }

        return view('dashboard.index', [
            'posts' => $posts->paginate(5)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('dashboard.show', [
            'post' => $post
        ]);
    }

 
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images', 'public');
        }

        $slug = Str::slug($request->title);

        $origialSlug = $slug;
        $count = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = $origialSlug . '-' . $count;
            $count++;
    }
    
        $validatedData['slug'] = $slug;
        $validatedData['user_id'] = Auth::user()->id;

        Post::create($validatedData);

        return redirect()->route('dashboard.index')->with('success', 'Post created successfully.');
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}