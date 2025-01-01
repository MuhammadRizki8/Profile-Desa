<?php
namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'title' => 'required|string|max:255', // Validasi untuk kolom title
            ]);

            // Tentukan path direktori tujuan
            $imageDirectory = public_path('assets/images/gallery_images');
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

            // Pindahkan file ke direktori
            $request->file('image')->move($imageDirectory, $imageName);

            $validated['image'] = "gallery_images/$imageName";

            // Simpan data ke database
            Gallery::create($validated);

            return response()->json(['message' => 'Gambar berhasil ditambahkan!'], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan pada server.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        try {
            $validated = $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'title' => 'required|string|max:255', // Validasi untuk kolom title
            ]);

            if ($request->hasFile('image')) {
                $imageDirectory = public_path('assets/images/gallery_images');
                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move($imageDirectory, $imageName);

                // Hapus gambar lama jika ada
                if ($gallery->image && file_exists(public_path('assets/images/' . $gallery->image))) {
                    unlink(public_path('assets/images/' . $gallery->image));
                }

                $validated['image'] = "gallery_images/$imageName";
            }

            $gallery->update($validated);

            return response()->json(['message' => 'Gambar berhasil diperbarui!'], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan pada server.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function destroy(Gallery $gallery)
    {
        try {
            if ($gallery->image && file_exists(public_path('assets/images/' . $gallery->image))) {
                unlink(public_path('assets/images/' . $gallery->image));
            }

            $gallery->delete();

            return response()->json(['message' => 'Gambar berhasil dihapus!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan saat menghapus data.', 'error' => $e->getMessage()], 500);
        }
    }
}
