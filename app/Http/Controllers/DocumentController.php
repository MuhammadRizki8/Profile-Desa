<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class DocumentController extends Controller
{
    // Menampilkan semua dokumen
    public function index()
    {
        $documents = Document::all();
        return view('admin.documents.index', compact('documents'));
    }
    public function pemerintahan()
    {
        // Memfilter dokumen berdasarkan tipe
        $rpjmDocuments = Document::where('type', 'RPJM')->get();  // Dokumen dengan tipe RPJM
        $apbDocuments = Document::where('type', 'APB')->get();    // Dokumen dengan tipe APB
        $rencanaKerjaDocuments = Document::where('type', 'Rencana Kerja & Anggaran')->get();  // Dokumen dengan tipe Rencana Kerja & Anggaran

        // Mengirimkan ketiga variabel tersebut ke view
        return view('admin.pemerintahan', compact('rpjmDocuments', 'apbDocuments', 'rencanaKerjaDocuments'));
    }

    
    // Menampilkan form untuk menambahkan dokumen baru
    public function create()
    {
        return view('admin.documents.create');
    }

    // Menyimpan dokumen baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        $fileName = time() . '-' . $request->file('document')->getClientOriginalName();
        $request->file('document')->move(public_path('assets/documents'), $fileName);

        Document::create([
            'document' => $fileName,
            'title' => $request->title,
            'category' => $request->category,
            'type' => $request->type,
        ]);

        return response()->json(['message' => 'Dokumen berhasil ditambahkan!']);
    }

    // Menampilkan detail dokumen
    public function show(Document $document)
    {
        return view('admin.documents.show', compact('document'));
    }

    // Menampilkan form untuk mengedit dokumen
    public function edit(Document $document)
    {
        return view('admin.documents.edit', compact('document'));
    }

    // Memperbarui dokumen di database
    public function update(Request $request, Document $document)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'document' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('document')) {
            // Hapus file lama
            if ($document->document && file_exists(public_path('assets/documents/' . $document->document))) {
                unlink(public_path('assets/documents/' . $document->document));
            }

            // Simpan file baru
            $fileName = time() . '-' . $request->file('document')->getClientOriginalName();
            $request->file('document')->move(public_path('assets/documents'), $fileName);
            $document->document = $fileName;
        }

        $document->update([
            'title' => $request->title,
            'category' => $request->category,
            'type' => $request->type,
        ]);

        return response()->json(['message' => 'Dokumen berhasil diperbarui!']);
    }

    // Menghapus dokumen
    public function destroy(Document $document)
    {
        try {
            // Hapus file dokumen
            if ($document->document && file_exists(public_path('assets/documents/' . $document->document))) {
                unlink(public_path('assets/documents/' . $document->document));
            }

            // Hapus data dari database
            $document->delete();

            return response()->json(['message' => 'Dokumen berhasil dihapus!']);
        } catch (\Exception $e) {
            Log::error('Error deleting document:', ['message' => $e->getMessage()]);
            return response()->json(['message' => 'Terjadi kesalahan saat menghapus dokumen.', 'error' => $e->getMessage()], 500);
        }
    }
}
