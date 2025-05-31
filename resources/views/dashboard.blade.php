@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-blue-100 p-4 rounded-lg">
            <h2 class="text-lg font-semibold">Total Barang</h2>
            <p class="text-2xl">{{ \App\Models\Barang::count() }}</p>
        </div>
        <div class="bg-green-100 p-4 rounded-lg">
            <h2 class="text-lg font-semibold">Total Vendor</h2>
            <p class="text-2xl">{{ \App\Models\Vendor::count() }}</p>
        </div>
        <div class="bg-yellow-100 p-4 rounded-lg">
            <h2 class="text-lg font-semibold">Pengadaan Aktif</h2>
            <p class="text-2xl">{{ \App\Models\Pengadaan::where('status', 'pending')->count() }}</p>
        </div>
    </div>
</div>
@endsection