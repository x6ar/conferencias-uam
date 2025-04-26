<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conferencias - UAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
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

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease-out both;
    }
</style>

</head>
<body class="bg-gray-100 text-gray-800">


<x-navbar />



    <!-- ENCABEZADO -->
    <header class="text-center my-12 px-4">
        <h1 class="text-4xl font-bold text-[color:var(--principal)] mb-2">Conferencias Tecnológicas</h1>
        <p class="text-lg text-gray-600">Explora y aprende con nuestras charlas exclusivas para estudiantes UAM</p>
    </header>

    <main class="px-6 md:px-16 pb-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

@php
    $conferencias = [
        ['Uso de GitHub en proyectos colaborativos', 'Nivel Básico', 'bi-github', 'Jueves 9 de mayo - 10:00 a.m.', 'Aprende cómo trabajar en equipo utilizando Git y GitHub para el control de versiones. Descubre cómo organizar ramas, usar Pull Requests, revisar código y colaborar de manera eficiente en entornos reales de desarrollo. Ideal para estudiantes que inician con herramientas de control de versiones.'],
        ['Introducción a Docker', 'Nivel Intermedio', 'bi-box-seam', 'Viernes 10 de mayo - 2:00 p.m.', 'Conoce los fundamentos de Docker, cómo se crean contenedores, cómo se construyen imágenes personalizadas y cómo puedes aislar entornos de desarrollo para evitar conflictos entre proyectos. Perfecto para quienes quieren dar el siguiente paso en DevOps.'],
        ['Configuración de servidores Linux', 'Nivel Avanzado', 'bi-hdd-network', 'Sábado 11 de mayo - 9:00 a.m.', 'Aprende a configurar desde cero un servidor Linux para alojar aplicaciones web. Ideal para estudiantes que quieren administrar servidores propios o en la nube.'],
    ];

    for ($i = 1; $i <= 6; $i++) {
        $conferencias[] = ["Conferencia de prueba #$i", 'Nivel Básico', 'bi-lightbulb-fill', 'Fecha por definir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit, sapien vitae dignissim porttitor, tellus metus feugiat elit, a consequat magna massa nec sem.'];
    }

    $colores = ['#00A5B5', '#009688', '#00796B', '#0288D1', '#5C6BC0'];
@endphp

@foreach($conferencias as $i => [$titulo, $nivel, $icono, $fecha, $descripcion])
    @php $color = $colores[$i % count($colores)]; @endphp
    <x-conferencia 
        :titulo="$titulo" 
        :nivel="$nivel" 
        :icono="$icono" 
        :fecha="$fecha" 
        :descripcion="$descripcion" 
        :color="$color" 
    />
@endforeach


</main>
<x-footer/>
</body>
</html>
