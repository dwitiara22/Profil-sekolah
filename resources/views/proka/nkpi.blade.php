@extends('layouts.app')

@section('content')

<div class="bg-gray-100 min-h-screen p-8">

    <!-- CARD UTAMA -->
    <div class="bg-white rounded-3xl shadow-sm p-8 flex flex-col md:flex-row gap-8 items-center">

        <!-- KOLOM PROFIL KAPROKA  -->
        <div class="flex flex-col items-center text-center w-full md:w-44 shrink-0">
            
            <!-- Wadah Foto 4x6 -->
            <div class="w-32 h-48 bg-gray-200 rounded-2xl overflow-hidden shadow-lg border-2 border-indigo-600 flex items-center justify-center relative group">
                <!-- Ganti src dengan path file foto Kaproka NKPI Anda -->
                <img src="path-to-foto-kaproka-nkpi.jpg" 
                     alt="Foto Kaproka NKPI" 
                     class="w-full h-full object-cover">
                
                <!-- Placeholder jika foto belum dimuat -->
                <div class="absolute inset-0 bg-indigo-600 flex items-center justify-center text-white text-4xl font-bold hidden group-only:flex">
                    👤
                </div>
            </div>

            <!-- Nama Kaproka -->
            <h3 class="text-sm font-bold text-gray-800 mt-3 max-w-[150px] break-words leading-tight">
                Nama Kaproka NKPI, S.Pi.
            </h3>

            <!-- NIP -->
            <p class="text-xs text-gray-400 mt-1 font-mono">
                NIP. 19850101XXXXXXXXXX
            </p>
            
        </div>

        <!-- TEKS DESKRIPSI JURUSAN -->
        <div>
            <h1 class="text-4xl font-bold mt-3 text-gray-800">
                NKPI
            </h1>

            <p class="text-gray-500 mt-4 leading-relaxed max-w-3xl">
                Program keahlian NKPI berfokus pada pengembangan kompetensi
                siswa/i dalam bidang navigasi kapal penangkap ikan,
                keselamatan pelayaran, dan teknologi perikanan modern.
            </p>

            <div class="flex gap-4 mt-5">
                <div class="border px-4 py-2 rounded-xl text-sm bg-gray-50 text-gray-600 font-medium">
                    Ahli Nautika Kapal
                </div>
                <div class="border px-4 py-2 rounded-xl text-sm bg-gray-50 text-gray-600 font-medium">
                    Sertifikasi ANKPIN
                </div>
            </div>

        </div>
    </div>

    <!-- STATISTIK -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 mt-8">
        <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
            <h2 class="text-3xl font-bold text-indigo-600">120+</h2>
            <p class="text-gray-500 mt-2">Total Guru & Siswa/i</p>
        </div>
        <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
            <h2 class="text-3xl font-bold text-indigo-600">100%</h2>
            <p class="text-gray-500 mt-2">Digitalisasi Arsip</p>
        </div>
        <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
            <h2 class="text-3xl font-bold text-indigo-600">24</h2>
            <p class="text-gray-500 mt-2">Program Pelatihan</p>
        </div>
        <div class="bg-indigo-600 rounded-2xl p-6 text-center shadow-sm text-white">
            <h2 class="text-2xl font-bold">INTEGRITAS</h2>
            <p class="mt-2">Motto Layanan</p>
        </div>
    </div>

    <!-- SECTION TIM PENGAJAR (GURU) -->
    <div class="mt-10">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-3xl font-bold text-gray-800">Tim Pengajar NKPI</h2>
                <p class="text-gray-500 mt-2">Personel yang berdedikasi melayani administrasi program keahlian.</p>
            </div>
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-xl shadow transition">+ Tambah Guru</button>
        </div>

        <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="p-5 text-sm font-semibold text-gray-600">Nama Guru</th>
                            <th class="p-5 text-sm font-semibold text-gray-600">NIP</th>
                            <th class="p-5 text-sm font-semibold text-gray-600">Mata Pelajaran</th>
                            <th class="p-5 text-sm font-semibold text-gray-600 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="p-5 text-sm font-medium text-gray-800 flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-xs">BPS</div>
                                Bambang Purnomo, S.Pi.
                            </td>
                            <td class="p-5 text-sm text-gray-500 font-mono">198804122014021003</td>
                            <td class="p-5 text-sm text-gray-600">Ilmu Pelayaran Astronomi</td>
                            <td class="p-5 text-sm text-center">
                                <button class="text-indigo-600 hover:text-indigo-900 font-medium px-2">Edit</button>
                                <button class="text-red-600 hover:text-red-900 font-medium px-2">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION DATA SISWA/I -->
    <div class="mt-16">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-3xl font-bold text-gray-800">Data Siswa/i NKPI</h2>
                <p class="text-gray-500 mt-2">Daftar siswa/i aktif Program Keahlian NKPI.</p>
            </div>
            <button class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-xl shadow transition">+ Tambah Siswa</button>
        </div>

        <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100">
                            <th class="p-5 text-sm font-semibold text-gray-600">Nama Siswa/i</th>
                            <th class="p-5 text-sm font-semibold text-gray-600">NISN</th>
                            <th class="p-5 text-sm font-semibold text-gray-600">Kelas</th>
                            <th class="p-5 text-sm font-semibold text-gray-600">Status</th>
                            <th class="p-5 text-sm font-semibold text-gray-600 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="p-5 text-sm font-medium text-gray-800 flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center font-bold text-xs">HA</div>
                                Hendra Adiwijaya
                            </td>
                            <td class="p-5 text-sm text-gray-500 font-mono">0067890123</td>
                            <td class="p-5 text-sm text-gray-600">XII NKPI 2</td>
                            <td class="p-5 text-sm">
                                <span class="px-2.5 py-1 text-xs font-semibold text-green-700 bg-green-50 border border-green-200 rounded-full">Aktif</span>
                            </td>
                            <td class="p-5 text-sm text-center">
                                <button class="text-indigo-600 hover:text-indigo-900 font-medium px-2">Edit</button>
                                <button class="text-red-600 hover:text-red-900 font-medium px-2">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>

@endsection
