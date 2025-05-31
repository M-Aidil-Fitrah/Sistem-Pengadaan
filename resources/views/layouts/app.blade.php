<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengadaan Barang dan Jasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-xl font-bold">Sistem Pengadaan</a>
            <div class="space-x-4">
                @auth
                    <a href="{{ route('barang.index') }}" class="hover:underline">Barang</a>
                    <a href="{{ route('vendor.index') }}" class="hover:underline">Vendor</a>
                    <a href="{{ route('pengadaan.index') }}" class="hover:underline">Pengadaan</a>
                    <a href="{{ route('laporan.index') }}" class="hover:underline">Laporan</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:underline">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:underline">Login</a>
                    <a href="{{ route('register') }}" class="hover:underline">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-8 p-4">
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>