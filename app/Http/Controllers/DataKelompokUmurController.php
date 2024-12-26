<?php

namespace App\Http\Controllers;

use App\Models\DataKelompokUmur;
use Illuminate\Http\Request;

class DataKelompokUmurController extends Controller
{
    // Menampilkan data kelompok umur
    public function index()
    {
        $data = DataKelompokUmur::all();
        return view('data_kelompok_umur.index', compact('data'));
    }

    // Menyimpan data kelompok umur
    public function store(Request $request)
    {
        $request->validate([
            'jenis_kelompok' => 'required|string',
            'laki_laki' => 'required|integer',
            'perempuan' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $data=DataKelompokUmur::create($request->all());

        return response()->json($data, 201);
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $data = DataKelompokUmur::findOrFail($id);
        return view('data_kelompok_umur.edit', compact('data'));
    }

    // Mengupdate data kelompok umur
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_kelompok' => 'required|string',
            'laki_laki' => 'required|integer',
            'perempuan' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $data = DataKelompokUmur::findOrFail($id);
        $data->update($request->all());

        return response()->json(['message' => 'Data berhasil diperbarui!']);
    }

    // Menghapus data kelompok umur
    public function destroy($id)
    {
        $data = DataKelompokUmur::findOrFail($id);
        $data->delete();

        return response()->json(['message' => 'Data berhasil dihapus!']);
    }
}
