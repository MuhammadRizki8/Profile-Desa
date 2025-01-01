<?php

// app/Http/Controllers/VillageInstrumentController.php

namespace App\Http\Controllers;

use App\Models\VillageInstrument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class VillageInstrumentController extends Controller
{
    // Menampilkan data semua Village Instrument
    public function index()
    {
        $villageInstruments = VillageInstrument::all();
        $type = 'perangkat-desa';

        return view('admin.perangkat-desa', compact('villageInstruments', 'type'));
    }

    // Menampilkan data Kepala Desa
    public function getKades()
    {
        $villageInstruments = VillageInstrument::where('position', 'Kepala Desa')->get();
        $type = 'kades';

        return view('admin.perangkat-desa', compact('villageInstruments', 'type'));
    }
    // Menampilkan form untuk membuat Village Instrument baru
    public function create()
    {
        return view('village_instrument.create');
    }

    // Menyimpan Village Instrument baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'email' => 'nullable|email',
        ]);

        $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('assets/images/VillageInstrument_images'), $imageName);

        VillageInstrument::create([
            'image' => $imageName,
            'category' => $request->category,
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'email' => $request->email,
        ]);

        return response()->json(['success' => true]);
    }

    public function update(Request $request, VillageInstrument $villageInstrument)
    {
        try {
            $validated = $request->validate([
                'category' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'position' => 'required|string|max:255',
                'description' => 'nullable|string|max:500',
                'facebook' => 'required|string|max:255',
                'instagram' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Log data yang diterima untuk debugging
            Log::info('Data yang diterima:', $request->all());

            // Hapus gambar lama jika ada gambar baru yang diunggah
            if ($request->hasFile('image')) {
                // Cek apakah ada gambar lama
                if (!empty($villageInstrument->image)) {
                    $oldImagePath = public_path('assets/images/VillageInstrument_images/' . $villageInstrument->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath); // Hapus gambar lama
                    }
                }

                // Simpan gambar baru
                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('assets/images/VillageInstrument_images'), $imageName);
                $validated['image'] = $imageName;
            }

            // Update data
            $villageInstrument->update($validated);

            return response()->json(['message' => 'Data perangkat desa berhasil diperbarui!']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log error validasi untuk debugging
            Log::error('Error Validasi:', $e->errors());

            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            Log::error('Error Server:', ['message' => $e->getMessage()]);
            return response()->json(['message' => 'Terjadi kesalahan pada server.', 'error' => $e->getMessage()], 500);
        }
    }


    public function destroy(VillageInstrument $villageInstrument)
    {
        try {
            // Hapus file gambar jika ada
            if ($villageInstrument->image && file_exists(public_path('assets/images/' . $villageInstrument->image))) {
                unlink(public_path('assets/images/VillageInstrument_images' . $villageInstrument->image));
            }
    
            // Hapus data berita dari database
            $villageInstrument->delete();
    
            return response()->json(['message' => 'Berita berhasil dihapus!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan saat menghapus data.', 'error' => $e->getMessage()], 500);
        }
    }
}
