<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HYH CORE | Periféricos Gaming Pro')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Iconos Lucide -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-zinc-950 text-zinc-100 font-sans antialiased flex flex-col min-h-screen selection:bg-cyan-500 selection:text-zinc-950">

  <!-- NAVBAR OPTIMIZADO PARA SCROLL FLUIDO -->
    <header class="sticky top-0 z-50 bg-zinc-950/90 backdrop-blur-md border-b border-cyan-500/20 transform-gpu transition-colors duration-200">
        
        <!-- Borde inferior estático sin glow pesado -->
        <div class="absolute inset-x-0 bottom-0 h-[2px] bg-gradient-to-r from-transparent via-cyan-500 to-blue-600"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <!-- LOGO -->
            <a href="{{ route('home') }}" class="flex items-center shrink-0 group py-2">
                <img src="https://hyhcore.com/wp-content/uploads/2026/11/cropped-logo.png" alt="Logo HYH CORE" class="h-10 md:h-12 w-auto object-contain transform-gpu group-hover:scale-105 transition duration-200">
            </a>

            <!-- MENÚ DESKTOP DINÁMICO -->
            <nav class="hidden md:flex items-center space-x-1 lg:space-x-2 text-sm font-medium">
                <a href="{{ route('home') }}" id="nav-inicio" class="nav-item relative px-4 py-2 rounded-xl text-zinc-400 hover:text-white transition-colors duration-150">
                    Inicio
                </a>
                <a href="#teclados" id="nav-teclados" class="nav-item relative px-4 py-2 rounded-xl text-zinc-400 hover:text-white transition-colors duration-150">
                    Teclados
                </a>
                <a href="#mouses" id="nav-mouses" class="nav-item relative px-4 py-2 rounded-xl text-zinc-400 hover:text-white transition-colors duration-150">
                    Mouses
                </a>
                <a href="#mousepads" id="nav-mousepads" class="nav-item relative px-4 py-2 rounded-xl text-zinc-400 hover:text-white transition-colors duration-150">
                    Mousepads
                </a>
                <a href="#beneficios" id="nav-beneficios" class="nav-item relative px-4 py-2 rounded-xl text-zinc-400 hover:text-white transition-colors duration-150">
                    Nosotros
                </a>
            </nav>

            <!-- ACCIONES DIRECTAS -->
            <div class="hidden sm:flex items-center space-x-3">
                <a href="https://tiktok.com/@tu_usuario" target="_blank" title="Síguenos en TikTok"
                   class="p-2.5 rounded-xl bg-zinc-900 hover:bg-zinc-800 text-zinc-300 hover:text-white border border-zinc-800 transition-colors">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 3.2 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
                </a>

                <a href="https://wa.me/51999999999?text=Hola,%20vengo%20de%20la%20web%20y%20quiero%20cotizar%20un%20periférico" target="_blank"
                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-gradient-to-r from-emerald-600 to-emerald-500 hover:from-emerald-500 hover:to-emerald-400 text-white text-sm font-bold shadow-md transition-all">
                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                    <span>Escríbenos</span>
                </a>
            </div>

            <!-- BOTÓN MENÚ MÓVIL -->
            <div class="flex items-center gap-2 md:hidden">
                <a href="https://wa.me/51999999999?text=Hola,%20vengo%20de%20la%20web%20y%20quiero%20cotizar" target="_blank"
                   class="sm:hidden p-2.5 rounded-xl bg-emerald-600 text-white shadow-md">
                    <i data-lucide="message-circle" class="w-5 h-5"></i>
                </a>
                <button id="mobile-menu-btn" class="p-2.5 text-zinc-300 hover:text-white bg-zinc-900 rounded-xl border border-zinc-800 focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        <!-- MENÚ DESPLEGABLE MÓVIL -->
        <div id="mobile-menu" class="hidden md:hidden bg-zinc-950/95 backdrop-blur-md border-b border-zinc-800 px-6 pt-4 pb-6 space-y-3">
            <a href="{{ route('home') }}" class="block py-2.5 px-3 rounded-lg text-cyan-400 bg-cyan-500/10 border border-cyan-500/20 font-medium">Inicio</a>
            <a href="#teclados" class="block py-2.5 px-3 rounded-lg text-zinc-400 hover:text-white hover:bg-zinc-900 transition">Teclados</a>
            <a href="#mouses" class="block py-2.5 px-3 rounded-lg text-zinc-400 hover:text-white hover:bg-zinc-900 transition">Mouses</a>
            <a href="#mousepads" class="block py-2.5 px-3 rounded-lg text-zinc-400 hover:text-white hover:bg-zinc-900 transition">Mousepads</a>
            <a href="#beneficios" class="block py-2.5 px-3 rounded-lg text-zinc-400 hover:text-white hover:bg-zinc-900 transition">Nosotros</a>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-zinc-950 border-t border-zinc-900 py-16 relative overflow-hidden mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-10 items-center text-center md:text-left relative z-10">
            <div class="flex flex-col items-center md:items-start">
                <img src="{{ asset('images/logo.png') }}" alt="Logo HYH CORE" class="h-10 w-auto object-contain">
                <p class="text-zinc-400 text-sm mt-4 max-w-xs leading-relaxed">
                    Especialistas en periféricos gaming: teclados magnéticos y mecánicos, mouses ultraligeros y mousepads pro para esports.
                </p>
            </div>
            <div class="flex justify-center space-x-8 text-sm font-medium text-zinc-400">
                <a href="#teclados" class="hover:text-cyan-400 transition-colors">Teclados</a>
                <a href="#mouses" class="hover:text-cyan-400 transition-colors">Mouses</a>
                <a href="#mousepads" class="hover:text-cyan-400 transition-colors">Mousepads</a>
            </div>
            <div class="flex flex-col items-center md:items-end gap-4">
                <p class="text-zinc-500 text-xs">
                    © {{ date('Y') }} HYH CORE. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>

    <!-- SCRIPT DE SCROLL OPTIMIZADO CON REQUEST ANIMATION FRAME -->
    <script>
        let ticking = false;

        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    const sections = ['teclados', 'mouses', 'mousepads', 'beneficios'];
                    const scrollPos = window.scrollY + 200;

                    if (window.scrollY < 300) {
                        setActiveNav('nav-inicio');
                        ticking = false;
                        return;
                    }

                    sections.forEach(sectionId => {
                        const section = document.getElementById(sectionId);
                        if (section) {
                            const sectionTop = section.offsetTop;
                            const sectionHeight = section.offsetHeight;

                            if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                                setActiveNav('nav-' + sectionId);
                            }
                        }
                    });
                    ticking = false;
                });
                ticking = true;
            }
        });

        function setActiveNav(activeId) {
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => {
                item.className = "nav-item relative px-4 py-2 rounded-xl text-zinc-400 hover:text-white transition-colors duration-150";
            });

            const activeItem = document.getElementById(activeId);
            if (activeItem) {
                activeItem.className = "nav-item relative px-4 py-2 rounded-xl text-cyan-400 bg-cyan-500/10 border border-cyan-500/30 transition-colors duration-150";
            }
        }
    </script>

    <script>
        lucide.createIcons();
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    @stack('scripts')
</body>
</html>