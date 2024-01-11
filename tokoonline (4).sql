-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2024 pada 19.50
-- Versi server: 10.4.28-MariaDB-log
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `ID_Detail_Pesanan` int(255) NOT NULL,
  `ID_Pesanan` int(255) DEFAULT NULL,
  `ID_Produk` int(255) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL,
  `Subtotal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`ID_Detail_Pesanan`, `ID_Pesanan`, `ID_Produk`, `Jumlah`, `Subtotal`) VALUES
(1, 1, 1, 2, '2400.00'),
(2, 2, 3, 1, '200.00'),
(3, 3, 5, 3, '300.00'),
(4, 4, 2, 2, '1600.00'),
(5, 5, 4, 5, '250.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, 'create_products_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_Pelanggan` int(255) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `Nomor_Telepon` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`ID_Pelanggan`, `Nama`, `Alamat`, `Nomor_Telepon`, `Email`) VALUES
(1, 'John Doe', 'Jl. Pahlawan No. 123', '081234567890', 'john.doe@example.com'),
(2, 'Jane Smith', 'Jl. Merdeka No. 456', '087654321098', 'jane.smith@example.com'),
(3, 'Bob Johnson', 'Jl. Suka Makmur No. 789', '081112233445', 'bob.johnson@example.com'),
(4, 'Alice Brown', 'Jl. Damai Sejahtera No. 101', '088877766655', 'alice.brown@example.com'),
(5, 'Charlie Davis', 'Jl. Maju Terus No. 555', '089988877766', 'charlie.davis@example.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `ID_Pengiriman` int(255) NOT NULL,
  `ID_Pesanan` int(255) DEFAULT NULL,
  `Metode_Pengiriman` varchar(255) DEFAULT NULL,
  `Alamat_Pengiriman` varchar(255) DEFAULT NULL,
  `Status_Pengiriman` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`ID_Pengiriman`, `ID_Pesanan`, `Metode_Pengiriman`, `Alamat_Pengiriman`, `Status_Pengiriman`) VALUES
(1, 1, 'JNE', 'Jl. Kirim Barang No. 1', 'Dalam Pengiriman'),
(2, 2, 'GoSend', 'Jl. Antar Barang No. 2', 'Selesai'),
(3, 3, 'J&T', 'Jl. Kirim Express No. 3', 'Dalam Pengiriman'),
(4, 4, 'Pos Indonesia', 'Jl. Pos No. 4', 'Selesai'),
(5, 5, 'TIKI', 'Jl. Pengiriman Cepat No. 5', 'Dalam Pengiriman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `ID_Pesanan` int(255) NOT NULL,
  `ID_Pelanggan` int(255) DEFAULT NULL,
  `Tanggal_Pemesanan` date DEFAULT NULL,
  `Total_Harga` varchar(255) DEFAULT NULL,
  `Status_Pesanan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`ID_Pesanan`, `ID_Pelanggan`, `Tanggal_Pemesanan`, `Total_Harga`, `Status_Pesanan`) VALUES
(1, 1, '2023-01-01', '2400.00', 'Dalam Proses'),
(2, 2, '2023-01-02', '1600.00', 'Selesai'),
(3, 3, '2023-01-03', '400.00', 'Dalam Proses'),
(4, 4, '2023-01-04', '800.00', 'Selesai'),
(5, 5, '2023-01-05', '1200.00', 'Dalam Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `ID_Produk` int(255) NOT NULL,
  `Nama_Produk` varchar(255) DEFAULT NULL,
  `Harga` varchar(255) DEFAULT NULL,
  `Stok` int(255) DEFAULT NULL,
  `Deskripsi` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`ID_Produk`, `Nama_Produk`, `Harga`, `Stok`, `Deskripsi`, `updated_at`, `created_at`) VALUES
(1, 'Laptop XYZ', '1200.00', 10, 'Laptop kelas atas dengan spesifikasi tinggi.', NULL, NULL),
(2, 'Smartphone ABC', '800.00', 15, 'Smartphone canggih dengan kamera berkualitas.', NULL, NULL),
(3, 'Printer Inkjet', '200.00', 5, 'Printer warna berkualitas tinggi.', NULL, NULL),
(4, 'Mouse Gaming', '50.00', 30, 'Mouse khusus untuk gaming.', NULL, NULL),
(5, 'External Hard Drive', '100.00', 12, 'Hard drive eksternal 1TB.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`ID_Detail_Pesanan`),
  ADD KEY `ID_Pesanan` (`ID_Pesanan`),
  ADD KEY `ID_Produk` (`ID_Produk`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`ID_Pengiriman`),
  ADD KEY `ID_Pesanan` (`ID_Pesanan`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`ID_Pesanan`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_Produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`ID_Pesanan`) REFERENCES `pesanan` (`ID_Pesanan`),
  ADD CONSTRAINT `detail_pesanan_ibfk_2` FOREIGN KEY (`ID_Produk`) REFERENCES `produk` (`ID_Produk`);

--
-- Ketidakleluasaan untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`ID_Pesanan`) REFERENCES `pesanan` (`ID_Pesanan`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `pelanggan` (`ID_Pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
