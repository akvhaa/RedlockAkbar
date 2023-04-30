CREATE DATABASE Redlock;

USE Redlock

CREATE TABLE users (
    ID INT PRIMARY KEY,
    Nama VARCHAR(255),
    Alamat VARCHAR(255),
    Jabatan VARCHAR(255)
);

INSERT INTO users VALUES
(1, 'Simon', 'Tangerang', 'Ketua'),
(2, 'Peter', 'Surabaya', 'Wakil Ketua'),
(3, 'Jakob', 'Kupang', 'Sekretaris'),
(4, 'Bedeus', 'Bali', 'Bendahara'),
(5, 'Yohan', 'Bekasi', 'Asisten Sekretaris'),
(6, 'Filip', 'Depok', 'Seksi Kedisplinan'),
(7, 'Bart', 'Bekasi', 'Seksi Keamanan'),
(8, 'Tomas', 'Tebet', 'Seksi Acara'),
(9, 'Yuda', 'Kemang', 'Seksi Konsumsi'),
(10, 'Iskar', 'Tambun', 'Seksi Perlengkapan');


