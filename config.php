<?php
// Informasi koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "konfirmasi";

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Membuat tabel jika belum ada
$query_create_table = "CREATE TABLE IF NOT EXISTS tamu (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        nama VARCHAR(100) NOT NULL,
                        konfirmasi ENUM('Hadir', 'Tidak Hadir') NOT NULL,
                        jumlah_hadir INT
                    )";

if ($koneksi->query($query_create_table) === TRUE) {
    echo "Tabel berhasil dibuat atau sudah ada.";
} else {
    echo "Error: " . $koneksi->error;
}

// Memproses data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $konfirmasi = $_POST["konfirmasi"];
    $jumlah_hadir = isset($_POST["jumlah_hadir"]) ? $_POST["jumlah_hadir"] : null;

    // Menyimpan data ke database
    $query_insert = "INSERT INTO tamu (nama, konfirmasi, jumlah_hadir) VALUES ('$nama', '$konfirmasi', $jumlah_hadir)";

    if ($koneksi->query($query_insert) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $koneksi->error;
    }
}

// Menampilkan data dari database
$query_select = "SELECT * FROM tamu";
$result = $koneksi->query($query_select);

if ($result->num_rows > 0) {
    echo "<h2>Data Tamu:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nama</th><th>Konfirmasi</th><th>Jumlah Hadir</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['nama']}</td><td>{$row['konfirmasi']}</td><td>{$row['jumlah_hadir']}</td></tr>";
    }

    echo "</table>";
} else {
    echo "Belum ada data tamu.";
}

// Menutup koneksi
$koneksi->close();
?>