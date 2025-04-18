<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Item - Penyewaan Komputer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white px-6 py-4">
        <h1 class="text-2xl font-semibold">Daftar Komputer Tersedia</h1>
    </nav>

    <main class="p-6">
        <div class="bg-white rounded-xl shadow-md p-6">
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Nama Komputer</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Spesifikasi</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Harga Sewa (per hari)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">PC Gaming</td>
                        <td class="border border-gray-300 px-4 py-2">Intel i7, RTX 3060, 16GB RAM</td>
                        <td class="border border-gray-300 px-4 py-2">Rp150.000</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">2</td>
                        <td class="border border-gray-300 px-4 py-2">Laptop Office</td>
                        <td class="border border-gray-300 px-4 py-2">Intel i5, 8GB RAM, SSD 512GB</td>
                        <td class="border border-gray-300 px-4 py-2">Rp100.000</td>
                    </tr>
                    <!-- Tambahkan data lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
