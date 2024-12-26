<?php

namespace App\Http\Controllers;

use App\Models\PopulationData;
use Illuminate\Http\Request;

class PopulationDataController extends Controller
{
    /**
     * Menampilkan semua data.
     */
    public function index()
    {
        $dataPenduduk = PopulationData::all();
        return view('population.index', compact('dataPenduduk'));
    }

    /**
     * Menyimpan data baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_kelompok' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
        ]);

        PopulationData::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail data untuk diedit.
     */
    public function edit($id)
    {
        $data = PopulationData::findOrFail($id);
        return response()->json($data);
    }

    /**
     * Memperbarui data.
     */public function update(Request $request, $id)
        {

            $request->validate([
                'jenis_kelompok' => 'required|string|max:255',
                'jumlah' => 'required|integer|min:0',
            ]);

            $data = PopulationData::findOrFail($id);
            $data->update($request->all());

            return response()->json(['message' => 'Data berhasil diperbarui!']);
        }

        public function destroy($id)
        {

            $data = PopulationData::findOrFail($id);
            $data->delete();

            return response()->json(['message' => 'Data berhasil dihapus!']);
        }

}
