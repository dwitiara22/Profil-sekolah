<section id="facilities" class="py-24 bg-white dark:bg-slate-900 transition-colors duration-300">
    <div class="container mx-auto px-6 lg:px-20 max-w-7xl">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div data-aos="fade-right">
                <h4 class="font-bold uppercase text-yellow-500 text-sm mb-2 tracking-[0.3em]">Sarana Prasarana</h4>
                <h2 class="font-bold text-[#163C67] dark:text-white text-3xl lg:text-4xl uppercase">Fasilitas Modern</h2>
                <div class="w-20 h-1.5 bg-yellow-500 mt-4 rounded-full"></div>
            </div>
            <p class="text-slate-500 dark:text-slate-400 max-w-md" data-aos="fade-left">
                Mendukung proses pembelajaran simulasi dan praktik lapangan yang sesuai dengan standar industri maritim.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group relative h-[400px] rounded-3xl overflow-hidden shadow-lg" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('img/fasilitas/kapal.jpg') }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Simulator Kapal">
                <div class="absolute inset-0 bg-gradient-to-t from-[#163C67] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-white font-bold text-xl mb-2">Simulator Navigasi</h3>
                    <p class="text-white/80 text-sm transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        Fasilitas simulasi kemudi kapal modern untuk melatih ketangkasan taruna dalam bernavigasi.
                    </p>
                </div>
            </div>

            <div class="group relative h-[400px] rounded-3xl overflow-hidden shadow-lg" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('img/fasilitas/mesin.jpg') }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Lab Mesin">
                <div class="absolute inset-0 bg-gradient-to-t from-[#163C67] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-white font-bold text-xl mb-2">Workshop Permesinan</h3>
                    <p class="text-white/80 text-sm transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        Bengkel praktek dengan mesin kapal asli untuk mengasah kemampuan teknis taruna Teknika.
                    </p>
                </div>
            </div>

            <div class="group relative h-[400px] rounded-3xl overflow-hidden shadow-lg" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{ asset('img/fasilitas/tambak.jpg') }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Tambak Budidaya">
                <div class="absolute inset-0 bg-gradient-to-t from-[#163C67] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-white font-bold text-xl mb-2">Teaching Factory Budidaya</h3>
                    <p class="text-white/80 text-sm transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        Area tambak dan kolam air payau sebagai sarana praktek nyata pengelolaan komoditas laut.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
