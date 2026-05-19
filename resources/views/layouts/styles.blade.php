<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
    body { font-family: 'Montserrat', sans-serif; }

    .navbar-fixed {
        background-color: #163C67 !important;
        position: fixed;
        z-index: 9999;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(8px);
    }

    .hamburger-active > span:nth-child(1) { transform: rotate(45deg); }
    .hamburger-active > span:nth-child(2) { opacity: 0; }
    .hamburger-active > span:nth-child(3) { transform: rotate(-45deg); }

    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-down { animation: fadeInDown 0.3s ease-out; }

    .toggle-circle { transition: transform 0.3s ease; }
    #dark-toggle:checked ~ label .toggle-circle { transform: translateX(20px); }
</style>
