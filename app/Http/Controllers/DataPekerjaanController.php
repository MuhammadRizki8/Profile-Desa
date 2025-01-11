<?php

namespace App\Http\Controllers;

use App\Models\DataPekerjaan;
use Illuminate\Http\Request;

class DataPekerjaanController extends Controller
{
    // Menampilkan data pekerjaan
    public function index()
    {
        $data = DataPekerjaan::all();
        return view('data_pekerjaan.index', compact('data'));
    }

    // Menyimpan data pekerjaan
    public function store(Request $request)
    {
        $request->validate([
            'jenis_kelompok' => 'required|string',
            'laki_laki' => 'required|integer',
            'perempuan' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $data=DataPekerjaan::create($request->all());

        return response()->json($data, 201);
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $data = DataPekerjaan::findOrFail($id);
        return view('data_pekerjaan.edit', compact('data'));
    }

    // Mengupdate data pekerjaan
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_kelompok' => 'required|string',
            'laki_laki' => 'required|integer',
            'perempuan' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $data = DataPekerjaan::findOrFail($id);
        $data->update($request->all());

        return response()->json(['message' => 'Data berhasil diperbarui!']);
    }

    // Menghapus data pekerjaan
    public function destroy($id)
    {
        $data = DataPekerjaan::findOrFail($id);
        $data->delete();

        return response()->json(['message' => 'Data berhasil dihapus!']);
    }
}
