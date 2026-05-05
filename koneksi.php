<?php
// Mengambil alamat database otomatis dari Railway
$db_url = getenv('DATABASE_URL');

try {
    if ($db_url) {
        // Jika sedang jalan di server Railway
        $pdo = new PDO($db_url);
    } else {
        // Jika sedang kamu tes di laptop (Gunakan data dari Railway kamu)
        $host = 'tramway.proxy.rlwy.net';
        $port = '29907';
        $user = 'postgres';
        $pass = 'ZtwzTCWZPOECNLpyCJXVWQHbstGcdBiz';
        $dbname = 'railway';

        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
        $pdo = new PDO($dsn, $user, $pass);
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi ke Database Gagal: " . $e->getMessage());
}
?>