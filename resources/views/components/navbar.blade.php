<nav class="h-[72px] bg-[color:var(--oscuro)] text-white px-8 py-3 shadow-md z-50 relative">
    <!-- Logo izquierda -->
    <div class="absolute left-8 top-1/2 -translate-y-1/2">
        <img src="{{ asset('images/logo-uam.png') }}" alt="UAM Logo" class="h-12 w-auto object-contain">
    </div>

    <!-- Menú centrado -->
    <ul class="flex justify-center gap-10 text-lg absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <li><a href="/" class="flex items-center gap-2 hover:text-[color:var(--principal)]"><i class="bi bi-house-door-fill"></i>Inicio</a></li>
        <li><a href="/eventos" class="flex items-center gap-2 hover:text-[color:var(--principal)]"><i class="bi bi-calendar-event-fill"></i>Conferencias</a></li>
        <li><a href="/registro" class="flex items-center gap-2 hover:text-[color:var(--principal)]"><i class="bi bi-pencil-square"></i>Registro</a></li>
    </ul>

    <!-- Iconos derecha -->
    <div class="absolute right-8 top-1/2 -translate-y-1/2 flex items-center gap-4 text-xl">
        <a href="#" class="flex items-center justify-center hover:text-[color:var(--principal)] leading-none" title="Reportar problema">
            <i class="bi bi-exclamation-circle-fill"></i>
        </a>
    </div>
</nav>
