<div id="carouselValores" class="carousel slide mt-10 mx-auto w-11/12 md:w-3/4" data-bs-ride="carousel">
    <div class="carousel-inner rounded shadow-lg overflow-hidden">
        @foreach([
            ['Integridad ética y profesional', 'integridad.jpg'],
            ['Excelencia', 'excelencia.jpg'],
            ['Autonomía', 'autonomia.jpg'],
            ['Pensamiento crítico', 'pensamiento.jpg'],
            ['Respeto', 'respeto.jpg'],
            ['Responsabilidad social', 'responsabilidad.jpg']
        ] as $i => [$valor, $imagen])
            <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                <div class="relative h-[550px]">
                    <img 
                        src="{{ asset('images/valores/' . $imagen) }}" 
                        class="w-full h-full object-cover object-center blur-[1px] contrast-110 brightness-95" 
                        alt="{{ $valor }}">
                    <div class="absolute bottom-0 bg-black bg-opacity-50 w-full text-center text-white py-4 text-3xl font-extrabold tracking-wide">
                        {{ $valor }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselValores" data-bs-slide="prev">
        <span class="text-white text-4xl font-bold bg-black bg-opacity-50 px-3 py-1 rounded-full" aria-hidden="true">&#10094;</span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselValores" data-bs-slide="next">
        <span class="text-white text-4xl font-bold bg-black bg-opacity-50 px-3 py-1 rounded-full" aria-hidden="true">&#10095;</span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
