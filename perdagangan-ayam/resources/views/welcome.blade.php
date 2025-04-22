<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center">
        <img src="{{ asset('logo-dashboardayam.png') }}" alt="Foto Peternakan" class="mx-auto mb-4 w-48 h-48 object-cover rounded-full shadow-lg">
        <h1 class="text-4xl font-bold mb-6">Selamat Datang di Peternakan Ayam</h1>
        <a href="{{ route('profile.edit') }}" 
           class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600 transition duration-300">
            Go to Profile
        </a>
    </div>
</body>
</html>

