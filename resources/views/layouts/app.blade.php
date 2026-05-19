<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('logo/LogoSupm.png') }}">
    <title>{{ $title ?? 'SUPM PARIAMAN' }}</title>

    <!-- Scripts & Styles -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('layouts.styles')
</head>

<body class="bg-white dark:bg-slate-900 transition duration-300 flex flex-col min-h-screen">

    @include('layouts.header')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Back to Top Button -->
    <button id="to-top" class="fixed bottom-4 right-4 z-[9999] hidden h-12 w-12 items-center justify-center rounded-full bg-amber-600 text-white shadow-lg transition duration-300 hover:bg-amber-700 hover:shadow-amber-500/50">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <!-- External Libraries -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // 1. Inisialisasi AOS & Swiper
        AOS.init({ once: true });

        const swiper = new Swiper(".myHeroSwiper", {
            loop: true,
            autoplay: { delay: 5000 },
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        });

        // 2. Selektor Elemen
        const header = document.querySelector('#navbar');
        const toTop = document.querySelector('#to-top');
        const hamburger = document.querySelector('#hamburger');
        const navMenu = document.querySelector('#nav-menu');

        // 3. Logic Scroll (Navbar & Back to Top)
        window.onscroll = function() {
            const scrollPos = window.pageYOffset;

            // Navbar Fixed
            if (scrollPos > 0) {
                header.classList.add('navbar-fixed');
            } else {
                header.classList.remove('navbar-fixed');
            }

            // Back to Top Visibility
            if (scrollPos > 100) {
                toTop.classList.remove('hidden');
                toTop.classList.add('flex');
            } else {
                toTop.classList.add('hidden');
                toTop.classList.remove('flex');
            }
        };

        // 4. Event Listeners
        // Klik Back to Top
        toTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Hamburger Menu
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger-active');
            navMenu.classList.toggle('hidden');
        });

        // 5. SweetAlert Configurations & Logic
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        @if(session('success'))
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}",
                iconColor: '#10b981',
            });
        @endif

        @if(session('error') || $errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: `
                    @if(session('error'))
                        {{ session('error') }}
                    @else
                        <ul class="text-left list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                `,
                confirmButtonColor: '#0f2a47',
                iconColor: '#ef4444',
            });
        @endif

        @if(session('warning'))
            Toast.fire({
                icon: 'warning',
                title: "{{ session('warning') }}",
                iconColor: '#eab308',
            });
        @endif
    </script>
</body>
</html>
