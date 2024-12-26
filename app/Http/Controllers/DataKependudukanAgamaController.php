<?php

namespace App\Http\Controllers;

use App\Models\DataKependudukanAgama;
use Illuminate\Http\Request;

class DataKependudukanAgamaController extends Controller
{
    // Menampilkan daftar data
    public function index()
    {
        $data = DataKependudukanAgama::all();
        return view('data_kependudukan_agama.index', compact('data'));
    }

    // Menampilkan form untuk menambahkan data baru
    public function create()
    {
        return view('data_kependudukan_agama.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'jenis_kelompok' => 'required|string|max:255',
            'laki_laki' => 'required|integer|min:0',
            'perempuan' => 'required|integer|min:0',
        ]);

        $data=DataKependudukanAgama::create([
            'jenis_kelompok' => $request->jenis_kelompok,
            'laki_laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
            'jumlah' => $request->laki_laki + $request->perempuan,
        ]);

        return response()->json($data, 201);
    }

    // Menampilkan detail data berdasarkan ID
    public function show($id)
    {
        $data = DataKependudukanAgama::findOrFail($id);
        return view('data_kependudukan_agama.show', compact('data'));
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $data = DataKependudukanAgama::findOrFail($id);
        return view('data_kependudukan_agama.edit', compact('data'));
    }

    // Memperbarui data di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_kelompok' => 'required|string|max:255',
            'laki_laki' => 'required|integer|min:0',
            'perempuan' => 'required|integer|min:0',
        ]);

        $data = DataKependudukanAgama::findOrFail($id);
        $data->update([
            'jenis_kelompok' => $request->jenis_kelompok,
            'laki_laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
            'jumlah' => $request->laki_laki + $request->perempuan,
        ]);

        return response()->json(['message' => 'Data berhasil diperbarui!']);
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        $data = DataKependudukanAgama::findOrFail($id);
        $data->delete();

        return response()->json(['message' => 'Data berhasil dihapus!']);
    }
}
