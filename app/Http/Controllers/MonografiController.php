<?php

namespace App\Http\Controllers;

use App\Models\DataPersebaranPenduduk;
use App\Models\PopulationData;
use App\Models\DataKependudukanAgama;
use Illuminate\Http\Request;

class MonografiController extends Controller
{
    public function index()
    {
        $dataPenduduk = DataPersebaranPenduduk::all(); // Ambil semua data penduduk
        $datapopulasi = PopulationData::all(); // Ambil semua data populasi
        $dataAgama = DataKependudukanAgama::all(); // Ambil semua data agama

        // Kirim semua data ke view
        return view('admin.monografi-dashboard', compact('dataPenduduk', 'datapopulasi', 'dataAgama'));
    }
}
