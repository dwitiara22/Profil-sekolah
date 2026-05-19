<section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-[#163C67] sm:text-4xl uppercase tracking-tight">Hubungi Kami</h2>
            <p class="mt-4 text-lg text-gray-600">Ada pertanyaan? Silakan hubungi kami atau kunjungi lokasi kami secara langsung.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Kolom Kiri: Info & Map -->
            <div class="space-y-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Informasi Kontak</h3>

                    <div class="space-y-6">
                        <!-- Alamat -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-blue-600 text-white shadow-md">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-bold text-gray-400 uppercase tracking-wider">Alamat</p>
                                <p class="text-base text-gray-700 leading-relaxed">Jalan Simpang Toboh, Toboh Gadang, Kecamatan Pariaman Utara, Kabupaten Padang Pariaman, Sumatera Barat 25501.</p>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-green-600 text-white shadow-md">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-bold text-gray-400 uppercase tracking-wider">WhatsApp / Telp</p>
                                <p class="text-base text-gray-700">081265953189 / 081268167291</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-red-600 text-white shadow-md">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-bold text-gray-400 uppercase tracking-wider">Email</p>
                                <p class="text-base text-gray-700">supmn_pariaman@yahoo.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Maps Container -->
                <div class="rounded-2xl overflow-hidden shadow-md h-72 border border-gray-200 group">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.766084140303!2d100.09014047452806!3d-0.5648543994296145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4e2fc51929b7f%3A0xc9fc97b53c5303b!2sSekolah%20Usaha%20Perikanan%20Menengah%20Pariaman!5e1!3m2!1sid!2sid!4v1778658359430!5m2!1sid!2sid"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="grayscale group-hover:grayscale-0 transition-all duration-500">
                    </iframe>
                </div>
            </div>

            <!-- Kolom Kanan: Form Pesan -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="text-xl font-bold text-gray-900 mb-6">Kirim Pesan</h3>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-bold text-gray-600 uppercase mb-1">Nama Lengkap</label>
                        <input type="text" name="name" required class="mt-1 block w-full rounded-xl border-gray-200 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-4 bg-gray-50 transition" placeholder="Masukkan nama Anda">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-600 uppercase mb-1">Email / No. HP</label>
                        <input type="text" name="contact" required class="mt-1 block w-full rounded-xl border-gray-200 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-4 bg-gray-50 transition" placeholder="Alamat email atau nomor WhatsApp">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-600 uppercase mb-1">Pesan</label>
                        <textarea name="message" rows="4" required class="mt-1 block w-full rounded-xl border-gray-200 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-4 bg-gray-50 transition" placeholder="Tuliskan pesan atau pertanyaan Anda..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#163C67] text-white font-bold py-4 px-6 rounded-xl hover:bg-blue-800 transition duration-300 shadow-lg shadow-blue-100 flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                        </svg>
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
