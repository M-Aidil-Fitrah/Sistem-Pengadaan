<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Login</button>
            </form>
            <p class="mt-4 text-center">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a></p>
        </div>
    </div>
</body>
</html>