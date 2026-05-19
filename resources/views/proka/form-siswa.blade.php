@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen pt-32 pb-16 w-full flex items-center justify-center px-4">
    <div class="bg-white p-8 rounded-3xl shadow-sm max-w-lg w-full border border-gray-100">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            {{ $mode == 'edit' ? 'Edit Data Siswa/i' : 'Tambah Siswa/i Baru' }} ({{ $proka }})
        </h2>
        
        <!-- 🟢 KOTAK NOTIFIKASI WARNING ANTI-DUPLIKAT NISN SISWA -->
        @if(session('error_siswa'))
            <div class="mb-5 p-4 bg-red-500 text-white rounded-2xl shadow-sm font-medium text-sm flex items-center gap-2">
                <span>⚠️</span>
                <span>{{ session('error_siswa') }}</span>
            </div>
        @endif
        
        <form action="{{ $mode == 'edit' ? route('siswa.update', $siswa->id) : route('siswa.store') }}" method="POST">
            @csrf
            @if($mode == 'edit') @method('PUT') @endif
            
            <!-- Hidden input untuk melempar kode proka -->
            <input type="hidden" name="proka" value="{{ $proka }}">

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-2">Nama Lengkap Siswa/i</label>
                <input type="text" name="nama" value="{{ $siswa->nama_lengkap ?? '' }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-indigo-500 text-gray-700">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-2">NISN</label>
                <input type="text" 
                        name="nisn" 
                        value="{{ $siswa->nip ?? '' }}" 
                        inputmode="numeric" 
                        pattern="[0-9]*" 
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
                        required 
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-indigo-500 text-gray-700 font-mono">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-2">Kelas</label>
                <input type="text" name="kelas" value="{{ $siswa->kelas_atau_mapel ?? '' }}" placeholder="Contoh: XII {{ $proka }} 1" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-indigo-500 text-gray-700">
            </div>
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600 mb-2">Status Siswa/i</label>
                <select name="status" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-indigo-500 text-gray-700 bg-white">
                    <option value="Aktif" {{ ($siswa->status ?? '') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Drop Out" {{ ($siswa->status ?? '') == 'Drop Out' ? 'selected' : '' }}>Drop Out</option>
                    <option value="Lulus" {{ ($siswa->status ?? '') == 'Lulus' ? 'selected' : '' }}>Lulus</option>
                </select>
            </div>
            
            <div class="flex gap-4">
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl shadow font-medium transition">
                    Simpan Data
                </button>
                <a href="{{ route('proka', strtolower($proka)) }}" class="w-full bg-gray-100 hover:bg-gray-200 text-gray-600 py-3 rounded-xl text-center font-medium transition">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
