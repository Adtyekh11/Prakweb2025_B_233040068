<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    public function index()
    {
        $post = Post::where('user_id', auth()->user()->id);

        if (request('search')) {
            $post->where('title', 'like', '%' . request('search') . '%');
        }


        return view('dahboard.index', ['posts' => $post->paginate(5)->withQueryString()]);
    }

   
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.create',compact('categories'));
    }


  
    public function store(Request $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post-images', 'public  ');

        Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Post berhasil ditambahkan!');

        $validator = validator::make(request->all(), [
            'title' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'excerpt' => 'required',
            'body' => 'required',
        ], 
        [
            'title.required' => 'Judul wajib diisi.',
            'title.max' => 'Judul maksimal 255 karakter.',
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori tidak valid.',
            'exerpt.required' => 'Excerpt wajib diisi.',
            'body.required' => 'Body wajib diisi.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus berupa jpeg, png, jpg, gif, atau svg.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

   
    public function show(Post $post)
    {
        return view('dashboard.show', ['post' => $post]);
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

}