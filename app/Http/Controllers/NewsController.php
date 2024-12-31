<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    // Display a list of news
    public function index()
    {
        $news = News::all();
        return view('admin.dashboard', compact('news'));
    }

    // // Show the form for creating new news
    // public function create()
    // {
    //     return view('news.create');
    // }

    // Store a newly created news item in the database
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        // Handle file upload
        $imagePath = $request->file('image')->store('news_images', 'public');

        // Create news
        $data = News::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        // return redirect()->route('admin.dashboard')->with('success', 'News created successfully!');
        // $data = DataPersebaranPenduduk::create($validated);
        return response()->json($data, 201);
    }

    // // Display a specific news item
    // public function show($id)
    // {
    //     $news = News::findOrFail($id);
    //     return view('news.show', compact('news'));
    // }

    // // Show the form for editing an existing news item
    // public function edit($id)
    // {
    //     $news = News::findOrFail($id);
    //     return view('news.edit', compact('news'));
    // }

    // Update an existing news item in the database
    public function update(Request $request, $id)
    {
        // Validate input
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        $news = News::findOrFail($id);

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }

            // Upload the new image
            $imagePath = $request->file('image')->store('news_images', 'public');
            $news->image = $imagePath;
        }

        // Update other fields
        $news->title = $request->title;
        $news->description = $request->description;
        $news->date = $request->date;
        $news->save();

        return redirect()->route('admin.dashboard')->with('success', 'News updated successfully!');
    }

    // Delete a news item from the database
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Delete the image file
        if ($news->image && Storage::disk('public')->exists($news->image)) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('admin.dashboard')->with('success', 'News deleted successfully!');
    }
}
