<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class Berita extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.agenda_gang.index', compact('news'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $product = new News();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->image = 'images/' . $imageName;
        $product->save();
        return redirect()->route('news.index');
    } //
}
