<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/png" href="{{ asset('logo/LogoSupm.png') }}">
    <title>Login | SUPM PARIAMAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .bg-login {
            background: linear-gradient(rgba(15, 42, 71, 0.85), rgba(15, 42, 71, 0.97)),
                        url('https://images.unsplash.com/photo-1551288049-bbbda536ad0a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-[#0f2a47] flex items-center justify-center min-h-screen p-4 bg-login">

    <div class="w-full max-w-md">
        <!-- Logo & Title -->
        <div class="text-center mb-8">
            <div class="flex justify-center gap-3 mb-4">
                <img src="{{ asset('logo/LogoKKP1.png') }}" alt="Logo KKP" class="w-10 h-10 object-contain">
                <img src="{{ asset('logo/bppsdm.png') }}" alt="Logo BPPSDM" class="w-12 h-10 object-contain">
                <img src="{{ asset('logo/LogoSupm.png') }}" alt="Logo SUPM" class="w-10 h-10 object-contain">
            </div>
            <h2 class="text-white text-2xl font-bold tracking-widest uppercase">SUPM PARIAMAN</h2>
            <p class="text-slate-300 text-sm mt-1 opacity-80">Sistem Administrasi Tim Kerja</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border-t-4 border-[#eab308]">
            <div class="p-8">
                <h3 class="text-[#0f2a47] text-xl font-bold mb-6 text-center">Selamat Datang Kembali</h3>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- Email Address -->
                    <div class="mb-5">
                        <label for="email" class="block text-sm font-semibold text-[#0f2a47] mb-2">Email Address</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" /></svg>
                            </span>
                            <input type="email" name="email" id="email" required autofocus
                                class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-lg focus:ring-2 focus:ring-[#eab308] focus:border-transparent outline-none transition-all placeholder:text-slate-300 text-slate-700"
                                placeholder="nama@email.com">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <label for="password" class="text-sm font-semibold text-[#0f2a47]">Password</label>
                            <a href="#" class="text-xs text-yellow-600 font-bold hover:text-[#0f2a47] transition-colors">Lupa Password?</a>
                        </div>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                            </span>

                            <!-- Input Password -->
                            <input type="password" name="password" id="password" required
                                class="w-full pl-10 pr-12 py-3 border border-slate-200 rounded-lg focus:ring-2 focus:ring-[#eab308] focus:border-transparent outline-none transition-all placeholder:text-slate-300 text-slate-700"
                                placeholder="••••••••">

                            <!-- Tombol Show/Hide -->
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400 hover:text-[#0f2a47]">
                                <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path id="eye-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path id="eye-open-body" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    <!-- Garis coret mata (hidden by default) -->
                                    <path id="eye-closed" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="remember" class="w-4 h-4 text-[#0f2a47] border-slate-300 rounded focus:ring-[#eab308]">
                        <label for="remember" class="ml-2 text-sm text-slate-600 font-medium">Ingat Sesi Saya</label>
                    </div>

                    <!-- Login Button -->
                    <button type="submit"
                        class="w-full bg-[#0f2a47] hover:bg-[#163c67] text-white font-bold py-3 px-4 rounded-lg transition-all duration-300 shadow-lg active:scale-95 tracking-wide">
                        MASUK SEKARANG
                    </button>
                </form>
            </div>

            <!-- Footer Login -->
            <div class="bg-slate-50 p-4 text-center border-t border-slate-100">
                <p class="text-[12px] font-medium text-slate-400">
                    &copy; {{ date('Y') }} <span class="text-[#0f2a47] font-bold">SUPM Pariaman</span>. All rights reserved.
                </p>
            </div>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-6">
            <a href="{{ url('/') }}" class="text-slate-300 hover:text-[#eab308] text-sm font-bold transition-all inline-flex items-center gap-2 uppercase tracking-widest">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>

    <!-- Script Show/Hide Password -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeOpen = document.getElementById('eye-open');
            const eyeOpenBody = document.getElementById('eye-open-body');
            const eyeClosed = document.getElementById('eye-closed');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeOpen.classList.add('hidden');
                eyeOpenBody.classList.add('hidden');
                eyeClosed.classList.remove('hidden');
            } else {
                passwordInput.type = 'password';
                eyeOpen.classList.remove('hidden');
                eyeOpenBody.classList.remove('hidden');
                eyeClosed.classList.add('hidden');
            }
        }
    </script>

</body>
</html>
