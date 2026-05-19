<header id="navbar"
    class="fixed top-0 left-0 w-full flex items-center z-50 transition duration-500 border-b border-white/10
    {{ Request::is('/') ? 'bg-black/20 backdrop-blur-sm' : 'bg-[#163C67] shadow-lg' }}">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between relative">

            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="flex items-center gap-2 py-4">
                    <div class="flex gap-2">
                        <img src="{{ asset('logo/LogoKKP1.png') }}" alt="Logo KKP" class="w-7 h-7 sm:w-8 sm:h-8 object-contain">
                        <img src="{{ asset('logo/bppsdm.png') }}" alt="Logo BPPSDM" class="w-10 h-7 sm:w-10 sm:h-8 object-contain">
                        <img src="{{ asset('logo/LogoSupm.png') }}" alt="Logo SUPM" class="w-7 h-7 sm:w-8 sm:h-8 object-contain">
                    </div>
                    <span class="tracking-widest uppercase font-bold text-white text-xs lg:text-base hidden sm:block">SUPM PARIAMAN</span>
                </a>
            </div>

            <div class="flex items-center">
                <button id="hamburger" type="button" class="block lg:hidden group p-2">
                    <span class="block w-6 h-0.5 my-1.5 bg-white origin-top-left transition duration-300"></span>
                    <span class="block w-6 h-0.5 my-1.5 bg-white transition duration-300"></span>
                    <span class="block w-6 h-0.5 my-1.5 bg-white origin-bottom-left transition duration-300"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-5 bg-[#163C67] lg:bg-transparent shadow-lg lg:shadow-none rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:max-w-full lg:py-0">
                    <ul class="block lg:flex lg:items-center lg:gap-2">

                        <li class="group">
                            <a href="{{ url('/') }}" class="text-sm font-semibold {{ Request::is('/') ? 'text-yellow-400' : 'text-white' }} py-2 px-5 flex group-hover:text-yellow-400 transition-all">Home</a>
                        </li>

                        <li class="relative group nav-dropdown-item">
                            <button type="button" class="nav-dropdown-btn w-full lg:w-auto flex items-center justify-between lg:justify-start gap-1 text-sm font-semibold {{ Request::is('proka*') ? 'text-yellow-400' : 'text-white' }} px-5 py-2 lg:py-2.5 hover:text-yellow-400 transition-colors">
                                PROKA
                                <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </button>
                            <ul class="hidden group-hover:block animate-fade-in-down lg:absolute left-0 top-full mt-0 bg-[#1c4a7e] shadow-2xl rounded-b-lg min-w-[270px] border-t-4 border-yellow-400 z-50">

    <li>
        <a href="{{ route('proka', 'nkpi') }}"
           class="block px-5 py-3 text-sm text-white italic border-b border-white/5 hover:bg-yellow-400 hover:text-[#163C67] transition-all">
            NKPI
        </a>
    </li>

    <li>
        <a href="{{ route('proka', 'tkpi') }}"
           class="block px-5 py-3 text-sm text-white italic border-b border-white/5 hover:bg-yellow-400 hover:text-[#163C67] transition-all">
            TKPI
        </a>
    </li>

    <li>
        <a href="{{ route('proka', 'apapl') }}"
           class="block px-5 py-3 text-sm text-white italic border-b border-white/5 hover:bg-yellow-400 hover:text-[#163C67] transition-all">
            APAPL
        </a>
    </li>

    <li>
        <a href="{{ route('proka', 'aphp') }}"
           class="block px-5 py-3 text-sm text-white italic hover:bg-yellow-400 hover:text-[#163C67] transition-all">
            APHP
        </a>
    </li>

</ul>

                        <!-- Menu TIMJA dengan Indikator Aktif -->
                        <li class="relative group nav-dropdown-item">
                            <button type="button" class="nav-dropdown-btn w-full lg:w-auto flex items-center justify-between lg:justify-start gap-1 text-sm font-semibold {{ Request::is('timja*') ? 'text-yellow-400 underline decoration-2 underline-offset-8' : 'text-white' }} px-5 py-2 lg:py-2.5 hover:text-yellow-400 transition-colors">
                                TIMJA
                                <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </button>

                            <ul class="hidden group-hover:block animate-fade-in-down lg:absolute lg:right-0 lg:top-full mt-0 bg-[#1c4a7e] shadow-2xl rounded-b-lg min-w-[220px] border-t-4 border-yellow-400 z-50">
                                @php
                                    $menus = [
                                        'Kepegawaian' => route('timja.kepegawaian.index'),
                                        'Humas' => route('timja.humas.index'),
                                        'Keuangan' => route('timja.keuangan.index'),
                                        'RTP' => route('timja.rtp.index'),
                                        'Perpustakaan' => route('timja.perpustakaan.index'),
                                        'Pengajaran' => route('timja.pengajaran.index'),
                                        'Kesiswaan' => route('timja.kesiswaan.index'),
                                        'Bengkel' => route('timja.bengkel.index'),
                                        'Hatchery Ikan Hias' => route('timja.hatchery.index'),
                                        'Pengolahan' => route('timja.pengolahan.index'),
                                        'Tambak' => route('timja.tambak.index'),
                                    ];
                                @endphp

                                @foreach($menus as $label => $link)
                                <li class="relative group/sub border-b border-white/5 last:border-0">
                                    <!-- Jika URL saat ini sama dengan link menu ini, maka background menjadi kuning/biru terang -->
                                    <div class="flex items-center justify-between px-5 py-3 text-sm font-medium cursor-pointer transition-all
                                        {{ Request::url() == $link ? 'bg-yellow-400 text-[#163C67]' : 'text-white hover:bg-yellow-400 hover:text-[#163C67]' }}">
                                        <svg class="w-3 h-3 rotate-90 lg:block hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                                        </svg>
                                        <span>{{ $label }}</span>
                                    </div>
                                    <ul class="hidden group-hover/sub:block lg:absolute lg:right-full lg:top-[-4px] bg-[#245a96] shadow-2xl rounded-lg min-w-[180px] border-r-4 border-yellow-400 z-[60]">
                                        <!-- Penanda Aktif di Sub-Menu Tim Kerja -->
                                        <li>
                                            <a href="{{ $link }}" class="block px-5 py-2.5 text-xs font-bold {{ Request::url() == $link ? 'text-yellow-400 underline' : 'text-white' }} hover:bg-white/10 text-right">
                                                Tim Kerja
                                            </a>
                                        </li>
                                        <li><a href="#" class="block px-5 py-2.5 text-xs text-white hover:bg-white/10 text-right">Dokumentasi</a></li>
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="group">
                            <a href="#contact" class="text-sm font-semibold text-white py-2 px-5 flex group-hover:text-yellow-400 transition-all">Kontak</a>
                        </li>

                        @auth
                            <li class="relative group nav-dropdown-item">
                                <button type="button" class="nav-dropdown-btn w-full lg:w-auto flex items-center justify-between lg:justify-start gap-2 text-sm font-bold text-yellow-400 px-5 py-2 lg:py-2.5 hover:opacity-80 transition-all">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span>{{ Auth::user()->name }}</span>
                                    </div>
                                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>

                                <ul class="hidden group-hover:block animate-fade-in-down lg:absolute lg:right-0 lg:top-full mt-0 bg-white shadow-2xl rounded-b-lg min-w-[200px] border-t-4 border-yellow-400 z-50">
                                    <li>
                                        <a href="/" class="block px-5 py-3 text-sm text-[#163C67] font-medium hover:bg-slate-100 transition-all border-b border-slate-100">
                                            Dashboard Admin
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="w-full text-left px-5 py-3 text-sm text-red-600 font-bold hover:bg-red-50 transition-all">
                                                Keluar (Logout)
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="group">
                                <a href="{{ route('login') }}" class="text-sm font-bold text-[#163C67] bg-yellow-400 py-2 px-6 ml-4 rounded-full flex hover:bg-white transition-all shadow-md">
                                    LOGIN
                                </a>
                            </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
