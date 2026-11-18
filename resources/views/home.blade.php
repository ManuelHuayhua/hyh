@extends('layouts.app')

@section('title', 'Inicio | Periféricos Gaming & Setup Pro')

@section('content')

    <!-- 1. HERO SECTION: Con id="inicio" para que el menú lo detecte -->
    <section id="inicio" class="relative w-full overflow-hidden border-b border-cyan-500/20 bg-zinc-950">
        
        <!-- IMAGEN DE FONDO -->
        <div class="relative w-full">
            <img src="https://hyhcore.com/wp-content/uploads/2026/11/fondo-1-1.png" 
                 alt="Fondo Setup Gaming" 
                 fetchpriority="high"
                 decoding="async"
                 class="w-full h-[520px] sm:h-[580px] lg:h-auto lg:max-h-[780px] object-cover lg:object-contain object-right block">
            
            <!-- CAPA DEGRADADA -->
            <div class="absolute inset-0 bg-gradient-to-r from-zinc-950 via-zinc-950/80 lg:via-slate-950/50 to-transparent"></div>
            
            <!-- Sombra inferior sutil -->
            <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-zinc-950 to-transparent"></div>
        </div>

        <!-- CONTENIDO PRINCIPAL FLOTANDO A LA IZQUIERDA -->
        <div class="absolute inset-0 flex items-center z-10">
            <div class="w-full px-6 sm:px-12 lg:px-20">
                <div class="max-w-lg lg:max-w-xl text-left">
                    
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-400/15 border border-cyan-400/30 text-cyan-300 text-xs font-bold tracking-wide uppercase mb-4 sm:mb-6">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                        HyHCore • Periféricos Gaming
                    </div>
                    
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.1] drop-shadow-lg">
                        Tecnología que <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 via-sky-400 to-blue-400">marca la Diferencia</span>
                    </h1>
                    
                    <p class="mt-4 sm:mt-6 text-sm sm:text-lg text-slate-200 leading-relaxed drop-shadow">
                        Teclados magnéticos con Rapid Trigger, mouses ultraligeros y mousepads de grado esports. Equipamiento seleccionado para llevar tu rendimiento al máximo.
                    </p>

                    <!-- Botones de acción -->
                    <div class="mt-6 sm:mt-8 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                        <a href="#teclados" class="px-7 py-3.5 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-500 hover:from-cyan-300 hover:to-blue-400 text-zinc-950 font-extrabold text-sm shadow-lg shadow-cyan-500/30 transition text-center">
                            Explorar Catálogo
                        </a>
                        <a href="https://wa.me/51924517984?text=Hola,%20vengo%20de%20la%20web%20y%20quiero%20asesoría%20para%20mi%20setup" target="_blank" 
                           class="px-7 py-3.5 rounded-xl bg-zinc-950/90 hover:bg-zinc-900 text-white font-semibold text-sm border border-cyan-500/40 transition flex items-center justify-center gap-2">
                            <i data-lucide="message-circle" class="w-5 h-5 text-emerald-400"></i> Cotizar Setup
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 2. BARRA TIKTOK & COMUNIDAD -->
    <section class="bg-zinc-900/95 border-b border-zinc-800 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
            <div class="flex items-center gap-3">
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-cyan-500/15 text-cyan-400">
                    <i data-lucide="play-circle" class="w-5 h-5"></i>
                </span>
                <p class="text-sm text-zinc-300">
                    <strong class="text-white">¿Quieres verlos en acción?</strong> Mira nuestras pruebas de sonido, latencia y unboxings reales en TikTok.
                </p>
            </div>
            <a href="https://tiktok.com/@tu_usuario" target="_blank" 
               class="shrink-0 inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-zinc-800 hover:bg-cyan-500 hover:text-zinc-950 text-white font-semibold text-xs border border-zinc-700 transition">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 3.2 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
                Ver TikTok Oficial
            </a>
        </div>
    </section>

    <!-- 3. QUIÉNES SOMOS / COMPROMISO DE CALIDAD + ROBOTÍN + CARRUSEL -->
    <section id="beneficios" class="scroll-mt-24 w-full relative overflow-hidden bg-gradient-to-b from-zinc-950 via-slate-800/40 via-45% to-slate-100 py-20 lg:py-28">
        
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#06b6d412_1px,transparent_1px),linear-gradient(to_bottom,#06b6d412_1px,transparent_1px)] bg-[size:32px_32px] [mask-image:linear-gradient(to_bottom,black_20%,transparent_90%)] pointer-events-none"></div>
        
        <!-- Halo de luz sin blur pesado -->
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[50rem] h-[30rem] rounded-full pointer-events-none"
             style="background: radial-gradient(ellipse at center, rgba(6,182,212,0.18) 0%, transparent 70%);"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- COLUMNA IZQUIERDA -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-zinc-900/95 border border-cyan-500/40 text-cyan-400 text-xs font-extrabold uppercase tracking-wider shadow-lg">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                        Estándar Competitivo HYH CORE
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-[2.75rem] font-black text-white drop-shadow-[0_2px_10px_rgba(0,0,0,0.45)] tracking-tight leading-[1.12]">
                        Hardware seleccionado para <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 via-sky-300 to-blue-400">ganar cada duelo</span>
                    </h2>

                    <p class="text-slate-100 text-base leading-relaxed bg-zinc-950/65 p-4 rounded-2xl border border-white/10 shadow-sm">
                        En <strong class="text-white font-bold">HYH CORE</strong> filtramos cada periférico antes de llevarlo a tu setup: <strong class="text-cyan-300 font-semibold">teclados magnéticos Hall Effect con Rapid Trigger</strong>, <strong class="text-cyan-300 font-semibold">mouses ultraligeros PAW3395</strong> y pads de grado esports. Cero latencia y garantía real.
                    </p>

                    <div class="pt-2 space-y-3">
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/95 border border-slate-200/90 shadow-md hover:shadow-lg hover:border-sky-400 transition-all duration-300">
                            <div class="w-11 h-11 shrink-0 rounded-xl bg-sky-50 border border-sky-200 text-sky-600 flex items-center justify-center">
                                <i data-lucide="shield-check" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="text-slate-900 font-bold text-sm">100% Originales y Sellados</h3>
                                <p class="text-slate-600 text-xs mt-0.5 leading-relaxed">Productos verificados de fábrica con garantía directa.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/95 border border-slate-200/90 shadow-md hover:shadow-lg hover:border-sky-400 transition-all duration-300">
                            <div class="w-11 h-11 shrink-0 rounded-xl bg-cyan-50 border border-cyan-200 text-cyan-600 flex items-center justify-center">
                                <i data-lucide="sliders" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="text-slate-900 font-bold text-sm">Asesoría Gamer Personalizada</h3>
                                <p class="text-slate-600 text-xs mt-0.5 leading-relaxed">Te ayudamos a elegir según tu tipo de agarre y juego.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/95 border border-slate-200/90 shadow-md hover:shadow-lg hover:border-sky-400 transition-all duration-300">
                            <div class="w-11 h-11 shrink-0 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-600 flex items-center justify-center">
                                <i data-lucide="truck" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="text-slate-900 font-bold text-sm">Envíos Rápidos y Seguros</h3>
                                <p class="text-slate-600 text-xs mt-0.5 leading-relaxed">Embalaje protegido y despachos a nivel nacional.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COLUMNA DERECHA: ROBOTÍN + CARRUSEL -->
                <div class="lg:col-span-6 relative mt-8 lg:mt-0">
                    
                    <div class="flex items-end justify-between px-4 -mb-6 relative z-20 pointer-events-none">
                        <div class="mb-8 bg-zinc-900/95 text-cyan-300 text-xs font-bold px-4 py-2.5 rounded-2xl rounded-bl-none shadow-[0_10px_25px_rgba(0,0,0,0.4)] border border-cyan-500/40">
                            ¡Listo para subir de nivel tu aim! ⚡
                        </div>
                        
                        <img src="https://hyhcore.com/wp-content/uploads/2026/11/mascota-_1_.webp" 
                             alt="Mascota HYH CORE" 
                             decoding="async"
                             class="w-28 sm:w-36 h-auto object-contain mascot-float">
                    </div>

                    <div class="relative bg-white/95 rounded-3xl p-5 sm:p-6 border border-slate-200/90 shadow-[0_25px_50px_rgba(15,23,42,0.18)]">
                        
                        <div id="showcase-carousel" class="relative aspect-video rounded-2xl overflow-hidden bg-gradient-to-br from-zinc-900 via-slate-900 to-zinc-950 border border-zinc-800">
                            
                            <!-- SLIDE 1 -->
                            <div class="carousel-slide absolute inset-0 transition-opacity duration-500 opacity-100 flex flex-col items-center justify-center p-4">
                                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md bg-cyan-500/15 border border-cyan-500/30 text-[10px] font-bold text-cyan-300 uppercase">
                                    Rapid Trigger 8K
                                </span>
                                <img src="{{ asset('images/teclados magneticos gaming.webp') }}" 
                                     alt="Teclado Magnético Hall Effect" 
                                     decoding="async"
                                     class="w-full h-full object-contain">
                                <div class="absolute bottom-2 inset-x-3 flex items-center justify-between bg-zinc-950/90 px-3 py-1.5 rounded-lg border border-zinc-800">
                                    <span class="text-xs font-bold text-white">Teclados Magnéticos HE</span>
                                    <a href="#teclados" class="text-[11px] font-semibold text-cyan-400 hover:underline">Ver →</a>
                                </div>
                            </div>

                            <!-- SLIDE 2 -->
                            <div class="carousel-slide absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none flex flex-col items-center justify-center p-4">
                                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md bg-blue-500/15 border border-blue-500/30 text-[10px] font-bold text-blue-300 uppercase">
                                    Sensor PAW3395
                                </span>
                                <img src="{{ asset('images/mouses-gaming-_1_.webp') }}" 
                                     alt="Mouse Inalámbrico Ultraligero" 
                                     loading="lazy"
                                     decoding="async"
                                     class="w-full h-full object-contain">
                                <div class="absolute bottom-2 inset-x-3 flex items-center justify-between bg-zinc-950/90 px-3 py-1.5 rounded-lg border border-zinc-800">
                                    <span class="text-xs font-bold text-white">Mouses Ultraligeros Pro</span>
                                    <a href="#mouses" class="text-[11px] font-semibold text-cyan-400 hover:underline">Ver →</a>
                                </div>
                            </div>

                            <!-- SLIDE 3 -->
                            <div class="carousel-slide absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none flex flex-col items-center justify-center p-4">
                                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md bg-purple-500/15 border border-purple-500/30 text-[10px] font-bold text-purple-300 uppercase">
                                    Control & Speed
                                </span>
                                <img src="{{ asset('images/mouspads-gaming-_2_.webp') }}" 
                                     alt="Mousepad Esports " 
                                     loading="lazy"
                                     decoding="async"
                                     class="w-full h-full object-contain">
                                <div class="absolute bottom-2 inset-x-3 flex items-center justify-between bg-zinc-950/90 px-3 py-1.5 rounded-lg border border-zinc-800">
                                    <span class="text-xs font-bold text-white">Mousepads Grado Esports</span>
                                    <a href="#mousepads" class="text-[11px] font-semibold text-cyan-400 hover:underline">Ver →</a>
                                </div>
                            </div>

                            <!-- Controles -->
                            <button type="button" onclick="moveSlide(-1)" aria-label="Anterior"
                                    class="absolute left-2 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-zinc-950/85 hover:bg-cyan-500 text-white hover:text-zinc-950 border border-zinc-700 flex items-center justify-center opacity-80 hover:opacity-100 transition z-20 cursor-pointer">
                                <i data-lucide="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button type="button" onclick="moveSlide(1)" aria-label="Siguiente"
                                    class="absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-zinc-950/85 hover:bg-cyan-500 text-white hover:text-zinc-950 border border-zinc-700 flex items-center justify-center opacity-80 hover:opacity-100 transition z-20 cursor-pointer">
                                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>

                        <div class="flex justify-center gap-2 mt-4">
                            <button type="button" onclick="goToSlide(0)" class="carousel-dot w-6 h-1.5 rounded-full bg-sky-500 transition-all cursor-pointer"></button>
                            <button type="button" onclick="goToSlide(1)" class="carousel-dot w-2 h-1.5 rounded-full bg-slate-300 hover:bg-slate-400 transition-all cursor-pointer"></button>
                            <button type="button" onclick="goToSlide(2)" class="carousel-dot w-2 h-1.5 rounded-full bg-slate-300 hover:bg-slate-400 transition-all cursor-pointer"></button>
                        </div>

                        <div class="mt-4 grid grid-cols-3 gap-2.5 text-center">
                            <div class="bg-slate-50 border border-slate-200 rounded-2xl py-2.5 px-2">
                                <span class="block text-sky-600 font-black text-sm">0.1 ms</span>
                                <span class="text-[11px] font-medium text-slate-600">Respuesta</span>
                            </div>
                            <div class="bg-slate-50 border border-slate-200 rounded-2xl py-2.5 px-2">
                                <span class="block text-slate-900 font-black text-sm">100%</span>
                                <span class="text-[11px] font-medium text-slate-600">Verificado</span>
                            </div>
                            <div class="bg-slate-50 border border-slate-200 rounded-2xl py-2.5 px-2">
                                <span class="block text-emerald-600 font-black text-sm">24/7</span>
                                <span class="text-[11px] font-medium text-slate-600">Soporte</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. SECCIÓN: TECLADOS MAGNÉTICOS -->
    <section id="teclados" class="scroll-mt-24 w-full relative bg-white py-16 lg:py-24 overflow-hidden">

        <div class="relative z-10 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
            
            <div class="relative flex flex-col md:flex-row items-center justify-between border-b border-slate-200 pb-6 mb-10 gap-6 text-center md:text-left">
                <div class="hidden lg:block absolute -left-24 -top-2 pointer-events-none">
                    <img src="https://hyhcore.com/wp-content/uploads/2026/11/mascota-_1_.webp" 
                         alt="Mascota HYH CORE" 
                         loading="lazy"
                         decoding="async"
                         class="w-24 h-auto object-contain mascot-float">
                </div>

                <div class="max-w-3xl mx-auto md:mx-0">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-50 border border-sky-200 text-sky-700 text-xs font-extrabold uppercase tracking-wider shadow-sm mb-2.5">
                        <i data-lucide="zap" class="w-3.5 h-3.5 text-sky-600"></i> Hall Effect / Rapid Trigger
                    </div>
                    <h2 class="text-2xl sm:text-4xl lg:text-[2.65rem] font-black text-slate-900 tracking-tight leading-tight">
                        Teclados Magnéticos <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-cyan-600">Competitivos</span>
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base mt-1.5">
                        Actuación ajustable al milímetro, 8000 Hz reales, software de personalización y cero latencia.
                    </p>
                </div>

                <div class="hidden lg:block absolute -right-24 -top-2 pointer-events-none">
                    <img src="https://hyhcore.com/wp-content/uploads/2026/11/mascota-_1_.webp" 
                         alt="Mascota HYH CORE" 
                         loading="lazy"
                         decoding="async"
                         class="w-24 h-auto object-contain mascot-float scale-x-[-1]">
                </div>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6 lg:gap-7 items-stretch">
                
                <!-- MODELO 1: Attack Shark X68HE Black -->
                <div class="product-card group relative rounded-2xl sm:rounded-3xl p-[1.5px] overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-200 flex flex-col">
                    <div class="rgb-ring-thin"></div>

                    <div class="relative z-10 bg-zinc-950 rounded-[calc(1rem-1.5px)] sm:rounded-[calc(1.5rem-1.5px)] h-full flex flex-col justify-between overflow-hidden">
                        <div>
                            <div class="aspect-square w-full relative overflow-hidden bg-zinc-950">
                                <div class="absolute top-2.5 left-2.5 right-2.5 sm:top-3.5 sm:left-3.5 sm:right-3.5 flex items-center justify-between gap-1 z-20">
                                    <span class="bg-zinc-950/90 text-cyan-300 border border-cyan-500/40 text-[9px] sm:text-[11px] font-extrabold px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-md uppercase tracking-wide">
                                        Hall Effect 8K
                                    </span>
                                    <span class="hidden sm:inline-flex items-center gap-1 bg-zinc-950/90 text-emerald-400 border border-emerald-500/40 text-[10px] font-bold px-2 py-0.5 rounded-md">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Stock
                                    </span>
                                </div>

                                <img src="{{ asset('images/Teclado-gaming-X68HE-Black-.webp') }}" 
                                     alt="Attack Shark X68HE Black" 
                                     loading="lazy"
                                     decoding="async"
                                     class="w-full h-full object-cover object-center transform-gpu group-hover:scale-105 transition-transform duration-300">
                            </div>

                            <div class="p-3 sm:p-4 relative overflow-hidden bg-gradient-to-br from-zinc-950 via-slate-900 to-purple-950/80 border-t border-white/10">
                                <div class="absolute -right-6 -bottom-6 w-32 h-32 rounded-full pointer-events-none"
                                     style="background: radial-gradient(circle, rgba(217,70,239,0.22) 0%, transparent 70%);"></div>

                                <div class="relative z-10">
                                    <div class="text-[9px] sm:text-[11px] font-extrabold text-cyan-400 uppercase tracking-wider flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-gradient-to-r from-cyan-400 to-fuchsia-500"></span> Attack Shark
                                    </div>
                                    <h3 class="text-xs sm:text-base font-black text-white group-hover:text-cyan-300 transition-colors leading-snug mt-0.5">
                                        Attack Shark X68HE Black
                                    </h3>
                                    <p class="hidden sm:block text-zinc-300 text-xs mt-1 leading-relaxed line-clamp-2">
                                        Actuación ajustable (0.1–3.4 mm), Rapid Trigger, 8K Hz, retroiluminación RGB y modo SOCD.
                                    </p>

                                    <div class="mt-2 flex flex-wrap gap-1">
                                        <span class="text-[9px] sm:text-[10px] font-semibold text-zinc-200 bg-white/10 border border-white/15 px-2 py-0.5 rounded">0.01mm RT</span>
                                        <span class="text-[9px] sm:text-[10px] font-semibold text-fuchsia-300 bg-fuchsia-500/15 border border-fuchsia-500/30 px-2 py-0.5 rounded">RGB + Software</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 sm:p-4 pt-2 sm:pt-2.5 border-t border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-zinc-950 relative z-10">
                            <span class="text-sm sm:text-xl font-black text-white">S/ 210.00</span>
                            <div class="flex gap-2 w-full sm:w-auto">
                                
                                <button type="button" onclick="agregarAlPedido('Attack Shark X68HE Black', 210.00, this)"
                                        class="flex-1 sm:flex-initial justify-center px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold shadow-sm transition-colors flex items-center gap-1.5 cursor-pointer">
                                    <i data-lucide="plus" class="w-3.5 h-3.5"></i> Añadir
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODELO 2: Attack Shark X68HE Contours -->
                <div class="product-card group relative rounded-2xl sm:rounded-3xl p-[1.5px] overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-200 flex flex-col">
                    <div class="rgb-ring-thin"></div>

                    <div class="relative z-10 bg-zinc-950 rounded-[calc(1rem-1.5px)] sm:rounded-[calc(1.5rem-1.5px)] h-full flex flex-col justify-between overflow-hidden">
                        <div>
                            <div class="aspect-square w-full relative overflow-hidden bg-zinc-950">
                                <div class="absolute top-2.5 left-2.5 right-2.5 sm:top-3.5 sm:left-3.5 sm:right-3.5 flex items-center justify-between gap-1 z-20">
                                    <span class="bg-zinc-950/90 text-cyan-300 border border-cyan-500/40 text-[9px] sm:text-[11px] font-extrabold px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-md uppercase tracking-wide">
                                        Edición Contours
                                    </span>
                                    <span class="hidden sm:inline-flex items-center gap-1 bg-zinc-950/90 text-emerald-400 border border-emerald-500/40 text-[10px] font-bold px-2 py-0.5 rounded-md">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Stock
                                    </span>
                                </div>

                                <img src="{{ asset('images/Teclado-X68HE_-Contornos-Negros.webp') }}"
                                     alt="Attack Shark X68HE Black Contours" 
                                     loading="lazy"
                                     decoding="async"
                                     class="w-full h-full object-cover object-center transform-gpu group-hover:scale-105 transition-transform duration-300">
                            </div>

                            <div class="p-3 sm:p-4 relative overflow-hidden bg-zinc-950 border-t border-white/10">
                                <svg class="absolute inset-0 w-full h-full opacity-30 pointer-events-none" viewBox="0 0 240 160" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="rgb-contour-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#06b6d4" />
                                            <stop offset="50%" stop-color="#a855f7" />
                                            <stop offset="100%" stop-color="#ec4899" />
                                        </linearGradient>
                                    </defs>
                                    <path d="M-20,25 Q45,-5 105,35 T260,20" fill="none" stroke="url(#rgb-contour-grad)" stroke-width="1.8"/>
                                    <path d="M-20,55 Q55,20 120,65 T260,50" fill="none" stroke="url(#rgb-contour-grad)" stroke-width="1.8"/>
                                    <path d="M-20,88 Q65,50 130,95 T260,82" fill="none" stroke="url(#rgb-contour-grad)" stroke-width="1.8"/>
                                    <path d="M-20,122 Q75,85 140,128 T260,115" fill="none" stroke="url(#rgb-contour-grad)" stroke-width="1.8"/>
                                </svg>

                                <div class="relative z-10">
                                    <div class="text-[9px] sm:text-[11px] font-extrabold text-cyan-400 uppercase tracking-wider flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span> Attack Shark
                                    </div>
                                    <h3 class="text-xs sm:text-base font-black text-white group-hover:text-cyan-300 transition-colors leading-snug mt-0.5">
                                        Attack Shark X68HE Contours
                                    </h3>
                                    <p class="hidden sm:block text-zinc-300 text-xs mt-1 leading-relaxed line-clamp-2">
                                        Keycaps PBT con líneas topográficas translúcidas RGB, switches magnéticos y software web.
                                    </p>

                                    <div class="mt-2 flex flex-wrap gap-1">
                                        <span class="text-[9px] sm:text-[10px] font-semibold text-zinc-200 bg-zinc-900/90 border border-white/15 px-2 py-0.5 rounded">PBT Contours</span>
                                        <span class="text-[9px] sm:text-[10px] font-semibold text-cyan-300 bg-cyan-500/15 border border-cyan-500/30 px-2 py-0.5 rounded">RGB + Software</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 sm:p-4 pt-2 sm:pt-2.5 border-t border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-zinc-950 relative z-10">
                            <span class="text-sm sm:text-xl font-black text-white">S/ 250.00</span>
                            <div class="flex gap-2 w-full sm:w-auto">
                                
                                <button type="button" onclick="agregarAlPedido('Attack Shark X68HE Black Contours', 250.00, this)"
                                        class="flex-1 sm:flex-initial justify-center px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold shadow-sm transition-colors flex items-center gap-1.5 cursor-pointer">
                                    <i data-lucide="plus" class="w-3.5 h-3.5"></i> Añadir
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODELO 3: AULA WIN68 HE Pro White+Black -->
                <div class="product-card group relative rounded-2xl sm:rounded-3xl p-[1.5px] overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-200 flex flex-col">
                    <div class="rgb-ring-thin"></div>

                    <div class="relative z-10 bg-white rounded-[calc(1rem-1.5px)] sm:rounded-[calc(1.5rem-1.5px)] h-full flex flex-col justify-between overflow-hidden">
                        <div>
                            <div class="aspect-[5/5]w-full relative overflow-hidden bg-zinc-950">
                                <div class="absolute top-2.5 left-2.5 right-2.5 sm:top-3.5 sm:left-3.5 sm:right-3.5 flex items-center justify-between gap-1 z-20">
                                    <span class="bg-zinc-950/90 text-white border border-white/25 text-[9px] sm:text-[11px] font-black px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-md uppercase tracking-wide">
                                        White + Black
                                    </span>
                                    <span class="hidden sm:inline-flex items-center gap-1 bg-zinc-950/90 text-emerald-400 border border-emerald-500/40 text-[10px] font-bold px-2 py-0.5 rounded-md">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Stock
                                    </span>
                                </div>

                                <img src="{{ asset('images/Teclado Gaming WIN68 HE Pro _.webp') }}" 
                                     alt="AULA WIN68 HE Pro White+Black" 
                                     loading="lazy"
                                     decoding="async"
                                     class="w-full h-full object-cover object-center transform-gpu group-hover:scale-105 transition-transform duration-300">
                            </div>

                            <div class="p-3 sm:p-4 relative overflow-hidden bg-white border-t border-slate-200">
                                <div class="absolute inset-y-0 right-0 w-1/3 bg-zinc-950 [clip-path:polygon(35%_0,100%_0,100%_100%,0%_100%)] pointer-events-none"></div>

                                <div class="relative z-10">
                                    <div class="text-[9px] sm:text-[11px] font-extrabold text-slate-900 uppercase tracking-wider flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-white border border-slate-900"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-zinc-950"></span> AULA Gaming
                                    </div>
                                    <h3 class="text-xs sm:text-base font-black text-slate-900 group-hover:text-sky-600 transition-colors leading-snug mt-0.5 pr-4">
                                        AULA WIN68 HE Pro White+Black
                                    </h3>
                                    <p class="hidden sm:block text-slate-600 text-xs mt-1 leading-relaxed pr-6 line-clamp-2">
                                        Estética bicolor White+Black, amortiguación interna, Rapid Trigger y software completo.
                                    </p>

                                    <div class="mt-2 flex flex-wrap gap-1">
                                        <span class="text-[9px] sm:text-[10px] font-semibold text-slate-800 bg-white border border-slate-300 px-2 py-0.5 rounded">SOCD / DKS</span>
                                        <span class="text-[9px] sm:text-[10px] font-semibold text-white bg-zinc-950 border border-zinc-800 px-2 py-0.5 rounded">RGB + Software</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 sm:p-4 pt-2 sm:pt-2.5 border-t border-zinc-800 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-zinc-950 text-white relative z-10">
                            <span class="text-sm sm:text-xl font-black text-white">S/ 210.00</span>
                            <div class="flex gap-2 w-full sm:w-auto">
                                
                                <button type="button" onclick="agregarAlPedido('AULA WIN68 HE Pro White+Black', 210.00, this)"
                                        class="flex-1 sm:flex-initial justify-center px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold shadow-sm transition-colors flex items-center gap-1.5 cursor-pointer">
                                    <i data-lucide="plus" class="w-3.5 h-3.5"></i> Añadir
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- SECCIÓN DE PEDIDOS PERSONALIZADOS -->
            <div class="mt-12 sm:mt-16 rounded-3xl bg-slate-50 border border-slate-200/90 p-6 sm:p-8 lg:p-10 flex flex-col lg:flex-row items-center justify-between gap-6 shadow-sm">
                <div class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4 max-w-2xl">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-sky-100 border border-sky-200 text-sky-600 flex items-center justify-center shrink-0">
                        <i data-lucide="search-check" class="w-6 h-6 sm:w-7 sm:h-7"></i>
                    </div>
                    <div>
                        <span class="inline-block text-[11px] font-extrabold uppercase tracking-wider text-sky-600 mb-1">
                            Importación & Pedidos Especiales
                        </span>
                        <h3 class="text-lg sm:text-xl font-black text-slate-900">
                            ¿Buscas otro modelo de teclado magnético en específico?
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm mt-1.5 leading-relaxed">
                            Si tienes en mente otro modelo o marca (MCHOSE, Wooting, DrunkDeer, Ajazz, etc.), envíanos el nombre exacto. Revisamos sus especificaciones técnicas y gestionamos su compra a pedido para ti.
                        </p>
                    </div>
                </div>

                <a href="https://wa.me/51924517984?text=Hola%20HYH%20CORE,%20quisiera%20consultar%20si%20pueden%20traer%20a%20pedido%20otro%20modelo%20de%20teclado%20magnético:" 
                   target="_blank"
                   class="w-full lg:w-auto justify-center shrink-0 px-6 py-3.5 rounded-2xl bg-slate-900 hover:bg-sky-600 text-white text-xs sm:text-sm font-bold shadow-md transition-colors duration-200 flex items-center gap-2">
                    <i data-lucide="package-plus" class="w-4 h-4"></i> Consultar modelo a pedido
                </a>
            </div>

        </div>
    </section>

    <!-- 5. SECCIÓN INDEPENDIENTE: MOUSES ULTRALIGEROS -->
 
