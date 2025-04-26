<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - UAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    :root {
        --principal: #00A5B5;
        --oscuro: #004D4D;
    }
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    main {
        flex-grow: 1;
    }

    @keyframes fadeInUpScroll {
    0% {
        opacity: 0;
        transform: translateY(40px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
.scroll-fade-in-up {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.6s ease-out;
}
.scroll-fade-in-up.active {
    opacity: 1;
    transform: translateY(0);
    animation: fadeInUpScroll 0.6s ease-out both;
}

</style>

</head>



<body class="bg-gray-100 text-gray-800">

<x-navbar />
    <!-- CARRUSEL CON IMÁGENES -->
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

        <!-- Botones personalizados -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselValores" data-bs-slide="prev">
            <span class="text-white text-4xl font-bold bg-black bg-opacity-50 px-3 py-1 rounded-full" aria-hidden="true">&#10094;</span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselValores" data-bs-slide="next">
            <span class="text-white text-4xl font-bold bg-black bg-opacity-50 px-3 py-1 rounded-full" aria-hidden="true">&#10095;</span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- SECCIONES -->
    <main class="p-8 space-y-12">

        <!-- ¿Quiénes somos? en dos columnas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <section class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200 md:col-span-2 text-center scroll-fade-in-up">

                <h2 class="text-3xl font-bold mb-4 text-[color:var(--principal)]">¿Quiénes somos?</h2>
                <p class="text-justify leading-relaxed text-gray-700 text-lg">
                    La Universidad Americana, UAM, fue fundada en 1992, por un grupo de catedráticos universitarios de vasta experiencia en el campo docente, investigativo y administrativo, con el propósito de contribuir al desarrollo de la Educación Superior en Nicaragua. El Consejo Nacional de Universidades (CNU) aprobó oficialmente a UAM el 26 de noviembre de 1992, aprobación que confirió el debido reconocimiento nacional e Internacional. Al día de hoy la UAM ofrece 19 carreras en grado y un amplio portafolio en programas de educación continua.
                </p>
            </section>
        </div>

        <!-- Misión y Visión divididos en columnas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <section class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200 text-center scroll-fade-in-up">

                <h2 class="text-3xl font-bold mb-4 text-[color:var(--principal)]">Misión</h2>
                <p class="text-justify leading-relaxed text-gray-700 text-lg">
                    Formar líderes con visión global, emprendedores, con sólidos conocimientos científicos y principios humanísticos, capaces de aprender permanentemente para hacer frente a los desafíos de la sociedad contemporánea.
                </p>
            </section>

            <section class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200 text-center scroll-fade-in-up">

                <h2 class="text-3xl font-bold mb-4 text-[color:var(--principal)]">Visión</h2>
                <p class="text-justify leading-relaxed text-gray-700 text-lg">
                    Consolidarse como institución académica de clase internacional comprometida con el desarrollo humano equitativo y sostenible, con la eficiencia y competitividad de una organización privada de alto rendimiento.
                </p>
            </section>
        </div>
    </main>

    <x-footer />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Detectar cuando un elemento entra en pantalla
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, {
        threshold: 0.2 // Cuando el 20% del elemento sea visible
    });

    // Aplicar a todos los elementos con clase .scroll-fade-in-up
    document.querySelectorAll('.scroll-fade-in-up').forEach(element => {
        observer.observe(element);
    });
</script>
</body>
</html>
