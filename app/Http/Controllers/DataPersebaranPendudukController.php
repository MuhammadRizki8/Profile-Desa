<?php

namespace App\Http\Controllers;

use App\Models\DataPersebaranPenduduk;
use Illuminate\Http\Request;

class DataPersebaranPendudukController extends Controller
{
    /**
     * Tampilkan semua data persebaran penduduk.
     */
    public function index()
    {
        $dataPenduduk = DataPersebaranPenduduk::all(); // Ambil semua data

        return view('admin.monografi-dashboard', compact('dataPenduduk'));
    }

    /**
     * Tambahkan data persebaran penduduk baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'group' => 'required|string|max:255',
            'male' => 'required|integer|min:0',
            'female' => 'required|integer|min:0',
            'total' => 'required|integer|min:0',
        ]);

        $data = DataPersebaranPenduduk::create($validated);
        return response()->json($data, 201);
    }

    /**
     * Tampilkan detail data persebaran penduduk berdasarkan ID.
     */
    public function show($id)
    {
        $data = DataPersebaranPenduduk::find($id);

        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $data = DataPersebaranPenduduk::findOrFail($id);
        return view('admin.edit-data-persebaran', compact('data'));
    }

    // Proses update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'group' => 'required|string|max:255',
            'male' => 'required|integer|min:0',
            'female' => 'required|integer|min:0',
        ]);

        $data = DataPersebaranPenduduk::findOrFail($id);
        $data->update([
            'group' => $request->group,
            'male' => $request->male,
            'female' => $request->female,
            'total' => $request->male + $request->female,
        ]);

        // Return JSON for AJAX
        return response()->json(['message' => 'Data berhasil diperbarui!']);
    }

    // Proses hapus data
    public function destroy($id)
    {
        $data = DataPersebaranPenduduk::findOrFail($id);
        $data->delete();

        return response()->json(['message' => 'Data berhasil dihapus!']);
    }

}
