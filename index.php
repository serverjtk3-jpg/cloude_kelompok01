<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoMBG - Kelola Limbah Jadi Berkah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-green-600 p-4 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold italic">EcoMBG</h1>
            <ul class="flex gap-4">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">Transaksi</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto mt-10 p-5">
        <div class="grid md:grid-cols-2 gap-10">
            <!-- Form Input -->
            <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-green-500">
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">Setor Limbah MBG</h2>
                <form action="proses_setor.php" method="POST">
                    <div class="mb-4">
                        <label class="block text-gray-600 mb-2">Berat Limbah (Kg)</label>
                        <input type="number" name="berat" required class="w-full border-2 border-gray-200 p-3 rounded-lg focus:border-green-500 outline-none" placeholder="Masukkan berat...">
                    </div>
                    <div class="p-4 bg-green-50 rounded-lg mb-6">
                        <p class="text-sm text-green-800">Estimasi Pendapatan: <br>
                        <span class="text-xl font-bold">Rp 1.000 / Kg</span></p>
                    </div>
                    <button type="submit" class="w-full bg-green-600 text-white font-bold py-3 rounded-lg hover:bg-green-700 transition">
                        Ajukan Penjualan
                    </button>
                </form>
            </div>

            <!-- Info Jasa -->
            <div class="flex flex-col justify-center">
                <h3 class="text-3xl font-bold text-green-700 mb-4">Solusi Limbah Makan Siang Bergizi</h3>
                <p class="text-gray-600 leading-relaxed">
                    Kami menerima limbah organik sisa program MBG untuk diolah kembali menjadi pakan ternak berkualitas tinggi. 
                    Dapatkan penghasilan tambahan sekaligus menjaga lingkungan.
                </p>
            </div>
        </div>
    </div>
</body>
</html>