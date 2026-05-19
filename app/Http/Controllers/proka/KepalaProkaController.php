<?php

namespace App\Http\Controllers\proka;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KepalaProkaController extends Controller
{
    public function index($slug)
    {
        $slugLower = strtolower($slug);
        $slugUpper = strtoupper($slug);

        $prokaDb = DB::table('prokas')->where('nama_proka', $slugUpper)->first();

        if (!$prokaDb) {
            abort(404);
        }

        $kepalaProka = DB::table('kepala_prokas')->where('proka_id', $prokaDb->id)->first();

        // 🟢 PERBAIKAN GURU DI INDEX: Membaca nama mata pelajaran dari kolom 'foto'
        $gurus = DB::table('tim_kerjas')
                    ->where('jabatan_di_tim', $slugUpper) 
                    ->where('kategori', 'pengajaran')
                    ->get()->map(function ($item) {
                        $item->mapel = $item->foto ?? 'Produktif'; // Mengalihkan isi kolom 'foto' ke properti mapel
                        return $item;
                    });

        // Logika data siswa 
        $siswas = DB::table('tim_kerjas')
                ->where('jabatan_di_tim', 'LIKE', $slugUpper . '-%')
                ->where('kategori', 'kesiswaan')  
                ->get()->map(function ($item) {
                    $item->status = $item->foto ?? 'Aktif'; 
                    
                    // Pecah kembali teks gabungan proka-kelas untuk mengambil kelas aslinya
                    $pecahString = explode('-', $item->jabatan_di_tim);
                    $item->kelas = $pecahString[1] ?? '-'; 
                    
                    return $item;
                });

        $totalPersonel = $gurus->count() + $siswas->count();
       
        $badges = [
            'nkpi'  => ['Ahli Nautika Kapal', 'Sertifikasi ANKPIN'],
            'tkpi'  => ['Permesinan Kapal', 'Sertifikasi ATKPIN'],
            'apapl' => ['Budidaya Air Laut/Payau', 'Manajemen Pembenihan'],
            'aphp'  => ['Pengolahan Hasil Laut', 'Mutu Pangan & HACCP'],
        ];

        $data = [
            'judul'     => $prokaDb->nama_proka,
            'deskripsi' => 'Program keahlian ' . $prokaDb->nama_proka . ' berfokus pada pengembangan kompetensi siswa/i dalam bidang teknologi kelautan dan perikanan.',
            'badge'     => $badges[$slugLower] ?? [],
            'gurus'     => $gurus,
            'siswas'    => $siswas,
            'total'     => $totalPersonel,
            'nama_kepala' => $kepalaProka->nama_kepala ?? 'Belum Ditentukan',
            'nip_kepala'  => $kepalaProka->nip ?? '-',
            'foto_kepala' => $kepalaProka->foto ?? 'default.jpg'
        ];

        return view('proka.index', compact('data'));
    }

    // --- MANAJEMEN GURU (Disesuaikan dengan Nama Kolom ERD: nama_lengkap, nip, jabatan_di_tim) ---
    public function createGuru($proka) {
        return view('proka.form-guru', ['proka' => strtoupper($proka), 'mode' => 'tambah', 'guru' => null]);
    }
    
    public function storeGuru(Request $request) {
        $cekNip = DB::table('tim_kerjas')->where('nip', $request->nip)->first();
        
        if ($cekNip) {
            return redirect()->back()->withInput()->with('error_guru', 'NIP guru sudah terdaftar!');
        }

        DB::table('tim_kerjas')->insert([
            'user_id'          => auth()->id() ?? 1, 
            'nama_lengkap'     => $request->nama, 
            'nip'              => $request->nip,  
            'jabatan_di_tim'   => $request->proka, 
            'foto'             => $request->mapel, // Simpan teks mata pelajaran ke kolom foto yang sah di DB Anda
            'kategori'         => 'pengajaran', 
            'created_at'       => now(), 
            'updated_at'       => now()
        ]);
        return redirect()->route('proka', strtolower($request->proka))->with('success', 'Guru berhasil disimpan!');
    }

    
    public function editGuru($id) {
        $guru = DB::table('tim_kerjas')->where('id', $id)->first();
        return view('proka.form-guru', ['proka' => $guru->jabatan_di_tim, 'mode' => 'edit', 'guru' => $guru]);
    }
    
    public function updateGuru(Request $request, $id) {
        DB::table('tim_kerjas')->where('id', $id)->update([
            'nama_lengkap'     => $request->nama,
            'nip'              => $request->nip,
            'foto'             => $request->mapel, // Update data mapel ke kolom foto
            'updated_at'       => now()
        ]);
        return redirect()->route('proka', strtolower($request->proka))->with('success', 'Guru berhasil diupdate!');
    }

    
    public function destroyGuru($id) {
        $guru = DB::table('tim_kerjas')->where('id', $id)->first();
        DB::table('tim_kerjas')->where('id', $id)->delete();
        return redirect()->route('proka', strtolower($guru->jabatan_di_tim))->with('success', 'Guru berhasil dihapus!');
    }

