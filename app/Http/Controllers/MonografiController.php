<?php

namespace App\Http\Controllers;

use App\Models\DataPersebaranPenduduk;
use App\Models\PopulationData;
use Illuminate\Http\Request;

class MonografiController extends Controller
{
    public function index()
    {
        $dataPenduduk = DataPersebaranPenduduk::all(); // Ambil semua data penduduk
        $datapopulasi = PopulationData::all(); // Ambil semua data populasi

        // Kirim kedua data ke view
        return view('admin.monografi-dashboard', compact('dataPenduduk', 'datapopulasi'));
    }
}
