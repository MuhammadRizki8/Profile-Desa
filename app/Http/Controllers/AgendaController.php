<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::all();
        return view('admin.agenda', compact('agendas'));
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:500',
                'agenda_date' => 'required|date',
            ]);

            // Tentukan path direktori tujuan
            $imageDirectory = public_path('assets/images/agenda_images');
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

            // Pindahkan file ke direktori tujuan
            $request->file('image')->move($imageDirectory, $imageName);

            // Simpan path gambar ke database
            $validated['image'] = "agenda_images/$imageName";

            // Simpan data agenda ke database
            $agenda = Agenda::create($validated);

            // Kembalikan respons JSON
            return response()->json($agenda, 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangani error validasi
            return response()->json([
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Tangani error lain
            return response()->json([
                'message' => 'Terjadi kesalahan pada server.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(Agenda $agenda)
    {
        return view('agenda.show', compact('agenda'));
    }

    public function edit(Agenda $agenda)
    {
        return view('agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:500',
                'agenda_date' => 'required|date',
            ]);

            // Jika ada file gambar yang diunggah
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if (!empty($agenda->image) && file_exists(public_path("assets/images/{$agenda->image}"))) {
                    unlink(public_path("assets/images/{$agenda->image}"));
                }

                // Tentukan path direktori tujuan
                $imageDirectory = public_path('assets/images/agenda_images');
                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

                // Pindahkan file ke direktori tujuan
                $request->file('image')->move($imageDirectory, $imageName);

                // Perbarui path gambar dalam validasi
                $validated['image'] = "agenda_images/$imageName";
            }

            // Perbarui data agenda
            $agenda->update($validated);

            return response()->json(['message' => 'Data berhasil diperbarui!']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangani error validasi
            return response()->json([
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Tangani error lain
            return response()->json([
                'message' => 'Terjadi kesalahan pada server.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(Agenda $agenda)
    {
        try {
            // Hapus file gambar jika ada
            if ($agenda->image && file_exists(public_path('assets/images/' . $agenda->image))) {
                unlink(public_path('assets/images/' . $agenda->image));
            }

            // Hapus data agenda dari database
            $agenda->delete();

            return response()->json(['message' => 'Agenda berhasil dihapus!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan saat menghapus data.', 'error' => $e->getMessage()], 500);
        }
    }
}
