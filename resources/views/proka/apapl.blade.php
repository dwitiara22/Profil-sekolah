@extends('layouts.app')

@php
    use Illuminate\Support\Facades\Auth;
@endphp

@section('content')

<div class="bg-gray-100 min-h-screen p-8"
     x-data="{ modalKaproka:false }">

    <!-- ALERT -->
    @if(session('success'))
        <div class="mb-6 bg-green-500 text-white px-6 py-4 rounded-2xl shadow">
            {{ session('success') }}
        </div>
    @endif

    <!-- CARD UTAMA -->
    <div class="bg-white rounded-3xl shadow-sm p-8 flex flex-col md:flex-row gap-8 items-center">

        <!-- KOLOM PROFIL -->
        <div class="flex flex-col items-center text-center w-full md:w-44 shrink-0">

            <!-- FOTO -->
            <div class="w-32 h-48 bg-gray-200 rounded-2xl overflow-hidden shadow-lg border-2 border-indigo-600">

                <img src="{{ asset('storage/' . $kepala->foto) }}"
                     alt="Foto Kaproka"
                     class="w-full h-full object-cover">

            </div>

            <!-- BUTTON ADMIN -->
            @auth
                @if(Auth::user()->role == 'admin')

                    <button
                        type="button"
                        @click="modalKaproka = true"
                        class="mt-3 bg-indigo-600 hover:bg-indigo-700 text-white text-xs px-4 py-2 rounded-xl transition">

                        New Picture

                    </button>

                @endif
            @endauth
            

            <!-- NAMA -->
            <h3 class="text-sm font-bold text-gray-800 mt-3 max-w-[150px] break-words leading-tight">
                {{ $kepala->nama_lengkap }}
            </h3>

            <!-- NIP -->
            <p class="text-xs text-gray-400 mt-1 font-mono">
                NIP. {{ $kepala->nip }}
            </p>

        </div>

        <!-- DESKRIPSI -->
        <div class="flex-1">

            <h1 class="text-4xl font-bold text-gray-800">
                APAPL
            </h1>

            <p class="text-gray-500 mt-4 leading-relaxed max-w-3xl">
                Program keahlian APAPL berfokus pada teknik pembenihan,
                pembesaran, manajemen pakan, pengelolaan lingkungan,
                serta analisis usaha budidaya komoditas perikanan air
                payau dan laut bernilai ekonomis tinggi.
            </p>

            <div class="flex gap-4 mt-5 flex-wrap">

                <div class="border px-4 py-2 rounded-xl text-sm bg-gray-50 text-gray-600 font-medium">
                    Budidaya Air Laut/Payau
                </div>

                <div class="border px-4 py-2 rounded-xl text-sm bg-gray-50 text-gray-600 font-medium">
                    Manajemen Pembenihan
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

    <!-- TIM PENGAJAR -->
    <div class="mt-12">

        <div class="flex justify-between items-center mb-6">

            <div>

                <h2 class="text-3xl font-bold text-gray-800">
                    Tim Pengajar APAPL
                </h2>

                <p class="text-gray-500 mt-2">
                    Personel pengajar program keahlian.
                </p>

            </div>

            @auth
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-xl shadow transition">
                + Tambah Guru
            </button>
            @endauth

        </div>

        <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-gray-100">

            <div class="overflow-x-auto">

                <table class="w-full text-left border-collapse">

                    <thead>

                        <tr class="bg-gray-50 border-b border-gray-100">

                            <th class="p-5 text-sm font-semibold text-gray-600">
                                Nama Guru
                            </th>

                            <th class="p-5 text-sm font-semibold text-gray-600">
                                NIP
                            </th>

                            <th class="p-5 text-sm font-semibold text-gray-600">
                                Mata Pelajaran
                            </th>

                            @auth
                            <th class="p-5 text-sm font-semibold text-gray-600 text-center">
                                Aksi
                            </th>
                            @endauth

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        <tr class="hover:bg-gray-50/50 transition">

                            <td class="p-5 text-sm font-medium text-gray-800">
                                Dewi Lestari, S.Pi.
                            </td>

                            <td class="p-5 text-sm text-gray-500 font-mono">
                                199205202018012004
                            </td>

                            <td class="p-5 text-sm text-gray-600">
                                Kultur Pakan Alami
                            </td>

                            @auth
                            <td class="p-5 text-sm text-center whitespace-nowrap">

                                <button class="text-indigo-600 hover:text-indigo-900 font-medium mr-3">
                                    Edit
                                </button>

                                <button class="text-red-600 hover:text-red-900 font-medium">
                                    Hapus
                                </button>

                            </td>
                            @endauth

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- DATA SISWA -->
    <div class="mt-16">

        <div class="flex justify-between items-center mb-6">

            <div>

                <h2 class="text-3xl font-bold text-gray-800">
                    Data Siswa/i APAPL
                </h2>

                <p class="text-gray-500 mt-2">
                    Daftar siswa aktif Program Keahlian APAPL.
                </p>

            </div>

            @auth
            <button class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-xl shadow transition">
                + Tambah Siswa
            </button>
            @endauth

        </div>

        <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-gray-100">

            <div class="overflow-x-auto">

                <table class="w-full text-left border-collapse">

                    <thead>

                        <tr class="bg-gray-50 border-b border-gray-100">

                            <th class="p-5 text-sm font-semibold text-gray-600">
                                Nama Siswa/i
                            </th>

                            <th class="p-5 text-sm font-semibold text-gray-600">
                                NISN
                            </th>

                            <th class="p-5 text-sm font-semibold text-gray-600">
                                Kelas
                            </th>

                            <th class="p-5 text-sm font-semibold text-gray-600">
                                Status
                            </th>

                            @auth
                            <th class="p-5 text-sm font-semibold text-gray-600 text-center">
                                Aksi
                            </th>
                            @endauth

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        <tr class="hover:bg-gray-50/50 transition">

                            <td class="p-5 text-sm font-medium text-gray-800">
                                Ahmad Mudzakir
                            </td>

                            <td class="p-5 text-sm text-gray-500 font-mono">
                                0065544332
                            </td>

                            <td class="p-5 text-sm text-gray-600">
                                X APAPL 1
                            </td>

                            <td class="p-5 text-sm">

                                <span class="px-2.5 py-1 text-xs font-semibold text-green-700 bg-green-50 border border-green-200 rounded-full">
                                    Aktif
                                </span>

                            </td>

                            @auth
                            <td class="p-5 text-sm text-center whitespace-nowrap">

                                <button class="text-indigo-600 hover:text-indigo-900 font-medium mr-3">
                                    Edit
                                </button>

                                <button class="text-red-600 hover:text-red-900 font-medium">
                                    Hapus
                                </button>

                            </td>
                            @endauth

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- MODAL -->
    <div x-show="modalKaproka"
         x-cloak
         class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">

        <div class="bg-white rounded-3xl p-8 w-full max-w-lg">

            <h2 class="text-2xl font-bold mb-6">
                Update Data Kaproka
            </h2>

            <form action="{{ route('kaproka.update', $kepala->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <!-- FOTO -->
                <div class="mb-5">

                    <label class="block mb-2 text-sm font-medium">
                        Foto Kaproka
                    </label>

                    <input type="file"
                           name="foto"
                           class="w-full border rounded-xl px-4 py-3">

                </div>

                <!-- NAMA -->
                <div class="mb-5">

                    <label class="block mb-2 text-sm font-medium">
                        Nama Lengkap
                    </label>

                    <input type="text"
                           name="nama_lengkap"
                           value="{{ $kepala->nama_lengkap }}"
                           class="w-full border rounded-xl px-4 py-3">

                </div>

                <!-- NIP -->
                <div class="mb-6">

                    <label class="block mb-2 text-sm font-medium">
                        NIP
                    </label>

                    <input type="text"
                           name="nip"
                           value="{{ $kepala->nip }}"
                           class="w-full border rounded-xl px-4 py-3">

                </div>

                <div class="flex gap-4">

                    <button type="submit"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-xl w-full">

                        Simpan

                    </button>

                    <button type="button"
                            @click="modalKaproka = false"
                            class="bg-gray-200 px-5 py-3 rounded-xl w-full">

                        Batal

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- ALPINE JS -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
[x-cloak]{
    display:none !important;
}
</style>

@endsection
```
