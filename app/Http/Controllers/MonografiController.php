<?php

namespace App\Http\Controllers;

use App\Models\DataPersebaranPenduduk;
use Illuminate\Http\Request;

class MonografiController extends Controller
{
    public function index()
    {
        $dataPenduduk = DataPersebaranPenduduk::all(); // Ambil semua data

        return view('admin.monografi-dashboard', compact('dataPenduduk'));
    }
}