<!-- 5. SECCIÓN INDEPENDIENTE: MOUSES ULTRALIGEROS -->
<section id="mouses" class="scroll-mt-24 w-full relative bg-zinc-950 py-16 lg:py-24 overflow-hidden border-t border-zinc-900">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[650px] h-72 rounded-full pointer-events-none"
         style="background: radial-gradient(ellipse at center, rgba(6,182,212,0.12) 0%, transparent 70%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">

        <div class="relative flex flex-col items-center justify-center border-b border-zinc-800/90 pb-8 mb-10 text-center lg:px-28">

            <div class="hidden lg:block absolute left-2 top-1/2 -translate-y-1/2 pointer-events-none">
                <img src="https://hyhcore.com/wp-content/uploads/2026/11/mascota-_1_.webp"
                     alt="Mascota HYH CORE"
                     loading="lazy"
                     decoding="async"
                     class="w-24 h-auto object-contain mascot-float">
            </div>

            <div class="max-w-2xl mx-auto">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-extrabold uppercase tracking-wider mb-2.5">
                    <i data-lucide="crosshair" class="w-3.5 h-3.5 text-cyan-400"></i>
                    Control Total & Precisión
                </div>

                <h2 class="text-2xl sm:text-4xl lg:text-[2.65rem] font-black text-white tracking-tight leading-tight">
                    Mouses Ultraligeros <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-blue-400">Inalámbricos</span>
                </h2>

                <p class="text-zinc-400 text-sm sm:text-base mt-2">
                    Peso pluma para flicks instantáneos, sensores ópticos de grado esports, conectividad Tri-Mode y disponibles en versión Blanco y Negro.
                </p>
            </div>

            <div class="hidden lg:block absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none">
                <img src="https://hyhcore.com/wp-content/uploads/2026/11/mascota-_1_.webp"
                     alt="Mascota HYH CORE"
                     loading="lazy"
                     decoding="async"
                     class="w-24 h-auto object-contain mascot-float scale-x-[-1]">
            </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6 lg:gap-7 items-stretch">

            <!-- MODELO 1: ATK Dragonfly A9 Plus -->
            <div class="product-card group relative rounded-2xl sm:rounded-3xl bg-zinc-900 border border-zinc-800 hover:border-cyan-500/50 shadow-md hover:shadow-xl transition-colors duration-200 flex flex-col justify-between overflow-hidden">

                <div>
                    <div class="aspect-[4/5] w-full relative overflow-hidden bg-zinc-950">

                        <div class="absolute top-2.5 left-2.5 right-2.5 sm:top-3.5 sm:left-3.5 sm:right-3.5 flex items-center justify-between gap-1 z-20">
                            <span class="bg-zinc-950/90 text-cyan-300 border border-cyan-500/40 text-[9px] sm:text-[11px] font-extrabold px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-md uppercase tracking-wide">
                                Tri-Mode / 1hz
                            </span>

                            <span class="inline-flex items-center gap-1 bg-zinc-950/90 text-zinc-200 border border-white/15 text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-md">
                                <span class="w-2 h-2 rounded-full bg-white border border-zinc-400"></span>
                                <span class="w-2 h-2 rounded-full bg-zinc-950 border border-zinc-500"></span>
                                <span class="hidden sm:inline">B / N</span>
                            </span>
                        </div>

                        <img src="{{ asset('images/atka9.20-blanco-y-negro.png') }}"
                             alt="ATK Dragonfly A9 Plus Blanco y Negro"
                             loading="lazy"
                             decoding="async"
                             class="w-full h-full object-cover object-center transform-gpu group-hover:scale-105 transition-transform duration-300">
                    </div>

                    <div class="p-3 sm:p-4 bg-gradient-to-br from-zinc-900 via-zinc-900 to-cyan-950/50 border-t border-white/10">

                        <div class="text-[9px] sm:text-[11px] font-extrabold text-cyan-400 uppercase tracking-wider flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span> ATK Gear
                        </div>

                        <h3 class="text-xs sm:text-base font-black text-white group-hover:text-cyan-300 transition-colors leading-snug mt-0.5">
                            ATK Dragonfly A9 Plus
                        </h3>

                        <p class="hidden sm:block text-zinc-400 text-xs mt-1 leading-relaxed line-clamp-2">
                            Diseño ergonómico simétrico ultraligero, sensor óptico de alta precisión, baja latencia y software web.
                        </p>

                        <div class="mt-2 flex flex-wrap gap-1">
                            <span class="text-[9px] sm:text-[10px] font-semibold text-zinc-200 bg-white/10 border border-white/15 px-2 py-0.5 rounded">Ultraligero</span>
                            <span class="text-[9px] sm:text-[10px] font-semibold text-cyan-300 bg-cyan-500/15 border border-cyan-500/30 px-2 py-0.5 rounded">Blanco / Negro</span>
                        </div>

                        <!-- SELECTOR DE COLOR -->
                        <div class="mt-3">
                            <label for="color-atk-a9" class="text-[10px] sm:text-xs font-bold text-zinc-400 uppercase tracking-wide">
                                Seleccionar color
                            </label>

                            <select id="color-atk-a9"
                                    class="w-full mt-1 bg-zinc-950 border border-zinc-700 text-white text-xs rounded-lg px-3 py-2 outline-none focus:border-cyan-500 cursor-pointer">
                                <option value="Blanco">⚪ Blanco</option>
                                <option value="Negro">⚫ Negro</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="p-3 sm:p-4 pt-2 sm:pt-2.5 border-t border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-zinc-950">

                    <span class="text-sm sm:text-xl font-black text-white">S/ 170.00</span>

                    <div class="flex gap-2 w-full sm:w-auto">
                        <button type="button"
                                onclick="agregarVarianteAlPedido('ATK Dragonfly A9 Plus', 170.00, 'color-atk-a9', this)"
                                class="flex-1 sm:flex-initial justify-center px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold shadow-sm transition-colors flex items-center gap-1.5 cursor-pointer">
                            <i data-lucide="plus" class="w-3.5 h-3.5"></i> Añadir
                        </button>
                    </div>
                </div>
            </div>


            <!-- MODELO 2: ATK VXE R1 SE+ -->
            <div class="product-card group relative rounded-2xl sm:rounded-3xl bg-zinc-900 border border-zinc-800 hover:border-sky-500/50 shadow-md hover:shadow-xl transition-colors duration-200 flex flex-col justify-between overflow-hidden">

                <div>
                    <div class="aspect-[4/5] w-full relative overflow-hidden bg-zinc-950">

                        <div class="absolute top-2.5 left-2.5 right-2.5 sm:top-3.5 sm:left-3.5 sm:right-3.5 flex items-center justify-between gap-1 z-20">
                            <span class="bg-zinc-950/90 text-sky-300 border border-sky-500/40 text-[9px] sm:text-[11px] font-extrabold px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-md uppercase tracking-wide">
                                PAW3395 SE
                            </span>

                            <span class="inline-flex items-center gap-1 bg-zinc-950/90 text-zinc-200 border border-white/15 text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-md">
                                <span class="w-2 h-2 rounded-full bg-white border border-zinc-400"></span>
                                <span class="w-2 h-2 rounded-full bg-zinc-950 border border-zinc-500"></span>
                                <span class="hidden sm:inline">B / N</span>
                            </span>
                        </div>

                        <img src="{{ asset('images/VXE R1SE blancoy negro.png') }}"
                             alt="ATK VXE R1 SE+ Blanco y Negro"
                             loading="lazy"
                             decoding="async"
                             class="w-full h-full object-cover object-center transform-gpu group-hover:scale-105 transition-transform duration-300">
                    </div>

                    <div class="p-3 sm:p-4 bg-gradient-to-br from-zinc-900 via-zinc-900 to-sky-950/50 border-t border-white/10">

                        <div class="text-[9px] sm:text-[11px] font-extrabold text-sky-400 uppercase tracking-wider flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span> ATK / VXE
                        </div>

                        <h3 class="text-xs sm:text-base font-black text-white group-hover:text-sky-300 transition-colors leading-snug mt-0.5">
                            ATK VXE R1 SE+
                        </h3>

                        <p class="hidden sm:block text-zinc-400 text-xs mt-1 leading-relaxed line-clamp-2">
                            Peso pluma (~55g), sensor PAW3395 SE de 18,000 DPI, batería extendida y conectividad Tri-Mode.
                        </p>

                        <div class="mt-2 flex flex-wrap gap-1">
                            <span class="text-[9px] sm:text-[10px] font-semibold text-zinc-200 bg-white/10 border border-white/15 px-2 py-0.5 rounded">~55g Peso</span>
                            <span class="text-[9px] sm:text-[10px] font-semibold text-sky-300 bg-sky-500/15 border border-sky-500/30 px-2 py-0.5 rounded">Blanco / Negro</span>
                        </div>

                        <!-- SELECTOR DE COLOR -->
                        <div class="mt-3">
                            <label for="color-vxe-r1" class="text-[10px] sm:text-xs font-bold text-zinc-400 uppercase tracking-wide">
                                Seleccionar color
                            </label>

                            <select id="color-vxe-r1"
                                    class="w-full mt-1 bg-zinc-950 border border-zinc-700 text-white text-xs rounded-lg px-3 py-2 outline-none focus:border-sky-500 cursor-pointer">
                                <option value="Blanco">⚪ Blanco</option>
                                <option value="Negro">⚫ Negro</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="p-3 sm:p-4 pt-2 sm:pt-2.5 border-t border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-zinc-950">

                    <span class="text-sm sm:text-xl font-black text-white">S/ 119.00</span>

                    <div class="flex gap-2 w-full sm:w-auto">
                        <button type="button"
                                onclick="agregarVarianteAlPedido('ATK VXE R1 SE+', 119.00, 'color-vxe-r1', this)"
                                class="flex-1 sm:flex-initial justify-center px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold shadow-sm transition-colors flex items-center gap-1.5 cursor-pointer">
                            <i data-lucide="plus" class="w-3.5 h-3.5"></i> Añadir
                        </button>
                    </div>
                </div>
            </div>


            <!-- MODELO 3: MCHOSE G3 V2 Wireless -->
            <div class="product-card group relative rounded-2xl sm:rounded-3xl bg-zinc-900 border border-zinc-800 hover:border-indigo-500/50 shadow-md hover:shadow-xl transition-colors duration-200 flex flex-col justify-between overflow-hidden">

                <div>
                    <div class="aspect-[4/5] w-full relative overflow-hidden bg-zinc-950">

                        <div class="absolute top-2.5 left-2.5 right-2.5 sm:top-3.5 sm:left-3.5 sm:right-3.5 flex items-center justify-between gap-1 z-20">
                            <span class="bg-zinc-950/90 text-indigo-300 border border-indigo-500/40 text-[9px] sm:text-[11px] font-extrabold px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-md uppercase tracking-wide">
                                Wireless V2
                            </span>

                            <span class="inline-flex items-center gap-1 bg-zinc-950/90 text-zinc-200 border border-white/15 text-[9px] sm:text-[10px] font-bold px-2 py-0.5 rounded-md">
                                <span class="w-2 h-2 rounded-full bg-white border border-zinc-400"></span>
                                <span class="w-2 h-2 rounded-full bg-zinc-950 border border-zinc-500"></span>
                                <span class="hidden sm:inline">B / N</span>
                            </span>
                        </div>

                        <img src="{{ asset('images/MCHOSE G3 V2_ potencia inalámbrica.png') }}"
                             alt="MCHOSE G3 V2 Wireless Blanco y Negro"
                             loading="lazy"
                             decoding="async"
                             class="w-full h-full object-cover object-center transform-gpu group-hover:scale-105 transition-transform duration-300">
                    </div>

                    <div class="p-3 sm:p-4 bg-gradient-to-br from-zinc-900 via-zinc-900 to-indigo-950/50 border-t border-white/10">

                        <div class="text-[9px] sm:text-[11px] font-extrabold text-indigo-400 uppercase tracking-wider flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span> MCHOSE
                        </div>

                        <h3 class="text-xs sm:text-base font-black text-white group-hover:text-indigo-300 transition-colors leading-snug mt-0.5">
                            MCHOSE G3 V2 Wireless
                        </h3>

                        <p class="hidden sm:block text-zinc-400 text-xs mt-1 leading-relaxed line-clamp-2">
                            Forma clásica ambidiestra ideal para Claw/Fingertip, microswitches de respuesta nítida y software dedicado.
                        </p>

                        <div class="mt-2 flex flex-wrap gap-1">
                            <span class="text-[9px] sm:text-[10px] font-semibold text-zinc-200 bg-white/10 border border-white/15 px-2 py-0.5 rounded">Claw / Fingertip</span>
                            <span class="text-[9px] sm:text-[10px] font-semibold text-indigo-300 bg-indigo-500/15 border border-indigo-500/30 px-2 py-0.5 rounded">Blanco / Negro</span>
                        </div>

                        <!-- SELECTOR DE COLOR -->
                        <div class="mt-3">
                            <label for="color-mchose-g3" class="text-[10px] sm:text-xs font-bold text-zinc-400 uppercase tracking-wide">
                                Seleccionar color
                            </label>

                            <select id="color-mchose-g3"
                                    class="w-full mt-1 bg-zinc-950 border border-zinc-700 text-white text-xs rounded-lg px-3 py-2 outline-none focus:border-indigo-500 cursor-pointer">
                                <option value="Blanco">⚪ Blanco</option>
                                <option value="Negro">⚫ Negro</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="p-3 sm:p-4 pt-2 sm:pt-2.5 border-t border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-zinc-950">

                    <span class="text-sm sm:text-xl font-black text-white">S/ 100.00</span>

                    <div class="flex gap-2 w-full sm:w-auto">
                        <button type="button"
                                onclick="agregarVarianteAlPedido('MCHOSE G3 V2 Wireless', 100.00, 'color-mchose-g3', this)"
                                class="flex-1 sm:flex-initial justify-center px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold shadow-sm transition-colors flex items-center gap-1.5 cursor-pointer">
                            <i data-lucide="plus" class="w-3.5 h-3.5"></i> Añadir
                        </button>
                    </div>
                </div>
            </div>

        </div>


        <!-- SECCIÓN DE PEDIDOS PERSONALIZADOS DE MOUSES -->
        <div class="mt-12 sm:mt-14 rounded-3xl bg-zinc-900 border border-zinc-800 p-6 sm:p-8 flex flex-col lg:flex-row items-center justify-between gap-6 shadow-xl">

            <div class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4 max-w-2xl">

                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center shrink-0">
                    <i data-lucide="mouse-pointer-click" class="w-6 h-6 sm:w-7 sm:h-7"></i>
                </div>

                <div>
                    <span class="inline-block text-[11px] font-extrabold uppercase tracking-wider text-cyan-400 mb-1">
                        Importación & Pedidos Especiales
                    </span>

                    <h3 class="text-lg sm:text-xl font-black text-white">
                        ¿Buscas otro mouse ultraligero o sensor en específico?
                    </h3>

                    <p class="text-zinc-400 text-xs sm:text-sm mt-1.5 leading-relaxed">
                        Si buscas otro modelo según tu tipo de agarre (Lamzu, Scyrox, Attack Shark, Logitech, Pulsar, etc.), indícanos el modelo exacto y gestionamos su compra a pedido.
                    </p>
                </div>
            </div>

            <a href="https://wa.me/51924517984?text=Hola%20HYH%20CORE,%20quisiera%20consultar%20si%20pueden%20traer%20a%20pedido%20otro%20modelo%20de%20mouse%20gamer:"
               target="_blank"
               class="w-full lg:w-auto justify-center shrink-0 px-6 py-3.5 rounded-2xl bg-cyan-500 hover:bg-cyan-400 text-zinc-950 text-xs sm:text-sm font-extrabold shadow-lg shadow-cyan-500/20 transition-colors duration-200 flex items-center gap-2">
                <i data-lucide="package-plus" class="w-4 h-4"></i>
                Consultar mouse a pedido
            </a>

        </div>

    </div>
