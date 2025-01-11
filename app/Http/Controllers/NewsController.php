<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'title' => 'required|string|max:255',
                'news' => 'required',
                'description' => 'required|string|max:500',
                'date' => 'required|date',
            ]);

            // Tentukan path direktori tujuan
            $imageDirectory = public_path('assets/images/news_images');
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

            // Pindahkan file ke direktori tujuan
            $request->file('image')->move($imageDirectory, $imageName);

            // Simpan path gambar ke database
            $validated['image'] = "news_images/$imageName";

            // Simpan data berita ke database
            $news = News::create($validated);

            // Kembalikan respons JSON
            return response()->json($news, 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangani error validasi
            return response()->json([
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Tangani error lain
            return response()->json([
                'message' => 'Terjadi kesalahan pada server.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }



    public function show(News $news)
    {
        return view('berita', compact('news'));
    }
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'title' => 'required|string|max:255',
                'news' => 'required',
                'description' => 'required|string|max:500',
                'date' => 'required|date',
            ]);

            // Jika ada file gambar yang diunggah
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if (!empty($news->image) && file_exists(public_path("assets/images/{$news->image}"))) {
                    unlink(public_path("assets/images/{$news->image}"));
                }

                // Tentukan path direktori tujuan
                $imageDirectory = public_path('assets/images/news_images');
                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

                // Pindahkan file ke direktori tujuan
                $request->file('image')->move($imageDirectory, $imageName);

                // Perbarui path gambar dalam validasi
                $validated['image'] = "news_images/$imageName";
            }

            // Perbarui data berita
            $news->update($validated);

            return response()->json(['message' => 'Data berhasil diperbarui!']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangani error validasi
            return response()->json([
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Tangani error lain
            return response()->json([
                'message' => 'Terjadi kesalahan pada server.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }



    public function destroy(News $news)
    {
        try {
            // Hapus file gambar jika ada
            if ($news->image && file_exists(public_path('assets/images/' . $news->image))) {
                unlink(public_path('assets/images/' . $news->image));
            }
    
            // Hapus data berita dari database
            $news->delete();
    
            return response()->json(['message' => 'Berita berhasil dihapus!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan saat menghapus data.', 'error' => $e->getMessage()], 500);
        }
    }
    
}
