<!-- WIDGET FLOTANTE INTERACTIVO GAMER (Esquina Inferior Derecha) -->
<div id="gamer-widget" class="fixed bottom-6 right-6 z-50 flex flex-col items-end">

    <!-- CONTENEDOR PRINCIPAL -->
    <div class="relative flex flex-col items-end">

        <!-- MENÚ DESPLEGABLE (Se controla mediante la clase .active desde JavaScript) -->
        <div id="gamer-menu" class="absolute bottom-full right-0 mb-4 w-72 bg-zinc-950/95 backdrop-blur-2xl border border-cyan-500/40 rounded-2xl p-4 shadow-[0_10px_35px_rgba(6,182,212,0.25)] opacity-0 translate-y-3 pointer-events-none transition-all duration-300 [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:pointer-events-auto">
            
            <!-- Cabecera del soporte -->
            <div class="flex items-center gap-3 pb-3 border-b border-zinc-800/80">
                <div class="relative">
                    <img src="https://hyhcore.com/wp-content/uploads/2026/11/mascota-_1_.webp" alt="Soporte HYH CORE" class="w-10 h-10 rounded-full object-cover border border-cyan-400/50">
                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-zinc-950 rounded-full animate-pulse"></span>
                </div>
                <div>
                    <h4 class="text-white font-bold text-xs tracking-wide">HYH CORE • Soporte Pro</h4>
                    <p class="text-cyan-400 text-[10px]">En línea • Asesoría de Setup</p>
                </div>
            </div>

            <!-- Mensaje de bienvenida -->
            <div class="my-3 bg-zinc-900/90 p-2.5 rounded-xl border border-zinc-800 text-zinc-300 text-xs leading-relaxed">
                ¡Hola! 👋 ¿Buscas un setup de elite? Elige una categoría o consúltanos directo por WhatsApp:
            </div>

            <!-- OPCIONES DEL MENÚ -->
            <div class="space-y-2">
                <!-- Teclados Magnéticos -->
                <a href="#teclados" onclick="toggleGamerMenu()"
                   class="flex items-center justify-between p-2 rounded-xl bg-zinc-900 hover:bg-cyan-500/20 text-zinc-200 hover:text-cyan-300 text-xs font-medium border border-zinc-800 hover:border-cyan-500/40 transition">
                    <span class="flex items-center gap-2">
                        <i data-lucide="keyboard" class="w-4 h-4 text-cyan-400"></i>
                        Teclados Magnéticos (Rapid Trigger)
                    </span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-zinc-500"></i>
                </a>

                <!-- Mouses -->
                <a href="#mouses" onclick="toggleGamerMenu()"
                   class="flex items-center justify-between p-2 rounded-xl bg-zinc-900 hover:bg-cyan-500/20 text-zinc-200 hover:text-cyan-300 text-xs font-medium border border-zinc-800 hover:border-cyan-500/40 transition">
                    <span class="flex items-center gap-2">
                        <i data-lucide="mouse" class="w-4 h-4 text-cyan-400"></i>
                        Mouses Ultraligeros Pro
                    </span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-zinc-500"></i>
                </a>

                <!-- Mousepads -->
                <a href="#mousepads" onclick="toggleGamerMenu()"
                   class="flex items-center justify-between p-2 rounded-xl bg-zinc-900 hover:bg-cyan-500/20 text-zinc-200 hover:text-cyan-300 text-xs font-medium border border-zinc-800 hover:border-cyan-500/40 transition">
                    <span class="flex items-center gap-2">
                        <i data-lucide="layout" class="w-4 h-4 text-cyan-400"></i>
                        Mousepads Pro (Control/Speed)
                    </span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-zinc-500"></i>
                </a>

                <!-- Botón directo a WhatsApp -->
                <a href="https://wa.me/51999999999?text=Hola,%20vengo%20de%20la%20web%20y%20quiero%20asesoría%20sobre%20sus%20periféricos" target="_blank"
                   class="mt-2 flex items-center justify-center gap-2 w-full p-2.5 rounded-xl bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white text-xs font-bold shadow-lg shadow-emerald-950/60 transition">
                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                    Cotizar por WhatsApp
                </a>
            </div>

        </div>

        <!-- AVATAR GAMER FLOTANTE (Ahora abre/cierra la lista con un clic) -->
        <button type="button" onclick="toggleGamerMenu()"
           class="relative flex items-center justify-center cursor-pointer hover:scale-105 transition-all duration-300 focus:outline-none">
            
            <!-- Pulso de luz ambiental -->
            <span class="absolute inset-0 m-auto w-16 h-16 rounded-full bg-cyan-400/30 animate-ping pointer-events-none"></span>

            <!-- Imagen PNG sin fondo con brillo de contorno -->
            <img src="https://hyhcore.com/wp-content/uploads/2026/11/mascota-_1_.webp" 
                 alt="Asistente Gamer HYH CORE" 
                 class="w-20 h-20 sm:w-24 sm:h-24 object-contain filter drop-shadow-[0_0_15px_rgba(6,182,212,0.8)] transition-all duration-300">

            <!-- Insignia flotante de WhatsApp -->
            <span class="absolute bottom-1 right-1 bg-emerald-600 text-white w-6 h-6 rounded-full flex items-center justify-center shadow-lg border-2 border-zinc-950 pointer-events-none">
                <i data-lucide="message-circle" class="w-3.5 h-3.5 fill-current"></i>
            </span>
        </button>

    </div>

</div>

<!-- SCRIPT DE CONTROL DE CLICS (Apertura por clic y cierre automático al hacer clic fuera) -->
<script>
    function toggleGamerMenu() {
        const menu = document.getElementById('gamer-menu');
        menu.classList.toggle('active');
    }

    // Cerrar el menú si se hace clic en cualquier otra parte de la página
    document.addEventListener('click', function(event) {
        const widget = document.getElementById('gamer-widget');
        const menu = document.getElementById('gamer-menu');
        
        if (!widget.contains(event.target) && menu.classList.contains('active')) {
            menu.classList.remove('active');
        }
    });
</script>