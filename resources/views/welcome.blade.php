<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center bg-blue-50">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-blue-600 mb-4">Sistem Pengadaan Barang dan Jasa</h1>
            <p class="text-lg text-gray-700 mb-6">Kelola pengadaan barang dan jasa dengan mudah dan efisien.</p>
            <div class="space-x-4">
                <a href="{{ route('login') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Login</a>
                <a href="{{ route('register') }}" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700">Register</a>
            </div>
        </div>
    </div>
</body>
</html>