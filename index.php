<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Kehadiran</title>
    <link rel="stylesheet" href="cerita.css" />
</head>

<body>
    <div class="container">
        <h2>Formulir Kehadiran</h2>
        <form method="post" action="index.php">
            Nama: <input type="text" name="nama" required /><br />
            Konfirmasi Kehadiran:
            <select name="konfirmasi" required>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
            </select><br />
            Jumlah yang Hadir: <input type="number" name="jumlah_hadir" min="0" /><br />
            <input type="submit" value="Kirim" />
        </form>
    </div>
</body>

</html>

<?php
$host = "localhost"; // Ganti dengan nama host MySQL Anda
$user = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$database = "konfirmasi";


// Koneksi ke MySQL
$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses Formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $konfirmasi = $_POST["konfirmasi"];
    $jumlah_hadir = isset($_POST["jumlah_hadir"]) ? $_POST["jumlah_hadir"] : 0;

    // Insert data ke database
    $sql = "INSERT INTO tamu (nama, konfirmasi, jumlah_hadir) VALUES ('$nama', '$konfirmasi', $jumlah_hadir)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>