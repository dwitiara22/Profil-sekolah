@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-50 pt-24 pb-12">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Header / Profil Hatchery Section -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-10 mb-10 overflow-hidden relative">
            <!-- Dekorasi Aksen Teal -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-teal-50 rounded-bl-full -z-0 opacity-50"></div>

            <div class="flex flex-col md:flex-row gap-8 items-center relative z-10">
                <div class="w-full md:w-1/3 text-center">
                    <!-- Icon Hatchery -->
                    <div class="w-40 h-40 bg-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-4 border-8 border-teal-50 shadow-xl rotate-3 transform transition-transform hover:rotate-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full md:w-2/3">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="px-3 py-1 bg-teal-100 text-teal-700 text-xs font-bold rounded-full uppercase tracking-wider">Seed Production & Research</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-extrabold text-[#163C67] tracking-tight mb-4">
                        Unit Layanan <span class="text-teal-600">Hatchery</span>
                    </h1>
                    <p class="text-gray-600 leading-relaxed text-justify text-lg">
                        Pusat keunggulan produksi benih ikan berkualitas tinggi. Kami menerapkan teknologi pembenihan intensif dengan standar biosekuriti yang ketat. Unit ini berfungsi sebagai sarana praktik mahasiswa sekaligus penyedia benih unggul bagi masyarakat pembudidaya guna mendukung ketahanan pangan nasional.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4">
                        <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 bg-white border border-gray-200 px-4 py-2 rounded-xl shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            High Quality Seeds
                        </div>
                        <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 bg-white border border-gray-200 px-4 py-2 rounded-xl shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                            Modern Biosecurity
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik Hatchery -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-teal-50 text-teal-600 rounded-full flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor font-bold"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                </div>
                <h4 class="text-2xl font-bold text-gray-800">500rb+</h4>
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Kapasitas Benih/Bulan</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-cyan-50 text-cyan-600 rounded-full flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor font-bold"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.5a2.5 2.5 0 012.5 2.5v.625M15.362 3.114A9 9 0 002.252 14.93M22.758 9a8.991 8.991 0 01-4.712 7.56" /></svg>
                </div>
                <h4 class="text-2xl font-bold text-gray-800">12</h4>
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Varietas Komoditas</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor font-bold"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 21h6l-.75-4M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                </div>
                <h4 class="text-2xl font-bold text-gray-800">Recirc</h4>
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Sistem Budidaya</p>
            </div>
            <div class="bg-teal-700 p-6 rounded-2xl text-white shadow-lg flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-white/20 text-white rounded-full flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor font-bold"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <h4 class="text-xl font-bold uppercase">Modern</h4>
                <p class="text-teal-200 text-xs font-bold uppercase tracking-widest">Visi Produksi</p>
            </div>
        </div>

        <!-- Section Header Tim Hatchery -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 border-b border-gray-200 pb-6">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900">Tim Teknis Hatchery</h2>
                <p class="text-gray-500 mt-1">Tenaga ahli di bidang pembenihan dan manajemen kualitas air.</p>
            </div>

            @auth
            <button onclick="openModal('modal-form')"
                class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-3 rounded-xl font-bold transition-all flex items-center gap-2 shadow-xl shadow-teal-100 hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Tambah Anggota Tim
            </button>
            @endauth
        </div>

        <!-- Grid Data Tim Hatchery -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($data as $item)
            <div class="group relative bg-white rounded-3xl p-4 border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
                <!-- Foto -->
                <div class="relative mb-6">
                    <div class="aspect-[4/5] overflow-hidden rounded-2xl bg-slate-100">
                        <img src="{{ $item->foto ? asset('storage/'.$item->foto) : 'https://ui-avatars.com/api/?name='.urlencode($item->nama_lengkap).'&size=512&background=0D9488&color=fff' }}"
                             alt="{{ $item->nama_lengkap }}"
                             class="w-full h-full object-cover transition-all duration-700 transform group-hover:scale-110">
                    </div>

                    <!-- Badge Jabatan -->
                    <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 w-5/6">
                        <div class="bg-white shadow-lg border border-gray-50 rounded-full py-2 px-4 text-center">
                            <span class="text-[10px] font-black text-teal-600 uppercase tracking-tighter">
                                {{ $item->jabatan_di_tim }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Info Deskripsi -->
                <div class="text-center mt-6">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-teal-600 transition-colors">
                        {{ $item->nama_lengkap }}
                    </h3>
                    <p class="text-[11px] font-bold text-gray-400 mt-1 uppercase tracking-widest">
                        NIP. {{ $item->nip ?? '-' }}
                    </p>

                    @auth
                    <div class="mt-6 flex justify-center gap-2">
                        <button onclick="editTim({{ json_encode($item) }})"
                            class="flex-1 py-2 bg-teal-50 text-teal-600 rounded-lg hover:bg-teal-600 hover:text-white transition-all text-xs font-bold flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            Edit
                        </button>
                        <button onclick="confirmDelete('{{ route('timja.rtp.destroy', $item->id) }}')"
                            class="p-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-600 hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                        </button>
                    </div>
                    @endauth
                </div>
            </div>
            @empty
            <div class="col-span-full py-24 text-center bg-white rounded-[2rem] border-4 border-dashed border-gray-100">
                <div class="w-20 h-20 bg-teal-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-teal-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-400">Belum ada data tim teknis hatchery</h3>
                <p class="text-gray-400 text-sm">Klik tombol tambah untuk mengisi daftar staf.</p>
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
                        <h3 class="text-2xl font-bold text-teal-700">Tambah Anggota Tim</h3>
                        <button onclick="closeModal('modal-form')" class="text-gray-400 hover:text-red-500 text-2xl">&times;</button>
                    </div>
                    <form action="{{ route('timja.rtp.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf
                        <input type="hidden" name="kategori" value="{{ $kategori }}">
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Nama Lengkap & Gelar</label>
                            <input type="text" name="nama_lengkap" required class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-teal-500/10 focus:border-teal-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">NIP / ID Pegawai</label>
                            <input type="text" name="nip" class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-teal-500/10 focus:border-teal-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Jabatan (e.g. Teknisi Utama)</label>
                            <input type="text" name="jabatan_di_tim" required class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-teal-500/10 focus:border-teal-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Foto Personel</label>
                            <input type="file" name="foto" class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100">
                        </div>
                        <button type="submit" class="w-full py-4 bg-teal-600 text-white rounded-2xl font-bold hover:bg-teal-700 transition-all shadow-xl shadow-teal-100 mt-4 uppercase">Simpan Data Tim</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- MODAL EDIT -->
        <div id="modal-edit" class="hidden fixed inset-0 z-[60] overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="fixed inset-0 bg-teal-900/40 backdrop-blur-md" onclick="closeModal('modal-edit')"></div>
                <div class="relative bg-white rounded-3xl w-full max-w-md p-8 shadow-2xl">
                    <div class="flex justify-between items-center mb-8">
                        <h3 class="text-2xl font-bold text-teal-700">Update Data Tim</h3>
                        <button onclick="closeModal('modal-edit')" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
                    </div>
                    <form id="form-edit" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="kategori" value="{{ $kategori }}">
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="edit-nama" required class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-teal-500/10 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">NIP</label>
                            <input type="text" name="nip" id="edit-nip" class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-teal-500/10 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Jabatan</label>
                            <input type="text" name="jabatan_di_tim" id="edit-jabatan" required class="w-full px-5 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-teal-500/10 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-gray-400 uppercase mb-2">Ganti Foto</label>
                            <input type="file" name="foto" class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100">
                        </div>
                        <button type="submit" class="w-full py-4 bg-teal-600 text-white rounded-2xl font-bold hover:bg-teal-700 transition-all shadow-lg">Perbarui Data</button>
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
                    <p class="text-gray-500 mb-8 text-sm">Tindakan ini akan menghapus data personel hatchery dari sistem.</p>
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
                document.getElementById('form-edit').action = `/timja/rtp/${data.id}`;
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
