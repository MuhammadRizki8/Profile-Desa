<?php

namespace App\Http\Controllers;

use App\Models\DataPersebaranPenduduk;
use App\Models\PopulationData;
use App\Models\DataKependudukanAgama;
use App\Models\PendidikanTerakhir;
use App\Models\DataPekerjaan;
use App\Models\DataKelompokUmur;
use Illuminate\Http\Request;

class MonografiController extends Controller
{
    public function index()
    {
        $dataPenduduk = DataPersebaranPenduduk::all(); // Ambil semua data penduduk
        $datapopulasi = PopulationData::all(); // Ambil semua data populasi
        $dataAgama = DataKependudukanAgama::all(); // Ambil semua data agama
        $dataPendidikan = PendidikanTerakhir::all(); // Ambil semua data pendidikan
        $dataPekerjaan = DataPekerjaan::all(); // Ambil semua data pekerjaan
        $dataKelompokUmur = DataKelompokUmur::all(); // Ambil semua data kelompok umur

        // Kirim semua data ke view
        return view('admin.monografi-dashboard', compact('dataPenduduk', 'datapopulasi', 'dataAgama', 'dataPendidikan', 'dataPekerjaan', 'dataKelompokUmur'));
    }
}
