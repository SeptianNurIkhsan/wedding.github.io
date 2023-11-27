CREATE DATABASE IF NOT EXISTS undangan;

USE undangan;

CREATE TABLE IF NOT EXISTS tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    konfirmasi ENUM('Hadir', 'Tidak Hadir') NOT NULL,
    jumlah_hadir INT
);
