<?php

namespace App\Http\Controllers\Timja;

use App\Http\Controllers\Controller;
use App\Models\TimKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengajaranController extends Controller
{
   public function index()
    {
        $kategori = 'pengajaran'; // Tentukan langsung di sini

        // Menggunakan oldest() agar data pertama yang diinput berada di paling atas
        $data = TimKerja::where('kategori', $kategori)->oldest()->get();

        return view('timja.pengajaran.index', compact('data', 'kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jabatan_di_tim' => 'required',
            'kategori' => 'required',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('timja', 'public');
        }

        TimKerja::create([
            'user_id' => auth()->id(), // Pastikan user sudah login
            'nama_lengkap' => $request->nama_lengkap,
            'nip' => $request->nip,
            'jabatan_di_tim' => $request->jabatan_di_tim,
            'kategori' => $request->kategori,
            'foto' => $path
        ]);

        return back()->with('success', 'Data berhasil ditambahkan!');
    }

   public function update(Request $request, TimKerja $pengajaran)
    {
        // 1. Validasi Input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jabatan_di_tim' => 'required|string|max:255',
            'kategori' => 'required',
            'nip' => 'nullable|string|max:50',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // 2. Siapkan data yang akan diupdate (kecuali foto)
        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'nip' => $request->nip,
            'jabatan_di_tim' => $request->jabatan_di_tim,
            'kategori' => $request->kategori,
        ];

        // 3. Logika Update Foto
        if ($request->hasFile('foto')) {
            // Hapus foto lama dari storage jika ada
            if ($pengajaran->foto) {
                Storage::disk('public')->delete($pengajaran->foto);
            }

            // Simpan foto baru
            $data['foto'] = $request->file('foto')->store('timja', 'public');
        }

        // 4. Eksekusi Update ke Database
        $pengajaran->update($data);

        // 5. Kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Data tim kerja berhasil diperbarui!');
    }

    // Pastikan parameter di Route sesuai dengan nama variabel ini ($timkerja)
    public function destroy(TimKerja $pengajaran)
    {
        if($pengajaran->foto) {
            Storage::disk('public')->delete($pengajaran->foto);
        }
        $pengajaran->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }

}


