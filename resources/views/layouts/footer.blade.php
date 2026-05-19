<footer class="bg-[#0f2a47] pt-24 pb-12 font-sans overflow-hidden border-t border-white/5">
    <div class="container mx-auto px-6 lg:px-20 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            <!-- Kolom 1: Profil & Kontak -->
            <div class="text-slate-300" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-white mb-5 tracking-tight">SUPM Pariaman</h2>
                <h3 class="text-lg font-bold text-yellow-500 mb-3">Kontak Kami</h3>
                <p class="text-[14px] font-medium mb-6 leading-relaxed opacity-80">
                    Pusat pendidikan kelautan dan perikanan yang mencetak tenaga kerja profesional dan kompeten di bidangnya.
                </p>
                <div class="text-[13px] space-y-4 opacity-90">
                    <p class="flex items-start">
                        <span class="mr-3 text-lg text-yellow-500">📍</span>
                        <span>Jalan Simpang Toboh, Toboh Gadang, Kecamatan Pariaman Utara, Kabupaten Padang Pariaman, Sumatera Barat 25501.</span>
                    </p>
                    <p class="flex items-center">
                        <span class="mr-3 text-lg text-yellow-500">📧</span>
                        <a href="mailto:supmn_pariaman@yahoo.com" class="hover:text-yellow-400 transition">supmn_pariaman@yahoo.com</a>
                    </p>
                    <p class="flex items-center">
                        <span class="mr-3 text-lg text-yellow-500">📞</span>
                        <span>081265953189 / 081268167291</span>
                    </p>
                </div>
            </div>

            <!-- Kolom 2: Program Keahlian -->
            <div data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-bold text-white mb-6">Program Keahlian</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-[14px] font-medium text-slate-300 hover:text-yellow-400 flex items-center transition-all duration-300">
                        <span class="mr-2">›</span> NKPI (Nautika Kapal)</a>
                    </li>
                    <li><a href="#" class="text-[14px] font-medium text-slate-300 hover:text-yellow-400 flex items-center transition-all duration-300">
                        <span class="mr-2">›</span> TKPI (Teknika Kapal)</a>
                    </li>
                    <li><a href="#" class="text-[14px] font-medium text-slate-300 hover:text-yellow-400 flex items-center transition-all duration-300">
                        <span class="mr-2">›</span> APAT (Budidaya Air Tawar)</a>
                    </li>
                    <li><a href="#" class="text-[14px] font-medium text-slate-300 hover:text-yellow-400 flex items-center transition-all duration-300">
                        <span class="mr-2">›</span> APHPi (Pengolahan Hasil)</a>
                    </li>
                </ul>
            </div>

            <!-- Kolom 3: Akses Cepat -->
            <div data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-bold text-white mb-6">Akses Cepat</h3>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}" class="text-[14px] font-medium text-slate-300 hover:text-yellow-400 transition-all duration-300">Beranda</a></li>
                    <li><a href="#about" class="text-[14px] font-medium text-slate-300 hover:text-yellow-400 transition-all duration-300">Profil Sekolah</a></li>
                    <li><a href="#" class="text-[14px] font-medium text-slate-300 hover:text-yellow-400 transition-all duration-300">Informasi PPDB</a></li>
                    <li><a href="#" class="text-[14px] font-medium text-slate-300 hover:text-yellow-400 transition-all duration-300">Galeri Kegiatan</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Lokasi (Peta Baru) -->
            <div data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-bold text-white mb-6 flex items-center">
                    <span class="mr-2">🗺️</span>
                    Lokasi Kami
                </h3>
                <div class="w-full h-44 rounded-xl overflow-hidden shadow-lg border border-white/10 group">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.766084140303!2d100.09014047452806!3d-0.5648543994296145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4e2fc51929b7f%3A0xc9fc97b53c5303b!2sSekolah%20Usaha%20Perikanan%20Menengah%20Pariaman!5e1!3m2!1sid!2sid!4v1778658359430!5m2!1sid!2sid"
                        class="w-full h-full border-0 grayscale group-hover:grayscale-0 transition-all duration-700"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <a href="https://maps.app.goo.gl/3A7F6oYqQZ5U6Bq9A" target="_blank" class="mt-4 inline-block text-[12px] font-bold text-yellow-500 hover:text-white transition-colors uppercase tracking-widest">
                    Buka Google Maps →
                </a>
            </div>
        </div>

        <div class="pt-8 border-t border-white/10 text-center">
            <p class="text-[14px] font-medium text-slate-400">
                &copy; {{ date('Y') }} <span class="text-white">SUPM Pariaman</span>. All rights reserved.
            </p>
        </div>
    </div>
</footer>
