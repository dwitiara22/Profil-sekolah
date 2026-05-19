<section id="supm-pariaman" class="relative h-screen w-full overflow-hidden">
    <div class="swiper myHeroSwiper h-full w-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative">
                <img src="{{ asset('ImgSlide/lapangan.jpg') }}" class="w-full h-full object-cover" alt="Gedung SUPM Pariaman">
                <div class="absolute inset-0 bg-[#163C67]/60"></div>
            </div>
            <div class="swiper-slide relative">
                <img src="{{ asset('ImgSlide/lapangan2.jpg') }}" class="w-full h-full object-cover" alt="Fasilitas SUPM">
                <div class="absolute inset-0 bg-[#163C67]/60"></div>
            </div>
            <div class="swiper-slide relative">
                <img src="{{ asset('ImgSlide/lapangan3.jpg') }}" class="w-full h-full object-cover" alt="Praktik Taruna">
                <div class="absolute inset-0 bg-[#163C67]/60"></div>
            </div>
        </div>

        <div class="absolute inset-0 z-20 flex flex-col justify-center items-center px-4 text-center pointer-events-none">
            <div class="max-w-4xl mx-auto pointer-events-auto">
                <h1 class="text-white text-[14px] md:text-[16px] font-semibold tracking-[0.2em] uppercase mb-4 opacity-90">
                    Selamat Datang di
                </h1>
                <h2 class="text-white font-bold text-5xl lg:text-8xl mb-4 drop-shadow-2xl leading-tight">
                    SUPM PARIAMAN
                </h2>
                <h3 class="text-yellow-400 font-medium text-lg lg:text-2xl mb-8 italic tracking-wide">
                    "Pusat Pendidikan & Pelatihan Kelautan Terbaik"
                </h3>

                <p class="text-white/90 font-light text-base md:text-[18px] mb-12 leading-relaxed max-w-2xl mx-auto drop-shadow-md">
                    Mencetak tenaga kerja yang kompeten, disiplin, dan berkarakter di bidang kelautan dan perikanan. Terletak di pesisir Pariaman dengan fasilitas pendukung modern.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="#about"
                       class="group flex items-center justify-center bg-yellow-500 text-[#163C67] text-[15px] font-bold
                       h-12 px-10 rounded-full hover:bg-white transition-all duration-300 shadow-xl scale-100 hover:scale-105">
                       Lihat Profil
                    </a>

                    <a href="#contact"
                       class="group flex items-center justify-center border-2 border-white/50 text-white text-[15px] font-semibold
                       h-12 px-10 rounded-full hover:border-yellow-400 hover:text-yellow-400
                       transition-all duration-300 backdrop-blur-sm">
                       Hubungi Kami
                    </a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next !text-white/30 hover:!text-yellow-400 transition-all !hidden md:!flex"></div>
        <div class="swiper-button-prev !text-white/30 hover:!text-yellow-400 transition-all !hidden md:!flex"></div>
        <div class="swiper-pagination !bottom-10"></div>
    </div>
</section>

