<?php

namespace App\Http\Controllers;

use App\Models\PendidikanTerakhir;
use Illuminate\Http\Request;

class PendidikanTerakhirController extends Controller
{
    // Menampilkan data pendidikan terakhir
    public function index()
    {
        $data = PendidikanTerakhir::all();
        return view('pendidikan_terakhir.index', compact('data'));
    }

    // Menyimpan data pendidikan terakhir
    public function store(Request $request)
    {
        $request->validate([
            'jenis_kelompok' => 'required|string',
            'laki_laki' => 'required|integer',
            'perempuan' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $data=PendidikanTerakhir::create($request->all());

        return response()->json($data, 201);
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $data = PendidikanTerakhir::findOrFail($id);
        return view('pendidikan_terakhir.edit', compact('data'));
    }

    // Mengupdate data pendidikan terakhir
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_kelompok' => 'required|string',
            'laki_laki' => 'required|integer',
            'perempuan' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $data = PendidikanTerakhir::findOrFail($id);
        $data->update($request->all());

        return response()->json(['message' => 'Data berhasil diperbarui!']);
    }

    // Menghapus data pendidikan terakhir
    public function destroy($id)
    {
        $data = PendidikanTerakhir::findOrFail($id);
        $data->delete();

        return response()->json(['message' => 'Data berhasil dihapus!']);
    }
}
