<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Penyewaan Komputer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white px-6 py-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Dashboard Penyewaan Komputer</h1>
            <a href="/login" class="text-sm underline hover:text-gray-200">Logout</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto p-6">
        <!-- Ringkasan -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="text-lg text-gray-600">Total Komputer</h3>
                <p class="text-3xl font-bold text-blue-600">20</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="text-lg text-gray-600">Tersedia</h3>
                <p class="text-3xl font-bold text-green-600">15</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="text-lg text-gray-600">Disewa</h3>
                <p class="text-3xl font-bold text-red-600">5</p>
            </div>
        </div>

        <!-- Navigasi Cepat -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <a href="/listitem" class="bg-white p-6 rounded-lg shadow hover:bg-gray-50 transition">
                <h4 class="text-xl font-semibold text-gray-800 mb-2">📋 Lihat Daftar Komputer</h4>
                <p class="text-gray-600">Lihat semua komputer yang tersedia untuk disewa</p>
            </a>
            <a href="#" class="bg-white p-6 rounded-lg shadow opacity-60 cursor-not-allowed">
                <h4 class="text-xl font-semibold text-gray-800 mb-2">➕ Tambah Data Komputer</h4>
                <p class="text-gray-600">Fitur ini akan tersedia nanti</p>
            </a>
        </div>

        <!-- Informasi Admin -->
        <div class="mt-10 bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-2 text-gray-800">Informasi</h3>
            <ul class="list-disc list-inside text-gray-600">
                <li>Gunakan menu navigasi di atas untuk mengelola data penyewaan.</li>
                <li>Pastikan logout jika selesai menggunakan aplikasi.</li>
                <li>Data disimpan sementara (belum terkoneksi ke database).</li>
            </ul>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center py-4 shadow-inner text-sm text-gray-500">
        &copy; {{ date('Y') }} Penyewaan Komputer Nabila. All rights reserved.
    </footer>

</body>
</html>
