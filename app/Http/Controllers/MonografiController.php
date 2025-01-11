<?php

namespace App\Http\Controllers;

use App\Models\DataKelompokUmur;
use App\Models\DataKependudukanAgama;
use App\Models\DataPekerjaan;
use App\Models\DataPersebaranPenduduk;
use App\Models\PendidikanTerakhir;
use App\Models\PopulationData;
use Illuminate\Http\Request;

class MonografiController extends Controller
{
    public function index()
    {
        $dataPenduduk = DataPersebaranPenduduk::all();
        $datapopulasi = PopulationData::all();
        $dataAgama = DataKependudukanAgama::all();
        $dataPendidikan = PendidikanTerakhir::all();
        $dataPekerjaan = DataPekerjaan::all();
        $dataKelompokUmur = DataKelompokUmur::all();

        return view('admin.monografi-dashboard', compact(
            'dataPenduduk',
            'datapopulasi',
            'dataAgama',
            'dataPendidikan',
            'dataPekerjaan',
            'dataKelompokUmur'
        ));
    }

    public function show()
    {
        // Persebaran Penduduk
        $dataPenduduk = DataPersebaranPenduduk::all()->map(function ($item) {
            return [
                'rw' => $item->group,
                'laki' => $item->male,
                'perempuan' => $item->female,
                'total' => $item->total,
            ];
        });

        // Populasi
        $datapopulasi = PopulationData::all()->map(function ($item) {
            return [
                'jenis' => $item->jenis_kelompok,
                'jumlah' => $item->jumlah,
            ];
        });

        // Data Agama
        $dataAgama = DataKependudukanAgama::all()->map(function ($item) {
            return [
                'agama' => $item->jenis_kelompok,
                'laki' => $item->laki_laki,
                'perempuan' => $item->perempuan,
                'total' => $item->jumlah,
            ];
        });

        // Pendidikan Terakhir
        $dataPendidikan = PendidikanTerakhir::all()->map(function ($item) {
            return [
                'pendidikan' => $item->jenis_kelompok,
                'laki' => $item->laki_laki,
                'perempuan' => $item->perempuan,
                'total' => $item->jumlah,
            ];
        });

        // Data Pekerjaan
        $dataPekerjaan = DataPekerjaan::all()->map(function ($item) {
            return [
                'pekerjaan' => $item->jenis_kelompok,
                'laki' => $item->laki_laki,
                'perempuan' => $item->perempuan,
                'total' => $item->jumlah,
            ];
        });

        // Data Kelompok Umur
        $dataKelompokUmur = DataKelompokUmur::all()->map(function ($item) {
            return [
                'umur' => $item->jenis_kelompok,
                'laki' => $item->laki_laki,
                'perempuan' => $item->perempuan,
                'total' => $item->jumlah,
            ];
        });

        return view('monografi', compact(
            'dataPenduduk',
            'datapopulasi',
            'dataAgama',
            'dataPendidikan',
            'dataPekerjaan',
            'dataKelompokUmur'
        ));
    }
}
