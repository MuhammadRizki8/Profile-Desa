<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data berita dari database
        $news = News::orderBy('date', 'desc')->get(); // Ambil semua berita, urutkan berdasarkan tanggal
        
        // Ambil semua data galeri dari database
        $gallery = Gallery::all(); // Ambil semua data gallery
        
        // Kirim data berita dan gallery ke view
        return view('home', compact('news', 'gallery'));
    }
}
