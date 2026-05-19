<section id="certificates" class="bg-white pb-24 px-4 dark:bg-slate-900 font-sans transition-colors duration-300">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-[#163C67] dark:text-white mb-4">Sertifikat Lulusan</h2>
            <div class="w-24 h-1.5 bg-yellow-400 mx-auto rounded-full"></div>
            <p class="mt-6 text-gray-600 dark:text-slate-400 max-w-2xl mx-auto text-[15px] leading-relaxed">
                Lulusan kami dibekali dengan berbagai sertifikasi keahlian standar nasional dan internasional untuk menjamin kesiapan kerja di industri maritim dan pengolahan.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">

            @php
                $certs = [
                    ['name' => 'ANKAPIN II', 'delay' => '0', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['name' => 'ATKAPIN II', 'delay' => '50', 'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z'],
                    ['name' => 'HACCP', 'delay' => '100', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ['name' => 'CBIB', 'delay' => '150', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                    ['name' => 'CPIB', 'delay' => '200', 'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9'],
                    ['name' => 'CPPIB', 'delay' => '250', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                    ['name' => 'BST', 'delay' => '300', 'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z'],
                    ['name' => 'API', 'delay' => '350', 'icon' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3'],
                    ['name' => 'Sertifikat Kompetensi', 'delay' => '400', 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-7.714 2.143L11 21l-2.286-6.857L1 12l7.714-2.143L11 3z']
                ];
            @endphp

            @foreach($certs as $cert)
            <div class="group p-5 md:p-8 bg-gray-50 dark:bg-slate-800 rounded-2xl border border-gray-100 dark:border-slate-700 hover:border-yellow-400 dark:hover:border-yellow-500 hover:bg-white dark:hover:bg-slate-700 hover:shadow-2xl transition-all duration-300 text-center flex flex-col items-center justify-center min-h-[160px]" data-aos="fade-up" data-aos-delay="{{ $cert['delay'] }}">
                <div class="w-12 h-12 bg-[#163C67]/10 dark:bg-yellow-400/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-[#163C67] dark:group-hover:bg-yellow-400 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#163C67] dark:text-yellow-400 group-hover:text-white dark:group-hover:text-slate-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $cert['icon'] }}" />
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 dark:text-slate-200 text-xs md:text-sm tracking-wide uppercase leading-tight">
                    {{ $cert['name'] }}
                </h3>
            </div>
            @endforeach

            <div class="group p-5 md:p-8 bg-gray-50 dark:bg-slate-800 rounded-2xl border border-dashed border-gray-300 dark:border-slate-600 hover:border-yellow-400 text-center flex flex-col items-center justify-center min-h-[160px]" data-aos="fade-up" data-aos-delay="450">
                <div class="w-12 h-12 bg-gray-200 dark:bg-slate-700 rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-400 dark:text-slate-500 text-xs md:text-sm tracking-wide italic">
                    Dan Lain-lain...
                </h3>
            </div>

        </div>
    </div>
</section>
