<div class="bg-white rounded-xl shadow-md p-5 border-t-[6px] scroll-fade-in-up transition-transform transform duration-300 ease-in-out hover:scale-105 hover:shadow-2xl flex flex-col justify-between" style="border-top-color: {{ $color }}; min-height: 340px;">
    <div>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold flex items-center gap-2 text-[{{ $color }}]">
                <i class="bi {{ $icono }}"></i> {{ $titulo }}
            </h2>
            <span class="text-white text-xs px-2 py-1 rounded-full" style="background-color: {{ $color }};">{{ $nivel }}</span>
        </div>
        <p class="text-gray-700 mb-4 text-sm leading-relaxed">
            {{ $descripcion }}
        </p>
        <p class="text-sm text-gray-500 mb-4"><i class="bi bi-calendar-event"></i> {{ $fecha }}</p>
    </div>
    <div class="text-right">
    <a href="/registro" class="inline-block text-white text-sm px-6 py-3 rounded-lg bg-[{{ $color }}] transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
    Registrarse
</a>
    </div>
</div>
