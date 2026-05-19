@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-50 pt-24 pb-12">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Header / Profil Unit Perpustakaan Section -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-10 mb-10 overflow-hidden relative">
            <!-- Dekorasi Aksen Indigo untuk Perpustakaan -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-50 rounded-bl-full -z-0 opacity-50"></div>

            <div class="flex flex-col md:flex-row gap-8 items-center relative z-10">
                <div class="w-full md:w-1/3 text-center">
                    <!-- Icon Perpustakaan (Library/Books) -->
                    <div class="w-40 h-40 bg-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-4 border-8 border-indigo-50 shadow-xl rotate-3 transform transition-transform hover:rotate-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                </div>
                <div class="w-full md:w-2/3">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-xs font-bold rounded-full uppercase tracking-wider">Learning Resource Center</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-extrabold text-[#163C67] tracking-tight mb-4">
                        Unit Layanan <span class="text-indigo-600">Perpustakaan</span>
                    </h1>
                    <p class="text-gray-600 leading-relaxed text-justify text-lg">
                        Pusat sumber belajar dan literasi digital yang berfokus pada penyediaan referensi ilmiah berkualitas. Unit Perpustakaan bertugas mengelola koleksi pustaka, memfasilitasi sirkulasi buku, serta mengembangkan sistem repositori institusi. Kami hadir untuk menumbuhkan budaya baca dan mendukung riset serta pengembangan intelektual seluruh civitas akademika.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4">
                        <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 bg-white border border-gray-200 px-4 py-2 rounded-xl shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                            Collection Cataloging
                        </div>
                        <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 bg-white border border-gray-200 px-4 py-2 rounded-xl shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Digital Repository
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik Unit Perpustakaan -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-full flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" font-bold><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                </div>
                <h4 class="text-2xl font-bold text-gray-800">Aktif</h4>
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Sirkulasi Buku</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" font-bold><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" /></svg>
                </div>
                <h4 class="text-2xl font-bold text-gray-800">Online</h4>
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">E-Resources</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-full flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" font-bold><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
                <h4 class="text-2xl font-bold text-gray-800">Ramah</h4>
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Layanan Pemustaka</p>
            </div>
            <div class="bg-indigo-600 p-6 rounded-2xl text-white shadow-lg flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-white/20 text-white rounded-full flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" font-bold><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                </div>
                <h4 class="text-xl font-bold uppercase">Terakreditasi</h4>
                <p class="text-indigo-100 text-xs font-bold uppercase tracking-widest">Mutu Koleksi</p>
            </div>
        </div>

        <!-- Section Header Tim Perpustakaan -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 border-b border-gray-200 pb-6">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900">Personel Perpustakaan</h2>
                <p class="text-gray-500 mt-1">Tim pustakawan dan pengelola sumber daya informasi.</p>
            </div>

            @auth
            <button onclick="openModal('modal-form')"
                class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl font-bold transition-all flex items-center gap-2 shadow-xl shadow-indigo-100 hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Tambah Anggota Perpustakaan
            </button>
            @endauth
        </div>

        <!-- Grid Data Tim Perpustakaan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($data as $item)
            <div class="group relative bg-white rounded-3xl p-4 border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
                <!-- Foto -->
                <div class="relative mb-6">
                    <div class="aspect-[4/5] overflow-hidden rounded-2xl bg-slate-100">
                        <img src="{{ $item->foto ? asset('storage/'.$item->foto) : 'https://ui-avatars.com/api/?name='.urlencode($item->nama_lengkap).'&size=512&background=4f46e5&color=fff' }}"
                             alt="{{ $item->nama_lengkap }}"
                             class="w-full h-full object-cover transition-all duration-700 transform group-hover:scale-110">
                    </div>

                    <!-- Badge Jabatan -->
                    <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 w-5/6">
                        <div class="bg-white shadow-lg border border-gray-50 rounded-full py-2 px-4 text-center">
                            <span class="text-[10px] font-black text-indigo-600 uppercase tracking-tighter">
                                {{ $item->jabatan_di_tim }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Info Deskripsi -->
                <div class="text-center mt-6">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">
                        {{ $item->nama_lengkap }}
                    </h3>
                    <p class="text-[11px] font-bold text-gray-400 mt-1 uppercase tracking-widest">
                        NIP. {{ $item->nip ?? '-' }}
                    </p>

                    @auth
                    <div class="mt-6 flex justify-center gap-2">
                        <button onclick="editTim({{ json_encode($item) }})"
                            class="flex-1 py-2 bg-indigo-50 text-indigo-600 rounded-lg hover:bg-indigo-600 hover:text-white transition-all text-xs font-bold flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            Edit
                        </button>
                        <button onclick="confirmDelete('{{ route('timja.perpustakaan.destroy', $item->id) }}')"
                            class="p-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-600 hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                        </button>
                    </div>
                    @endauth
                </div>
            </div>
            @empty
            <div class="col-span-full py-24 text-center bg-white rounded-[2rem] border-4 border-dashed border-gray-100">
                <div class="w-20 h-20 bg-indigo-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-400">Belum ada data tim Perpustakaan</h3>
                <p class="text-gray-400 text-sm">Klik tombol tambah untuk mengisi daftar personel perpustakaan.</p>
            </div>
            @endforelse
        </div>

        <!-- MODAL CRUD -->
        @auth
        <!-- MODAL TAMBAH -->
        <div id="modal-form" class="hidden fixed inset-0 z-[60] overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-md" onclick="closeModal('modal-form')"></div>
                <div class="relative bg-white rounded-3xl w-full max-w-md p-8 shadow-2xl">
                    <div class="flex justify-between items-center mb-8">
                        <h3 class="text-2xl font-bold text-indigo-700">Tambah Anggota Perpustakaan</h3>
                        <button onclick="closeModal('modal-form')" class="text-gray-400 hover:text-red-500 text-2xl">&times;</button>
                    </div>
                    <form action="{{ route('timja.perpustakaan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf
                        <input type="hidden" name="kategori" value="{{ $kategori }}">
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Nama Lengkap & Gelar</label>
                            <input type="text" name="nama_lengkap" required class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">NIP / ID Pegawai</label>
                            <input type="text" name="nip" class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Jabatan (e.g. Pustakawan Madya)</label>
                            <input type="text" name="jabatan_di_tim" required class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Foto Personel</label>
                            <input type="file" name="foto" class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <button type="submit" class="w-full py-4 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition-all shadow-xl shadow-indigo-100 mt-4 uppercase">Simpan Data Tim</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- MODAL EDIT -->
        <div id="modal-edit" class="hidden fixed inset-0 z-[60] overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="fixed inset-0 bg-indigo-900/40 backdrop-blur-md" onclick="closeModal('modal-edit')"></div>
                <div class="relative bg-white rounded-3xl w-full max-w-md p-8 shadow-2xl">
                    <div class="flex justify-between items-center mb-8">
                        <h3 class="text-2xl font-bold text-indigo-700">Update Data Tim</h3>
                        <button onclick="closeModal('modal-edit')" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
                    </div>
                    <form id="form-edit" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="kategori" value="{{ $kategori }}">
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="edit-nama" required class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-indigo-500/10 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">NIP</label>
                            <input type="text" name="nip" id="edit-nip" class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-indigo-500/10 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Jabatan</label>
                            <input type="text" name="jabatan_di_tim" id="edit-jabatan" required class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-indigo-500/10 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Ganti Foto</label>
                            <input type="file" name="foto" class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <button type="submit" class="w-full py-4 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition-all shadow-lg">Perbarui Data</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- MODAL KONFIRMASI HAPUS -->
        <div id="modal-delete" class="hidden fixed inset-0 z-[70] overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="fixed inset-0 bg-red-900/20 backdrop-blur-sm"></div>
                <div class="relative bg-white rounded-3xl w-full max-w-sm p-8 text-center shadow-2xl">
                    <div class="w-20 h-20 bg-red-50 text-red-600 rounded-3xl flex items-center justify-center mx-auto mb-6 rotate-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Hapus Anggota?</h3>
                    <p class="text-gray-500 mb-8 text-sm">Tindakan ini akan menghapus data personel Perpustakaan dari sistem.</p>
                    <form id="form-delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="flex gap-3">
                            <button type="button" onclick="closeModal('modal-delete')" class="flex-1 py-3 bg-gray-100 text-gray-600 rounded-xl font-bold hover:bg-gray-200 transition-all">Batal</button>
                            <button type="submit" class="flex-1 py-3 bg-red-600 text-white rounded-xl font-bold shadow-lg shadow-red-100 hover:bg-red-700 transition-all">Ya, Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function openModal(id) {
                document.getElementById(id).classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeModal(id) {
                document.getElementById(id).classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            function editTim(data) {
                document.getElementById('form-edit').action = `/timja/perpustakaan/${data.id}`;
                document.getElementById('edit-nama').value = data.nama_lengkap;
                document.getElementById('edit-nip').value = data.nip || '';
                document.getElementById('edit-jabatan').value = data.jabatan_di_tim;
                openModal('modal-edit');
            }

            function confirmDelete(url) {
                document.getElementById('form-delete').action = url;
                openModal('modal-delete');
            }
        </script>
        @endauth

    </div>
</div>
@endsection