    // --- MANAJEMEN DATA SISWA (HANYA BAGIAN INI YANG DIPERBAIKI) ---
    public function createSiswa($proka) {
        return view('proka.form-siswa', ['proka' => strtoupper($proka), 'mode' => 'tambah', 'siswa' => null]);
    }
    
    public function storeSiswa(Request $request) {
        $kodeProka = strtoupper($request->proka);

        // Cek apakah NISN Siswa sudah terdaftar di database (kolom nip)
        $cekNisn = DB::table('tim_kerjas')->where('nip', $request->nisn)->first();
        
        if ($cekNisn) {
            return redirect()->back()
                ->withInput() // Mempertahankan teks yang sudah diketik agar tidak hilang
                ->with('error_siswa', 'NISN siswa sudah terdaftar!');
        }

         $jabatanDanKelas = $kodeProka . '-' . $request->kelas;
        DB::table('tim_kerjas')->insert([
            'user_id'          => auth()->id() ?? 1, 
            'nama_lengkap'     => $request->nama,
            'nip'              => $request->nisn, 
            'jabatan_di_tim'   => $jabatanDanKelas, 
            'kategori'         => 'kesiswaan',
            'foto'             => $request->status ?? 'Aktif', 
            'created_at'       => now(), 
            'updated_at'       => now()
        ]);

        return redirect()->route('proka', strtolower($kodeProka))->with('success', 'Siswa/i berhasil disimpan!');
    }


            // ==========================================
    // FUNGSI EDIT SISWA (Membuka Form Edit)
    // ==========================================
    public function editSiswa($id) {
        $siswa = DB::table('tim_kerjas')->where('id', $id)->first();
        
        if (!$siswa) {
            abort(404);
        }

        $siswa->status = $siswa->foto ?? 'Aktif';
        
        // Memecah teks gabungan secara aman menggunakan explode
        $pecahString = explode('-', $siswa->jabatan_di_tim);
        
        // Ambil elemen pertama sebagai kode proka asli (Huruf kapital bersih)
        $kodeProkaAsli = trim($pecahString[0] ?? 'NKPI');
        
        // Ambil elemen kedua sebagai nama kelas asli yang akan dimasukkan ke kotak input form
        $siswa->kelas_atau_mapel = trim($pecahString[1] ?? ''); 

        return view('proka.form-siswa', [
            'proka' => strtoupper($kodeProkaAsli), 
            'mode' => 'edit', 
            'siswa' => $siswa
        ]);
    }
    
    // ==========================================
    // FUNGSI UPDATE SISWA (Proses Klik Tombol Simpan Edit)
    // ==========================================
    public function updateSiswa(Request $request, $id) {
        // Bersihkan data input proka dari spasi atau karakter tambahan
        $kodeProka = strtoupper(trim($request->proka));
        $namaKelas = trim($request->kelas);
        
        // Gabungkan kembali Kode Proka bersih dan Nama Kelas Baru untuk disimpan ke DB
        $jabatanDanKelasBaru = $kodeProka . '-' . $namaKelas;

        DB::table('tim_kerjas')->where('id', $id)->update([
            'nama_lengkap'     => $request->nama,
            'nip'              => $request->nisn,
            'jabatan_di_tim'   => $jabatanDanKelasBaru, // Menyimpan format bersih, misal: NKPI-XII NKPI 1
            'foto'             => $request->status ?? 'Aktif',
            'updated_at'       => now()
        ]);

        // 🟢 PERBAIKAN UTAMA: Mengunci redirect murni ke proka huruf kecil (contoh: /proka/nkpi) tanpa tercampur nama kelas!
        return redirect()->route('proka', strtolower($kodeProka))->with('success', 'Siswa/i berhasil diupdate!');
    }

    
    public function destroySiswa($id) {
        // Cari data siswa yang akan dihapus berdasarkan ID
        $siswa = DB::table('tim_kerjas')->where('id', $id)->first();
        
        if (!$siswa) {
            abort(404);
        }

        // Pecah string jabatan_di_tim (misal: NKPI-XII NKPI 1) untuk mendapatkan kode proka murni
        $pecahString = explode('-', $siswa->jabatan_di_tim);
        $kodeProka = trim($pecahString[0] ?? 'NKPI');

        // Hapus data dari database
        DB::table('tim_kerjas')->where('id', $id)->delete();

        // PERBAIKAN REDIRECT: Alihkan rute murni ke nama proka huruf kecil (contoh: /proka/nkpi)
        return redirect()->route('proka', strtolower($kodeProka))->with('success', 'Siswa/i berhasil dihapus!');
    }
}
