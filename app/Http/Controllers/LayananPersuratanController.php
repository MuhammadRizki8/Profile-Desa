<?php

namespace App\Http\Controllers;

use App\Models\LayananPersuratan;
use Illuminate\Http\Request;

class LayananPersuratanController extends Controller
{
    public function index()
    {
        $layanan = LayananPersuratan::all();
        return view('admin.permohonan-persuratan', compact('layanan'));
    }

    public function show($id)
    {
        $layanan = LayananPersuratan::findOrFail($id);
        return view('detail_suratan', compact('layanan'));
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'layanan' => 'required|string|max:255',
                'detail' => 'nullable|string',
                'persyaratan' => 'nullable|json',
                'jam_pelayanan' => 'nullable|string|max:50',
                'hari_pelayanan' => 'nullable|string|max:50',
                'tata_cara' => 'nullable|string',
            ]);

            // Simpan data
            $layanan = LayananPersuratan::create($validated);

            // Kembalikan respons sukses
            return response()->json([
                'message' => 'Layanan berhasil ditambahkan.',
                'data' => $layanan,
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan pada server.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'layanan' => 'required|string|max:255',
                'detail' => 'nullable|string',
                'persyaratan' => 'nullable|json',
                'jam_pelayanan' => 'nullable|string|max:50',
                'hari_pelayanan' => 'nullable|string|max:50',
                'tata_cara' => 'nullable|string',
            ]);

            // Cari data layanan
            $layanan = LayananPersuratan::findOrFail($id);

            // Update data
            $layanan->update($validated);

            // Kembalikan respons sukses
            return response()->json(['message' => 'Layanan berhasil diperbarui.']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan pada server.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            // Cari data layanan
            $layanan = LayananPersuratan::findOrFail($id);

            // Hapus data
            $layanan->delete();

            // Kembalikan respons sukses
            return response()->json(['message' => 'Layanan berhasil dihapus.']);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menghapus data.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function permohonanSuratanIndex()
    {
        $layanan = LayananPersuratan::all();
        return view('permohonansuratan', compact('layanan'));
    }
}