</section>


<!-- FUNCIÓN COMPLEMENTARIA PARA AGREGAR VARIANTES -->
<script>
    function agregarVarianteAlPedido(nombre, precio, selectorId, boton) {

        const selector = document.getElementById(selectorId);

        if (!selector) {
            console.error('No se encontró el selector de color:', selectorId);
            return;
        }

        const colorSeleccionado = selector.value;

        // Utiliza tu función ORIGINAL del carrito.
        agregarAlPedido(
            `${nombre} - ${colorSeleccionado}`,
            precio,
            boton
        );
    }
</script>


    <!-- 6. SECCIÓN INDEPENDIENTE: MOUSEPADS GAMING PRO -->
    <section id="mousepads" class="scroll-mt-24 w-full relative bg-white py-16 lg:py-24 overflow-hidden border-t border-slate-200">

        <div class="absolute top-0 left-1/4 w-[28rem] h-72 rounded-full pointer-events-none"
             style="background: radial-gradient(ellipse at center, rgba(244,114,182,0.16) 0%, transparent 70%);"></div>
        <div class="absolute top-10 right-1/4 w-[28rem] h-72 rounded-full pointer-events-none"
             style="background: radial-gradient(ellipse at center, rgba(34,211,238,0.16) 0%, transparent 70%);"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
            
            <div class="relative flex flex-col items-center justify-center border-b border-slate-200 pb-8 mb-10 text-center lg:px-28">
                <div class="hidden lg:block absolute left-2 top-1/2 -translate-y-1/2 pointer-events-none">
                    <img src="https://hyhcore.com/wp-content/uploads/2026/11/mascota-_1_.webp" 
                         alt="Mascota HYH CORE" 
                         loading="lazy"
                         decoding="async"
                         class="w-24 h-auto object-contain mascot-float">
                </div>

                <div class="max-w-2xl mx-auto">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-gradient-to-r from-pink-50 via-purple-50 to-cyan-50 border border-pink-200 text-pink-700 text-xs font-extrabold uppercase tracking-wider shadow-sm mb-2.5">
                        <i data-lucide="sparkles" class="w-3.5 h-3.5 text-pink-600"></i> Deslizamiento Preciso & Ediciones Especiales
                    </div>
                    <h2 class="text-2xl sm:text-4xl lg:text-[2.65rem] font-black text-slate-900 tracking-tight leading-tight">
                        Mousepads Gaming <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-600 via-purple-600 to-cyan-600">Control & Speed</span>
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base mt-2">
                        Superficies de microfibra de alta densidad, costuras bajas anti-desgaste y base antideslizante para máximo control.
                    </p>
                </div>

                <div class="hidden lg:block absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none">
                    <img src="https://hyhcore.com/wp-content/uploads/2026/11/mascota-_1_.webp" 
                         alt="Mascota HYH CORE" 
                         loading="lazy"
                         decoding="async"
                         class="w-24 h-auto object-contain mascot-float scale-x-[-1]">
                </div>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-6 items-stretch">
                
                <!-- MODELO 1: Attack Shark CM02 Black -->
                <div class="product-card group relative rounded-2xl sm:rounded-3xl bg-zinc-950 border-2 border-cyan-500/50 hover:border-cyan-400 shadow-md hover:shadow-xl transition-colors duration-200 flex flex-col justify-between overflow-hidden">
                    <div>
                        <div class="aspect-[5/5] w-full relative overflow-hidden bg-zinc-950">
                            <div class="absolute top-2.5 left-2.5 right-2.5 sm:top-3.5 sm:left-3.5 sm:right-3.5 flex items-center justify-between gap-1 z-20">
                                <span class="bg-zinc-950/90 text-cyan-300 border border-cyan-500/40 text-[9px] sm:text-[10px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wide">
                                    Stealth Black
                                </span>
                                <span class="bg-rose-600 text-white text-[9px] sm:text-[10px] font-black px-1.5 py-0.5 rounded shadow uppercase">
                                    Oferta
                                </span>
                            </div>

                            <img src="{{ asset('images/Alfombrilla gaming Attack Shark CM02 (1).webp') }}" 
                                 alt="Attack Shark CM02 Black" 
                                 loading="lazy"
                                 decoding="async"
                                 class="w-full h-full object-cover object-center transform-gpu group-hover:scale-105 transition-transform duration-300">
                        </div>

                        <div class="p-3 sm:p-4 bg-gradient-to-br from-zinc-950 via-zinc-900 to-cyan-950/60 border-t border-white/10">
                            <div class="text-[9px] font-extrabold text-cyan-400 uppercase tracking-wider flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span> Attack Shark
                            </div>
                            <h3 class="text-xs sm:text-sm font-black text-white group-hover:text-cyan-300 transition-colors leading-snug mt-0.5">
                                Attack Shark CM02 Black
                            </h3>
                            <p class="hidden sm:block text-zinc-400 text-xs mt-1 leading-relaxed line-clamp-2">
                                Superficie equilibrada Control/Speed de alta densidad y base antideslizante.
                            </p>

                            <div class="mt-2 flex flex-wrap gap-1">
                                <span class="text-[9px] font-semibold text-zinc-200 bg-white/10 border border-white/15 px-1.5 py-0.5 rounded">Control / Speed</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 sm:p-4 pt-2 sm:pt-2.5 border-t border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-zinc-950">
                        <div>
                            <span class="block text-[10px] text-zinc-400 line-through font-semibold">S/ 110.00</span>
                            <span class="text-sm sm:text-lg font-black text-white">S/ 60.00</span>
                        </div>
                        <button type="button" onclick="agregarAlPedido('Mousepad Attack Shark CM02 Black', 60.00, this)"
                                class="w-full sm:w-auto justify-center px-3 py-1.5 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold shadow-sm transition-colors flex items-center gap-1.5 cursor-pointer">
                            <i data-lucide="plus" class="w-3.5 h-3.5"></i> Añadir
                        </button>
                    </div>
                </div>

                <!-- MODELO 2: Attack Shark CM02 White with Black Lines -->
                <div class="product-card group relative rounded-2xl sm:rounded-3xl bg-white border-2 border-slate-300 hover:border-sky-500 shadow-md hover:shadow-xl transition-colors duration-200 flex flex-col justify-between overflow-hidden">
                    <div>
                        <div class="aspect-[5/5] w-full relative overflow-hidden bg-slate-100">
                            <div class="absolute top-2.5 left-2.5 right-2.5 sm:top-3.5 sm:left-3.5 sm:right-3.5 flex items-center justify-between gap-1 z-20">
                                <span class="bg-slate-900/95 text-white border border-white/20 text-[9px] sm:text-[10px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wide">
                                    Contours White
                                </span>
                                <span class="bg-rose-600 text-white text-[9px] sm:text-[10px] font-black px-1.5 py-0.5 rounded shadow uppercase">
                                    Oferta
                                </span>
                            </div>

                            <img src="{{ asset('images/Alfombrilla-gaming-CM02-futurista-_1_.webp') }}" 
                                 alt="Attack Shark CM02 White with Black Lines" 
                                 loading="lazy"
                                 decoding="async"
                                 class="w-full h-full object-cover object-center transform-gpu group-hover:scale-105 transition-transform duration-300">
                        </div>

                        <div class="p-3 sm:p-4 bg-white border-t border-slate-200">
                            <div class="text-[9px] font-extrabold text-slate-900 uppercase tracking-wider flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-slate-900"></span> Attack Shark
                            </div>
                            <h3 class="text-xs sm:text-sm font-black text-slate-900 group-hover:text-sky-600 transition-colors leading-snug mt-0.5">
                                CM02 White & Black Lines
                            </h3>
                            <p class="hidden sm:block text-slate-600 text-xs mt-1 leading-relaxed line-clamp-2">
                                Diseño blanco con líneas topográficas negras y base de caucho de alto agarre.
                            </p>

                            <div class="mt-2 flex flex-wrap gap-1">
                                <span class="text-[9px] font-semibold text-slate-800 bg-slate-100 border border-slate-200 px-1.5 py-0.5 rounded">Topográfico</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 sm:p-4 pt-2 sm:pt-2.5 border-t border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-slate-50">
                        <div>
                            <span class="block text-[10px] text-slate-400 line-through font-semibold">S/ 110.00</span>
                            <span class="text-sm sm:text-lg font-black text-slate-900">S/ 60.00</span>
                        </div>
                        <button type="button" onclick="agregarAlPedido('Mousepad Attack Shark CM02 White/Lines', 60.00, this)"
                                class="w-full sm:w-auto justify-center px-3 py-1.5 rounded-lg bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold shadow-sm transition-colors flex items-center gap-1.5 cursor-pointer">
                            <i data-lucide="plus" class="w-3.5 h-3.5"></i> Añadir
                        </button>
                    </div>
                </div>

                <!-- MODELO 3: ATK Anime Mouse Pad – Reverie PINK -->
                <div class="product-card group relative rounded-2xl sm:rounded-3xl bg-zinc-950 border-2 border-pink-500/60 hover:border-pink-400 shadow-md hover:shadow-xl transition-colors duration-200 flex flex-col justify-between overflow-hidden">
                    <div>
                        <div class="aspect-[5/5] w-full relative overflow-hidden bg-zinc-950">
                            <div class="absolute top-2.5 left-2.5 right-2.5 sm:top-3.5 sm:left-3.5 sm:right-3.5 flex items-center justify-between gap-1 z-20">
                                <span class="bg-pink-600 text-white border border-pink-300/40 text-[9px] sm:text-[10px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wide shadow">
                                    -32% Promo
                                </span>
                                <span class="inline-flex items-center gap-1 bg-zinc-950/90 text-pink-300 border border-pink-400/30 text-[9px] font-bold px-2 py-0.5 rounded">
                                    <span class="w-2 h-2 rounded-full bg-pink-400"></span> Pink Edition
                                </span>
                            </div>

                            <img src="{{ asset('images/Alfombrilla-anime-ATK-en-rosa-neon-_1_.webp') }}" 
                                 alt="ATK Anime Mouse Pad Reverie Pink" 
                                 loading="lazy"
                                 decoding="async"
                                 class="w-full h-full object-cover object-center transform-gpu group-hover:scale-105 transition-transform duration-300">
                        </div>

                        <div class="p-3 sm:p-4 bg-gradient-to-br from-pink-950 via-purple-950/90 to-zinc-950 border-t border-pink-500/20">
                            <div class="text-[9px] font-extrabold text-pink-400 uppercase tracking-wider flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-pink-400"></span> ATK Anime Edition
                            </div>
                            <h3 class="text-xs sm:text-sm font-black text-white group-hover:text-pink-300 transition-colors leading-snug mt-0.5">
                                ATK Anime Pad – Reverie Pink
                            </h3>
                            <p class="hidden sm:block text-pink-100/75 text-xs mt-1 leading-relaxed line-clamp-2">
                                Ilustración anime exclusiva en tono rosado vibrante, deslizamiento ultra suave y base de caucho.
                            </p>

                            <div class="mt-2 flex flex-wrap gap-1">
                                <span class="text-[9px] font-semibold text-pink-200 bg-pink-500/20 border border-pink-400/30 px-1.5 py-0.5 rounded">Edición Rosado</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 sm:p-4 pt-2 sm:pt-2.5 border-t border-pink-500/20 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-zinc-950">
                        <div>
                            <span class="block text-[10px] text-pink-300/60 line-through font-semibold">S/ 129.00</span>
                            <span class="text-sm sm:text-lg font-black text-pink-400">S/ 88.00</span>
                        </div>
                        <button type="button" onclick="agregarAlPedido('ATK Anime Mouse Pad Reverie Pink', 88.00, this)"
                                class="w-full sm:w-auto justify-center px-3 py-1.5 rounded-lg bg-pink-600 hover:bg-pink-500 text-white text-xs font-bold shadow-sm transition-colors flex items-center gap-1.5 cursor-pointer">
                            <i data-lucide="plus" class="w-3.5 h-3.5"></i> Añadir
                        </button>
                    </div>
                </div>

                <!-- MODELO 4: ATK Anime Mouse Pad – Reverie BLACK -->
                <div class="product-card group relative rounded-2xl sm:rounded-3xl bg-zinc-950 border-2 border-purple-500/60 hover:border-purple-400 shadow-md hover:shadow-xl transition-colors duration-200 flex flex-col justify-between overflow-hidden">
                    <div>
                        <div class="aspect-[5/5] w-full relative overflow-hidden bg-zinc-950">
                            <div class="absolute top-2.5 left-2.5 right-2.5 sm:top-3.5 sm:left-3.5 sm:right-3.5 flex items-center justify-between gap-1 z-20">
                                <span class="bg-purple-600 text-white border border-purple-300/40 text-[9px] sm:text-[10px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wide shadow">
                                    -32% Promo
                                </span>
                                <span class="inline-flex items-center gap-1 bg-zinc-950/90 text-purple-300 border border-purple-400/30 text-[9px] font-bold px-2 py-0.5 rounded">
                                    <span class="w-2 h-2 rounded-full bg-purple-500"></span> Black Edition
                                </span>
                            </div>

                            <img src="{{ asset('images/Alfombrilla-Anime-ATK-en-Blanco-y-Negro-_1_.webp') }}" 
                                 alt="ATK Anime Mouse Pad Reverie Black" 
                                 loading="lazy"
                                 decoding="async"
                                 class="w-full h-full object-cover object-center transform-gpu group-hover:scale-105 transition-transform duration-300">
                        </div>

                        <div class="p-3 sm:p-4 bg-gradient-to-br from-purple-950 via-zinc-900 to-zinc-950 border-t border-purple-500/20">
                            <div class="text-[9px] font-extrabold text-purple-400 uppercase tracking-wider flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span> ATK Anime Edition
                            </div>
                            <h3 class="text-xs sm:text-base font-black text-white group-hover:text-purple-300 transition-colors leading-snug mt-0.5">
                                ATK Anime Pad – Reverie Black
                            </h3>
                            <p class="hidden sm:block text-purple-100/75 text-xs mt-1 leading-relaxed line-clamp-2">
                                Ilustración anime exclusiva sobre base negra de alto contraste, costuras invisibles y máximo rendimiento.
                            </p>

                            <div class="mt-2 flex flex-wrap gap-1">
                                <span class="text-[9px] font-semibold text-purple-200 bg-purple-500/20 border border-purple-400/30 px-1.5 py-0.5 rounded">Edición Negro</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 sm:p-4 pt-2 sm:pt-2.5 border-t border-purple-500/20 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-zinc-950">
                        <div>
                            <span class="block text-[10px] text-purple-300/60 line-through font-semibold">S/ 129.00</span>
                            <span class="text-sm sm:text-lg font-black text-purple-400">S/ 88.00</span>
                        </div>
                        <button type="button" onclick="agregarAlPedido('ATK Anime Mouse Pad Reverie Black', 88.00, this)"
                                class="w-full sm:w-auto justify-center px-3 py-1.5 rounded-lg bg-purple-600 hover:bg-purple-500 text-white text-xs font-bold shadow-sm transition-colors flex items-center gap-1.5 cursor-pointer">
                            <i data-lucide="plus" class="w-3.5 h-3.5"></i> Añadir
                        </button>
                    </div>
                </div>

            </div>

            <!-- BANNER INFERIOR DE COMBOS -->
            <div class="mt-12 sm:mt-14 rounded-3xl bg-gradient-to-r from-slate-50 via-pink-50/40 to-cyan-50/50 border border-slate-200 p-6 sm:p-8 flex flex-col lg:flex-row items-center justify-between gap-6 shadow-sm">
                <div class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4 max-w-2xl">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-pink-500 to-purple-600 text-white flex items-center justify-center shrink-0 shadow-md">
                        <i data-lucide="layers" class="w-6 h-6 sm:w-7 sm:h-7"></i>
                    </div>
                    <div>
                        <span class="inline-block text-[11px] font-extrabold uppercase tracking-wider text-pink-600 mb-1">
                            Arma tu Setup Completo
                        </span>
                        <h3 class="text-lg sm:text-xl font-black text-slate-900">
                            ¿Buscas algún mousepad XXL o diseño especial a pedido?
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm mt-1.5 leading-relaxed">
                            Combina tu teclado magnético y mouse ultraligero con cualquiera de nuestros mousepads en promoción, o consúltanos por otros tamaños y diseños.
                        </p>
                    </div>
                </div>

                <a href="https://wa.me/51924517984?text=Hola%20HYH%20CORE,%20quisiera%20consultar%20por%20modelos%20de%20mousepads%20disponibles%20o%20a%20pedido:" 
                   target="_blank"
                   class="w-full lg:w-auto justify-center shrink-0 px-6 py-3.5 rounded-2xl bg-slate-900 hover:bg-pink-600 text-white text-xs sm:text-sm font-bold shadow-md transition-colors duration-200 flex items-center gap-2">
                    <i data-lucide="message-circle" class="w-4 h-4"></i> Consultar diseños
                </a>
            </div>

        </div>
    </section>

    @include('partials.whatsapp')

    <!-- PANEL FLOTANTE DE PEDIDO CON MASCOTA -->
    <div id="carrito-flotante" class="hidden fixed bottom-4 right-4 z-50 w-[calc(100vw-2rem)] max-w-sm">
        
        <div class="flex items-end justify-between px-3 -mb-3 relative z-20 pointer-events-none">
            <span class="mb-4 bg-zinc-900 text-cyan-300 text-[11px] font-bold px-3 py-1 rounded-xl rounded-bl-none border border-cyan-500/40 shadow-lg">
                ¡Tu setup va tomando forma! ⚡
            </span>
            <img src="https://hyhcore.com/wp-content/uploads/2026/11/mascota-_1_.webp" 
                 alt="Mascota HYH CORE" 
                 loading="lazy"
                 decoding="async"
                 class="w-16 sm:w-20 h-auto object-contain">
        </div>

        <div class="bg-zinc-950/95 border border-cyan-500/40 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.8)] overflow-hidden text-white">
            
            <div class="px-4 py-3 bg-zinc-900/95 border-b border-zinc-800 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <i data-lucide="shopping-bag" class="w-4 h-4 text-cyan-400"></i>
                    <span class="text-xs font-extrabold uppercase tracking-wider text-white">Tu Lista de Pedido</span>
                    <span id="pedido-contador" class="px-2 py-0.5 text-[10px] font-black bg-cyan-500 text-zinc-950 rounded-full">0</span>
                </div>
                <button type="button" onclick="toggleMinimizarPedido()" class="text-zinc-400 hover:text-white text-xs font-bold px-2 py-1 rounded hover:bg-zinc-800 transition cursor-pointer">
                    <span id="btn-toggle-texto">Ocultar</span>
                </button>
            </div>

            <div id="pedido-cuerpo">
                <ul id="lista-productos-pedido" class="max-h-48 overflow-y-auto divide-y divide-zinc-800/80 px-4"></ul>

                <div class="p-4 bg-zinc-900/80 border-t border-zinc-800 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-semibold text-zinc-400">Total estimado:</span>
                        <span id="pedido-total" class="text-lg font-black text-cyan-400">S/ 0.00</span>
                    </div>

                    <div class="flex gap-2">
                        <button type="button" onclick="vaciarPedido()" title="Vaciar lista"
                                class="px-3 py-2.5 rounded-xl bg-zinc-800 hover:bg-red-500/20 text-zinc-400 hover:text-red-400 border border-zinc-700 hover:border-red-500/40 transition text-xs font-bold cursor-pointer">
                            Limpiar
                        </button>
                        <button type="button" onclick="enviarPedidoWhatsApp()"
                                class="flex-1 py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-xs sm:text-sm font-extrabold shadow-lg shadow-emerald-950/50 transition flex items-center justify-center gap-2 cursor-pointer">
                            <i data-lucide="message-circle" class="w-4 h-4"></i> Hacer Pedido
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        let carritoPedido = [];
        let pedidoMinimizado = false;
        const WHATSAPP_NUMERO = '51924517984';

        function agregarAlPedido(nombre, precio, botonElement) {
            const existente = carritoPedido.find(item => item.nombre === nombre);
            if (existente) {
                existente.cantidad += 1;
            } else {
                carritoPedido.push({ nombre, precio, cantidad: 1 });
            }

            pedidoMinimizado = false;
            const cuerpo = document.getElementById('pedido-cuerpo');
            if (cuerpo) cuerpo.classList.remove('hidden');

            const btnTexto = document.getElementById('btn-toggle-texto');
            if (btnTexto) btnTexto.textContent = 'Ocultar';

            renderizarPedido();

            if (botonElement) {
                if (botonElement._resetTimer) clearTimeout(botonElement._resetTimer);
                if (!botonElement.dataset.originalHtml) {
                    botonElement.dataset.originalHtml = botonElement.innerHTML;
                    botonElement.dataset.originalBg = botonElement.className.match(/bg-\w+-\d+/)?.[0] || 'bg-sky-600';
                }

                const bgOriginal = botonElement.dataset.originalBg;
                botonElement.classList.remove(bgOriginal);
                botonElement.classList.add('bg-emerald-600');
                botonElement.innerHTML = '<svg class="w-3.5 h-3.5 inline" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Añadido';

                botonElement._resetTimer = setTimeout(() => {
                    botonElement.classList.remove('bg-emerald-600');
                    botonElement.classList.add(bgOriginal);
                    botonElement.innerHTML = botonElement.dataset.originalHtml;
                }, 800);
            }
        }

        function cambiarCantidad(index, delta) {
            carritoPedido[index].cantidad += delta;
            if (carritoPedido[index].cantidad <= 0) {
                carritoPedido.splice(index, 1);
            }
            renderizarPedido();
        }

        function vaciarPedido() {
            carritoPedido = [];
            renderizarPedido();
        }

        function toggleMinimizarPedido() {
            pedidoMinimizado = !pedidoMinimizado;
            const cuerpo = document.getElementById('pedido-cuerpo');
            const btnTexto = document.getElementById('btn-toggle-texto');

            if (!cuerpo) return;

            if (pedidoMinimizado) {
                cuerpo.classList.add('hidden');
                if (btnTexto) btnTexto.textContent = 'Ver lista';
            } else {
                cuerpo.classList.remove('hidden');
                if (btnTexto) btnTexto.textContent = 'Ocultar';
            }
        }

        function renderizarPedido() {
            const contenedor = document.getElementById('carrito-flotante');
            const lista = document.getElementById('lista-productos-pedido');
            const totalEl = document.getElementById('pedido-total');
            const contadorEl = document.getElementById('pedido-contador');

            if (!contenedor || !lista) return;

            if (carritoPedido.length === 0) {
                contenedor.classList.add('hidden');
                return;
            }

            contenedor.classList.remove('hidden');

            let total = 0;
            let cantidadTotal = 0;
            const fragment = document.createDocumentFragment();

            carritoPedido.forEach((item, index) => {
                const subtotal = item.precio * item.cantidad;
                total += subtotal;
                cantidadTotal += item.cantidad;

                const li = document.createElement('li');
                li.className = 'py-2.5 flex items-center justify-between gap-2 text-xs';
                li.innerHTML = `
                    <div class="flex-1 min-w-0">
                        <p class="font-bold text-white truncate">${item.nombre}</p>
                        <span class="text-cyan-400 font-semibold">S/ ${subtotal.toFixed(2)}</span>
                    </div>
                    <div class="flex items-center gap-1.5 shrink-0">
                        <button type="button" onclick="cambiarCantidad(${index}, -1)" class="w-6 h-6 rounded bg-zinc-800 hover:bg-zinc-700 text-white font-bold flex items-center justify-center cursor-pointer">-</button>
                        <span class="w-4 text-center font-bold text-zinc-200">${item.cantidad}</span>
                        <button type="button" onclick="cambiarCantidad(${index}, 1)" class="w-6 h-6 rounded bg-zinc-800 hover:bg-zinc-700 text-white font-bold flex items-center justify-center cursor-pointer">+</button>
                    </div>
                `;
                fragment.appendChild(li);
            });

            lista.innerHTML = '';
            lista.appendChild(fragment);

            if (totalEl) totalEl.textContent = `S/ ${total.toFixed(2)}`;
            if (contadorEl) contadorEl.textContent = cantidadTotal;
        }

        function enviarPedidoWhatsApp() {
            if (carritoPedido.length === 0) return;

            let mensaje = "Hola *HYH CORE*, deseo realizar el siguiente pedido:\n\n";
            let total = 0;

            carritoPedido.forEach(item => {
                const subtotal = item.precio * item.cantidad;
                total += subtotal;
                mensaje += `• ${item.cantidad}x *${item.nombre}* — S/ ${subtotal.toFixed(2)}\n`;
            });

            mensaje += `\n*Total a pagar: S/ ${total.toFixed(2)}*\n¿Me confirman disponibilidad y métodos de pago/envío?`;

            const url = `https://wa.me/${WHATSAPP_NUMERO}?text=${encodeURIComponent(mensaje)}`;
            window.open(url, '_blank');
        }
    </script>

