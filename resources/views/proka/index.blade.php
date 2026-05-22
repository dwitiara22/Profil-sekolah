```blade
@extends('layouts.app')

@section('content')

<div class="bg-gray-100 min-h-screen pt-32 pb-16"
     x-data="prokaApp()">

    <div class="container mx-auto px-4">

        @if(session('success'))
            <div class="mb-6 p-4 bg-green-500 text-white rounded-2xl shadow font-medium">
                {{ session('success') }}
            </div>
        @endif

        <!-- CARD UTAMA -->
        <div class="bg-white rounded-3xl shadow-sm p-8 flex flex-col md:flex-row gap-8 items-center border border-gray-100">

            <!-- FOTO KAPROKA -->
            <div class="flex flex-col items-center text-center w-full md:w-44 shrink-0">

                <div class="w-32 h-48 bg-gray-200 rounded-2xl overflow-hidden shadow-lg border-2 border-indigo-600 flex items-center justify-center">

                    <img src="{{ asset('images/' . $data['foto_kepala']) }}"
                        alt="Foto Kaproka"
                        class="w-full h-full object-cover">
                </div>

                <h3 class="text-sm font-bold text-gray-800 mt-3 max-w-[150px] leading-tight">
                     {{ $data['nama_kepala'] }}
                </h3>

                <p class="text-xs text-gray-400 mt-1 font-mono">
                    NIP. {{ $data['nip_kepala'] }}
                </p>

            </div>

            <!-- DESKRIPSI -->
            <div class="w-full">

                <h1 class="text-4xl font-bold text-[#163C67]">
                    {{ $data['judul'] }}
                </h1>

                <p class="mt-4 text-gray-600 leading-relaxed max-w-3xl">
                    {{ $data['deskripsi'] }}
                </p>

                <div class="flex flex-wrap gap-3 mt-6">

                    @foreach($data['badge'] as $badge)

                        <div class="border px-4 py-2 rounded-xl text-sm bg-gray-50 text-gray-600 font-medium">
                            {{ $badge }}
                        </div>

                    @endforeach

                </div>

            </div>
        </div>

        <!-- STATISTIK -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 mt-8">

            <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-gray-100">
                <h2 class="text-3xl font-bold text-indigo-600">
                    {{ $data['total'] }}
                </h2>

                <p class="text-gray-500 mt-2 text-sm">
                    Total Siswa/i
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-gray-100">
                <h2 class="text-3xl font-bold text-indigo-600">100%</h2>
                <p class="text-gray-500 mt-2 text-sm">Digitalisasi Arsip</p>
            </div>

            <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-gray-100">
                <h2 class="text-3xl font-bold text-indigo-600">24</h2>
                <p class="text-gray-500 mt-2 text-sm">Program Pelatihan</p>
            </div>

            <div class="bg-indigo-600 rounded-2xl p-6 text-center shadow-sm text-white">
                <h2 class="text-2xl font-bold">INTEGRITAS</h2>
                <p class="mt-2 text-sm text-indigo-100">Motto Layanan</p>
            </div>

        </div>

        @auth
       <!-- KAPROKA ACTION -->
        <div x-data="{ 
                
                openEdit: false
            }" 
            class="mt-5 w-full">

            <!-- BUTTON -->
            <div class="flex gap-4 w-full">
                <!-- Tombol EDIT -->
                <div class="flex-1">
                    <button type="button"
                            @click="openEdit = !openEdit; openUpload = false"
                            class="w-full bg-yellow-500 hover:bg-red-700 text-white py-2 rounded-xl text-sm font-medium transition">
                        Upload / Edit Data
                    </button>
                </div>

                <!-- Tombol HAPUS -->
                <form action="{{ route('proka.deleteKaproka', $data['id']) }}"
                    method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus data Kaproka?')"
                    class="flex-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-xl text-sm font-medium transition">
                        Hapus
                    </button>
                </form>
            </div>

            <!-- FORM UPLOAD FOTO -->
            <form x-show="openUpload"
                x-transition
                action="{{ route('proka.uploadFotoKaproka', $data['id']) }}"
                method="POST"
                enctype="multipart/form-data"
                class="mt-4 bg-gray-50 p-4 rounded-2xl border border-gray-200">

                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-xs mb-1 text-gray-600">
                        Upload Foto
                    </label>

                    <input type="file"
                        name="foto"
                        class="w-full border rounded-xl px-3 py-2 text-sm bg-white">
                </div>

                <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-xl text-sm font-medium">

                    Simpan Foto

                </button>
                @endauth

            </form>

            <!-- FORM EDIT DATA -->
            <form x-show="openEdit"
                x-transition
                action="{{ route('proka.updateDataKaproka', $data['id']) }}"
                method="POST"
                enctype="multipart/form-data"
                class="mt-4 bg-gray-50 p-4 rounded-2xl border border-gray-200">

                @csrf
                @method('PUT')

                <!-- FOTO -->
                <div class="mb-3">
                    <label class="block text-xs mb-1 text-gray-600">
                        Ganti Foto
                    </label>

                    <input type="file"
                        name="foto"
                        class="w-full border rounded-xl px-3 py-2 text-sm bg-white">
                </div>

                <!-- NAMA -->
                <div class="mb-3">
                    <label class="block text-xs mb-1 text-gray-600">
                        Nama Kaproka
                    </label>

                    <input type="text"
                        name="nama_kepala"
                        value="{{ $data['nama_kepala'] ?? '' }}"
                        class="w-full border rounded-xl px-3 py-2 text-sm">
                </div>

                <!-- NIP -->
                <div class="mb-4">
                    <label class="block text-xs mb-1 text-gray-600">
                        NIP
                    </label>

                    <input type="number"
                        name="nip"
                        value="{{ $data['nip'] ?? '' }}"
                        class="w-full border rounded-xl px-3 py-2 text-sm">
                </div>

                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-xl text-sm font-medium">

                    Simpan Perubahan

                </button>

            </form>

        <!-- TIM PENGAJAR -->
        <!-- <div class="mt-12">

            <div class="flex justify-between items-center mb-6">

                <div>
                    <h2 class="text-3xl font-bold text-gray-800">
                        Tim Pengajar {{ $data['judul'] }}
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Personel pengajar program keahlian.
                    </p>
                </div>
            @auth
                <a href="{{ route('guru.create', strtolower($data['judul'])) }}"
                   class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-xl shadow text-sm font-medium transition">

                    + Tambah Guru

                </a>
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

                            @foreach($data['gurus'] as $guru)

                            <tr class="hover:bg-gray-50/50 transition">

                                <td class="p-5 text-sm font-medium text-gray-800">
                                    {{ $guru->nama_lengkap }}
                                </td>

                                <td class="p-5 text-sm text-gray-500 font-mono">
                                    {{ $guru->nip }}
                                </td>

                                <td class="p-5 text-sm text-gray-600">
                                    {{ $guru->mapel }}
                                </td>

                                @auth
                                <td class="p-5 text-sm text-center whitespace-nowrap">
                                    -->

                                <!-- EDIT -->
                                    <button type="button"
                                            @click="openEditGuru({{ json_encode($guru) }})"
                                            class="text-indigo-600 hover:text-indigo-900 mr-3 font-medium text-sm">

                                        Edit

                                    </button>

                                    <!-- HAPUS -->
                                    <button type="button"
                                            @click="openDeleteModal('guru', {{ $guru->id }})"
                                            class="text-red-600 hover:text-red-900 font-medium text-sm">

                                        Hapus

                                    </button>
                                
                                </td>
                            @endauth
                            </tr>

                            @endforeach

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
                        Data Siswa/i {{ $data['judul'] }}
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Daftar siswa aktif.
                    </p>

                </div>
            
            @auth
                <a href="{{ route('siswa.create', strtolower($data['judul'])) }}"
                   class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-xl shadow text-sm font-medium transition">

                    + Tambah Siswa

                </a>
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

                            @foreach($data['siswas'] as $siswa)

                            <tr class="hover:bg-gray-50/50 transition">

                                <td class="p-5 text-sm font-medium text-gray-800">
                                    {{ $siswa->nama_lengkap }}
                                </td>

                                <td class="p-5 text-sm text-gray-500 font-mono">
                                    {{ $siswa->nip }}
                                </td>

                                <td class="p-5 text-sm text-gray-600">
                                    {{ $siswa->kelas }}
                                </td>

                                <td class="p-5 text-sm">

                                    <span class="px-2.5 py-1 text-xs font-semibold text-green-700 bg-green-50 border border-green-200 rounded-full">
                                        {{ $siswa->status }}
                                    </span>

                                </td>

                                @auth
                                <td class="p-5 text-sm text-center whitespace-nowrap">    
                                
                                <!-- EDIT -->
                                    <a href="{{ route('siswa.edit', $siswa->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900 mr-3 font-medium text-sm">

                                            Edit

                                        </a>

                                    <!-- HAPUS -->
                                    <button type="button"
                                            @click="openDeleteModal('siswa', {{ $siswa->id }})"
                                            class="text-red-600 hover:text-red-900 font-medium text-sm">

                                        Hapus

                                    </button>
                                 @endauth
                                </td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <!-- MODAL EDIT GURU -->
    <div x-show="modalEditGuru"
         x-cloak
         class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">

        <div class="bg-white p-8 rounded-3xl max-w-lg w-full">

            <h2 class="text-2xl font-bold mb-6">
                Edit Guru
            </h2>

            <form :action="'/guru/' + formGuru.id"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-4">

                    <label class="block mb-2 text-sm">
                        Nama Guru
                    </label>

                    <input type="text"
                           name="nama"
                           x-model="formGuru.nama"
                           class="w-full border rounded-xl px-4 py-3">

                </div>

                <div class="mb-4">

                    <label class="block mb-2 text-sm">
                        NIP
                    </label>

                    <input type="text"
                           name="nip"
                           x-model="formGuru.nip"
                           class="w-full border rounded-xl px-4 py-3">

                </div>

                <div class="mb-6">

                    <label class="block mb-2 text-sm">
                        Mapel
                    </label>

                    <input type="text"
                           name="mapel"
                           x-model="formGuru.mapel"
                           class="w-full border rounded-xl px-4 py-3">

                </div>

                <div class="flex gap-4">

                    <button type="submit"
                            class="bg-indigo-600 text-white px-5 py-3 rounded-xl w-full">

                        Simpan

                    </button>

                    <button type="button"
                            @click="modalEditGuru = false"
                            class="bg-gray-200 px-5 py-3 rounded-xl w-full">

                        Batal

                    </button>

                </div>

            </form>

        </div>

    </div>


    <!-- MODAL EDIT SISWA -->
    <div x-show="modalEditSiswa"
        x-cloak
        class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">

        <div class="bg-white p-8 rounded-3xl max-w-lg w-full">

            <h2 class="text-2xl font-bold mb-6">
                Edit Siswa
            </h2>

            <form x-bind:action="'/siswa/' + formSiswa.id + '/update'"
                method="POST">

                    @csrf
                    @method('PUT')

                <div class="mb-4">

                    <label class="block mb-2 text-sm">
                        Nama Siswa
                    </label>

                    <input type="text"
                        name="nama_lengkap"
                        x-model="formSiswa.nama"
                        class="w-full border rounded-xl px-4 py-3">
                </div>

                <div class="mb-4">

                    <label class="block mb-2 text-sm">
                        NISN
                    </label>

                    <input type="text"
                        name="nip"
                        x-model="formSiswa.nip"
                        class="w-full border rounded-xl px-4 py-3">
                </div>

                <div class="mb-4">

                    <label class="block mb-2 text-sm">
                        Kelas
                    </label>

                    <input type="text"
                        name="kelas"
                        x-model="formSiswa.kelas"
                        class="w-full border rounded-xl px-4 py-3">
                </div>

                <div class="mb-6">

                    <label class="block mb-2 text-sm">
                        Status
                    </label>

                    <input type="text"
                        name="status"
                        x-model="formSiswa.status"
                        class="w-full border rounded-xl px-4 py-3">
                </div>

                <div class="flex gap-4">

                    <button type="submit"
                            class="bg-green-600 text-white px-5 py-3 rounded-xl w-full">

                        Simpan

                    </button>

                    <button type="button"
                            @click="modalEditSiswa = false"
                            class="bg-gray-200 px-5 py-3 rounded-xl w-full">

                        Batal

                    </button>

                </div>

            </form>

        </div>

    </div>

    <!-- MODAL DELETE -->
    <div x-show="modalDelete"
         x-cloak
         class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">

        <div class="bg-white p-6 rounded-3xl max-w-sm w-full text-center">

            <h2 class="text-2xl font-bold text-red-600 mb-3">
                Hapus Data?
            </h2>

            <p class="text-gray-500 mb-6">
                Data akan dihapus permanen.
            </p>

            <form :action="deleteActionUrl"
                  method="POST">

                @csrf
                @method('DELETE')

                <div class="flex gap-4">

                    <button type="submit"
                            class="bg-red-600 text-white px-5 py-3 rounded-xl w-full">

                        Hapus

                    </button>

                    <button type="button"
                            @click="modalDelete = false"
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

<script>

function prokaApp() {

    return {

    modalEditGuru: false,
    modalEditSiswa: false,
    modalDelete: false,

    deleteActionUrl: '',

    formGuru: {
        id: '',
        nama: '',
        nip: '',
        mapel: ''
    },

    formSiswa: {
        id: '',
        nama: '',
        nip: '',
        kelas: '',
        status: ''
    },

        openEditGuru(guru) {

            this.formGuru.id = guru.id;
            this.formGuru.nama = guru.nama_lengkap;
            this.formGuru.nip = guru.nip;
            this.formGuru.mapel = guru.mapel;

            this.modalEditGuru = true;
        },

        openEditSiswa(siswa) {
            this.formSiswa.id = siswa.id;
            this.formSiswa.nama = siswa.nama_lengkap;
            this.formSiswa.nip = siswa.nip;
            this.formSiswa.kelas = siswa.kelas;
            this.formSiswa.status = siswa.status;

            this.modalEditSiswa = true;
        },

        openDeleteModal(type, id) {

            this.deleteActionUrl = '/' + type + '/' + id;

            this.modalDelete = true;
        }
    }
}

</script>

<style>

[x-cloak] {
    display: none !important;
}

</style>

@endsection

