<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - UAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
        @keyframes fadeInForm {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeInForm 0.8s ease-out both;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

<x-navbar />

<main class="flex flex-col items-center justify-center p-8">

    <!-- Título -->
    <div class="text-center mb-10 animate-fade-in">
        <h1 class="text-4xl font-bold text-[color:var(--principal)]">Registro a Conferencias</h1>
        <p class="text-gray-600 mt-2">Completa el formulario para registrarte en tu conferencia favorita</p>
    </div>

    <!-- Formulario -->
    <form id="formRegistro" action="#" class="bg-white rounded-xl shadow-lg p-8 w-full max-w-lg space-y-6 animate-fade-in">
        <!-- Nombre -->
        <div>
            <label for="nombre" class="block mb-2 font-semibold text-gray-700">Nombre completo</label>
            <input type="text" id="nombre" name="nombre" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[color:var(--principal)]" placeholder="Tu nombre completo">
        </div>

        <!-- Correo -->
        <div>
            <label for="correo" class="block mb-2 font-semibold text-gray-700">Correo electrónico</label>
            <input type="email" id="correo" name="correo" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[color:var(--principal)]" placeholder="correo@ejemplo.com">
        </div>

        <!-- Carrera -->
        <div>
            <label for="carrera" class="block mb-2 font-semibold text-gray-700">Carrera</label>
            <select id="carrera" name="carrera" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[color:var(--principal)]">
                <option value="">Selecciona tu carrera</option>
                <option>Ingeniería en Sistemas</option>
                <option>Ingeniería Industrial</option>
                <option>Ingeniería Civil</option>
                <option>Arquitectura</option>
            </select>
        </div>

        <!-- Conferencia -->
        <div>
            <label for="conferencia" class="block mb-2 font-semibold text-gray-700">Conferencia</label>
            <select id="conferencia" name="conferencia" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-[color:var(--principal)]">
                <option value="">Selecciona una conferencia</option>
                <option>Uso de GitHub en proyectos colaborativos</option>
                <option>Introducción a Docker</option>
                <option>Configuración de servidores Linux</option>
            </select>
        </div>

        <!-- Botón Enviar -->
        <div class="text-center">
            <button type="button" id="btnRegistro" class="bg-[color:var(--principal)] hover:bg-teal-700 text-white font-bold py-3 px-6 rounded-lg transition">
                Registrarse
            </button>
        </div>
    </form>
</main>

<x-footer />

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Validaciones con SweetAlert -->
<script>
document.getElementById('btnRegistro').addEventListener('click', function () {
    const nombre = document.getElementById('nombre');
    const correo = document.getElementById('correo');
    const carrera = document.getElementById('carrera');
    const conferencia = document.getElementById('conferencia');
    const form = document.getElementById('formRegistro');

    let valid = true;

    // Reset estilos
    [nombre, correo, carrera, conferencia].forEach(input => {
        input.classList.remove('border-red-500', 'ring-2', 'ring-red-400');
    });

    function marcarError(campo) {
        campo.classList.add('border-red-500', 'ring-2', 'ring-red-400');
        valid = false;
    }

    // Validar campos
    if (nombre.value.trim() === '') marcarError(nombre);

    const regexCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|net|org|edu|gob|info|edu.ni|ni)$/;
    if (correo.value.trim() === '' || !regexCorreo.test(correo.value.trim())) marcarError(correo);

    if (carrera.value === '') marcarError(carrera);
    if (conferencia.value === '') marcarError(conferencia);

    if (valid) {
        Swal.fire({
            icon: 'success',
            title: '¡Registro exitoso!',
            text: 'Te has registrado correctamente a la conferencia.',
            confirmButtonColor: '#00A5B5'
        });
        form.reset();
    } else {
        Swal.fire({
            icon: 'warning',
            title: 'Formulario incompleto',
            text: 'Por favor completa todos los campos correctamente.',
            confirmButtonColor: '#d33'
        });
    }
});
</script>

</body>
</html>
