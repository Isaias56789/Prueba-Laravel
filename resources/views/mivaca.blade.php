<x-navbar>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Botón</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <table border="1" class="border-collapse border border-black mx-auto mt-10">
        <tr>
            <td colspan="2" class="p-4 text-center bg-gray-300">
                Mi imagen
            </td>
        </tr>
        <tr>
            <td class="p-4">
                <ul>
                    <li><a href='/ariel'>Inicio</a></li>
                    <li><a href='/gatitos'>Gatitos</a></li>
                    <li><a href='/vaca'>Capibara</a></li>
                    <li><a href='/perro'>Loros</a></li>
                </ul>
            </td>
            <td class="p-4">
                <h1 class=titulo>Mis vacas son muchas</h1>

                <button type="button" class="relative inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">
                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                    <span class="sr-only">Notifications</span>
                    Messages
                    <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">8</div>
                </button>
            </td>
        </tr>
    </table>

</body>
</html>
</x-navbar>