{{-- <x-slider title="Soporte">
    hola soporte
</x-slider> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wise UI Clone</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Sidebar for Desktop -->
        <nav class="hidden md:flex flex-col w-64 bg-white p-4 space-y-4 shadow-md">
            <a href="#" class="text-lg font-semibold text-green-700">Wise</a>
            <a href="#" class="text-gray-700 hover:text-green-700">Home</a>
            <a href="#" class="text-gray-700 hover:text-green-700">Card</a>
            <a href="#" class="text-gray-700 hover:text-green-700">Payments</a>
            <a href="#" class="text-gray-700 hover:text-green-700">Recipients</a>
            <a href="#" class="text-gray-700 hover:text-green-700">Earn MX$1,400</a>
        </nav>
        
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-bold">Welcome to Wise</h1>
            <button class="bg-green-500 text-white px-4 py-2 rounded mt-4">Send Money</button>
            <div class="bg-white shadow-md p-4 rounded mt-6">
                <h2 class="text-lg font-semibold">Transfer Calculator</h2>
                <p class="text-gray-700">1 USD = 20.2599 MXN</p>
            </div>
        </div>
    </div>
    
    <!-- Mobile Bottom Navigation -->
    <div class="md:hidden fixed bottom-0 left-0 right-0 bg-white shadow-md flex justify-around p-4">
        <a href="#" class="text-green-700 flex flex-col items-center">
            <span>🏠</span>
            <span class="text-xs">Home</span>
        </a>
        <a href="#" class="text-gray-700 flex flex-col items-center">
            <span>💳</span>
            <span class="text-xs">Card</span>
        </a>
        <a href="#" class="text-gray-700 flex flex-col items-center">
            <span>📩</span>
            <span class="text-xs">Payments</span>
        </a>
        <a href="#" class="text-gray-700 flex flex-col items-center">
            <span>👤</span>
            <span class="text-xs">Recipients</span>
        </a>
    </div>
</body>
</html>