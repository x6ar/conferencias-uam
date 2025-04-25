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
            --gris: #1E1E1E;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-[color:var(--oscuro)] text-white p-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/logo-uam.png') }}" alt="UAM Logo" class="h-10 w-auto">
        </div>

        <!-- Menú con más espacio -->
        <ul class="flex gap-10 items-center text-lg">
            <li><a href="/" class="flex items-center gap-2 hover:text-[color:var(--principal)]"><i class="bi bi-house-door-fill"></i>Inicio</a></li>
            <li><a href="/eventos" class="flex items-center gap-2 hover:text-[color:var(--principal)]"><i class="bi bi-calendar-event-fill"></i>Conferencias</a></li>
            <li><a href="/registro" class="flex items-center gap-2 hover:text-[color:var(--principal)]"><i class="bi bi-pencil-square"></i>Registro</a></li>
        </ul>

        <!-- Iconos adicionales -->
        <div class="flex gap-4 text-xl">
            <a href="#" class="hover:text-[color:var(--principal)]" title="Configuración"><i class="bi bi-gear-fill"></i></a>
            <a href="#" class="hover:text-[color:var(--principal)]" title="Reportar problema"><i class="bi bi-exclamation-circle-fill"></i></a>
        </div>
    </nav>

    <!-- CARRUSEL CON IMÁGENES -->
    <div id="carouselValores" class="carousel slide mt-8 mx-auto w-11/12 md:w-3/4" data-bs-ride="carousel">
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
                            class="w-full h-full object-cover object-center blur-[1px] contrast-110 brightness-105" 
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
            <section class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200 md:col-span-2 text-center">
                <h2 class="text-3xl font-bold mb-4 text-[color:var(--principal)]">¿Quiénes somos?</h2>
                <p class="text-justify leading-relaxed text-gray-700">
                    La Universidad Americana, UAM, fue fundada en 1992, por un grupo de catedráticos universitarios de vasta experiencia en el campo docente, investigativo y administrativo, con el propósito de contribuir al desarrollo de la Educación Superior en Nicaragua. El Consejo Nacional de Universidades (CNU) aprobó oficialmente a UAM el 26 de noviembre de 1992, aprobación que confirió el debido reconocimiento nacional e Internacional. Al día de hoy la UAM ofrece 19 carreras en grado y un amplio portafolio en programas de educación continua.
                </p>
            </section>
        </div>

        <!-- Misión y Visión divididos en columnas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <section class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200 text-center">
                <h2 class="text-3xl font-bold mb-4 text-[color:var(--principal)]">Misión</h2>
                <p class="text-justify leading-relaxed text-gray-700">
                    Formar líderes con visión global, emprendedores, con sólidos conocimientos científicos y principios humanísticos, capaces de aprender permanentemente para hacer frente a los desafíos de la sociedad contemporánea.
                </p>
            </section>

            <section class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200 text-center">
                <h2 class="text-3xl font-bold mb-4 text-[color:var(--principal)]">Visión</h2>
                <p class="text-justify leading-relaxed text-gray-700">
                    Consolidarse como institución académica de clase internacional comprometida con el desarrollo humano equitativo y sostenible, con la eficiencia y competitividad de una organización privada de alto rendimiento.
                </p>
            </section>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-[color:var(--oscuro)] text-white p-4 text-center">
        © 2025 Universidad Americana (UAM)
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