@endsection

@push('styles')
<style>
    @keyframes float {
        0%, 100% { transform: translate3d(0, 0, 0); }
        50% { transform: translate3d(0, -8px, 0); }
    }

    @keyframes spin-rgb {
        0% { transform: translate3d(-50%, -50%, 0) rotate(0deg); }
        100% { transform: translate3d(-50%, -50%, 0) rotate(360deg); }
    }

    .mascot-float {
        animation: float 4s ease-in-out infinite;
    }

    .mascot-float.is-paused {
        animation-play-state: paused;
    }

    .product-card {
        contain: layout style paint;
    }

    .rgb-ring-thin {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 240%;
        height: 240%;
        transform: translate3d(-50%, -50%, 0);
        background: conic-gradient(
            from 0deg,
            #06b6d4,
            #3b82f6,
            #8b5cf6,
            #ec4899,
            #10b981,
            #06b6d4
        );
        animation: none;
        opacity: 0.85;
        pointer-events: none;
    }

    .group:hover .rgb-ring-thin {
        animation: spin-rgb 4s linear infinite;
        will-change: transform;
    }
</style>
@endpush

@push('scripts')
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.carousel-dot');
    const carouselContainer = document.getElementById('showcase-carousel');
    let slideInterval = null;
    let carouselVisible = true;

    function showSlide(index) {
        if (!slides.length) return;
        currentSlide = (index + slides.length) % slides.length;

        slides.forEach((slide, i) => {
            if (i === currentSlide) {
                slide.classList.remove('opacity-0', 'pointer-events-none');
                slide.classList.add('opacity-100');
            } else {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0', 'pointer-events-none');
            }
        });

        dots.forEach((dot, i) => {
            if (i === currentSlide) {
                dot.classList.remove('w-2', 'bg-slate-300');
                dot.classList.add('w-6', 'bg-sky-500');
            } else {
                dot.classList.remove('w-6', 'bg-sky-500');
                dot.classList.add('w-2', 'bg-slate-300');
            }
        });
    }

    function moveSlide(step) {
        showSlide(currentSlide + step);
        resetInterval();
    }

    function goToSlide(index) {
        showSlide(index);
        resetInterval();
    }

    function stopInterval() {
        if (slideInterval) {
            clearInterval(slideInterval);
            slideInterval = null;
        }
    }

    function resetInterval() {
        stopInterval();
        if (carouselVisible && !document.hidden) {
            slideInterval = setInterval(() => showSlide(currentSlide + 1), 4000);
        }
    }

    if ('IntersectionObserver' in window) {
        if (carouselContainer) {
            const carouselObserver = new IntersectionObserver((entries) => {
                carouselVisible = entries[0].isIntersecting;
                if (carouselVisible) {
                    resetInterval();
                } else {
                    stopInterval();
                }
            }, { threshold: 0.1 });
            carouselObserver.observe(carouselContainer);
        }

        const floatElements = document.querySelectorAll('.mascot-float');
        if (floatElements.length) {
            const floatObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    entry.target.classList.toggle('is-paused', !entry.isIntersecting);
                });
            }, { rootMargin: '80px' });
            floatElements.forEach(el => floatObserver.observe(el));
        }
    }

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopInterval();
        } else {
            resetInterval();
        }
    });

    resetInterval();
</script>
@endpush