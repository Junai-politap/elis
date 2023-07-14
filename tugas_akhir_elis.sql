-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Jul 2023 pada 09.22
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir_elis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` char(36) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `no_hp` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `status_dosen` varchar(255) DEFAULT NULL,
  `institusi` varchar(255) DEFAULT NULL,
  `program_studi` varchar(255) DEFAULT NULL,
  `jenjang_pendidikan` varchar(255) DEFAULT NULL,
  `jabatan_akademik` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `bidang_keahlian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nidn`, `email`, `nama`, `nik`, `no_hp`, `username`, `password`, `foto`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `status_dosen`, `institusi`, `program_studi`, `jenjang_pendidikan`, `jabatan_akademik`, `alamat`, `bidang_keahlian`, `created_at`, `updated_at`) VALUES
('99a47e95-9de4-45df-9c61-9a91032bf23a', '9900007182', 'ar-razy@gamil.com', 'Ar-Razy  Muhammad', '198701142019031007', NULL, '9900007182', '$2y$10$gAvR4yfEaKxK6/fBWLHrgOR6pYFbm7LGXo3ukhlL5KSackj6uG/Ii', NULL, 'Laki-Laki', 'Pontianak', '2023-07-14', 'Dosen Tetap', 'Politeknik Negeri Ketapang', NULL, NULL, NULL, NULL, NULL, '2023-07-13 23:56:14', '2023-07-14 01:34:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian_usulanbaru`
--

CREATE TABLE `penelitian_usulanbaru` (
  `id` int NOT NULL,
  `id_pegawai` varchar(255) DEFAULT NULL,
  `nidn` varchar(255) NOT NULL,
  `status_pegawai` varchar(255) NOT NULL,
  `tanggung_jawab` varchar(255) NOT NULL,
  `tahun_usulan` varchar(255) NOT NULL,
  `tahun_pelaksanaan` varchar(255) NOT NULL,
  `status` int DEFAULT NULL,
  `judul_penelitian` varchar(255) DEFAULT NULL,
  `tkt_new` varchar(255) DEFAULT NULL,
  `end_tkt` varchar(255) DEFAULT NULL,
  `skema_penelitian` varchar(255) DEFAULT NULL,
  `rumpun_ilmu1` varchar(255) DEFAULT NULL,
  `rumpun_ilmu2` varchar(255) DEFAULT NULL,
  `rumpun_ilmu3` varchar(255) DEFAULT NULL,
  `bidang_penelitian` varchar(255) DEFAULT NULL,
  `bidang_prn` varchar(255) DEFAULT NULL,
  `tema_penelitian` varchar(255) DEFAULT NULL,
  `topik_penelitian` varchar(255) DEFAULT NULL,
  `lama_kegiatan` varchar(255) DEFAULT NULL,
  `nama_gelar1` varchar(255) DEFAULT NULL,
  `kualifikasi1` varchar(255) DEFAULT NULL,
  `bidang_keahlian1` varchar(255) DEFAULT NULL,
  `peran1` varchar(255) DEFAULT NULL,
  `tugas_penelitian1` varchar(255) DEFAULT NULL,
  `nama_gelar2` varchar(255) DEFAULT NULL,
  `kualifikasi2` varchar(255) DEFAULT NULL,
  `bidang_keahlian2` varchar(255) DEFAULT NULL,
  `peran2` varchar(255) DEFAULT NULL,
  `tugas_penelitian2` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `dokumen2` varchar(255) DEFAULT NULL,
  `dokumen3` varchar(255) DEFAULT NULL,
  `jumlah_pendanaan` varchar(255) DEFAULT NULL,
  `nama_mitra` varchar(255) DEFAULT NULL,
  `bidang_mitra` varchar(255) DEFAULT NULL,
  `alamat_mitra` varchar(255) DEFAULT NULL,
  `dokumen_mitra` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penelitian_usulanbaru`
--

INSERT INTO `penelitian_usulanbaru` (`id`, `id_pegawai`, `nidn`, `status_pegawai`, `tanggung_jawab`, `tahun_usulan`, `tahun_pelaksanaan`, `status`, `judul_penelitian`, `tkt_new`, `end_tkt`, `skema_penelitian`, `rumpun_ilmu1`, `rumpun_ilmu2`, `rumpun_ilmu3`, `bidang_penelitian`, `bidang_prn`, `tema_penelitian`, `topik_penelitian`, `lama_kegiatan`, `nama_gelar1`, `kualifikasi1`, `bidang_keahlian1`, `peran1`, `tugas_penelitian1`, `nama_gelar2`, `kualifikasi2`, `bidang_keahlian2`, `peran2`, `tugas_penelitian2`, `dokumen`, `dokumen2`, `dokumen3`, `jumlah_pendanaan`, `nama_mitra`, `bidang_mitra`, `alamat_mitra`, `dokumen_mitra`, `created_at`, `updated_at`) VALUES
(1, NULL, '25012002', 'Aktif', 'dosen', '2022', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-13 01:54:40', '2023-07-13 01:54:40'),
(2, NULL, '25012002', 'Aktif', 'dosen', '2022', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-13 08:53:26', '2023-07-13 08:53:26'),
(3, NULL, '25012002', 'Aktif', 'dosen', '2022', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-13 19:33:41', '2023-07-13 19:33:41'),
(4, NULL, '25012002', 'Aktif', 'dosen', '2022', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-13 19:37:49', '2023-07-13 19:37:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian_usulanbaru`
--

CREATE TABLE `pengabdian_usulanbaru` (
  `id` char(36) NOT NULL,
  `id_pegawai` varchar(255) DEFAULT NULL,
  `nidn` varchar(255) NOT NULL,
  `status_pegawai` varchar(255) NOT NULL,
  `tanggung_jawab` varchar(255) NOT NULL,
  `tahun_usulan` varchar(255) NOT NULL,
  `tahun_pelaksanaan` varchar(255) NOT NULL,
  `status` int DEFAULT NULL,
  `judul_penelitian` varchar(255) DEFAULT NULL,
  `tkt_new` varchar(255) DEFAULT NULL,
  `end_tkt` varchar(255) DEFAULT NULL,
  `skema_penelitian` varchar(255) DEFAULT NULL,
  `rumpun_ilmu1` varchar(255) DEFAULT NULL,
  `rumpun_ilmu2` varchar(255) DEFAULT NULL,
  `rumpun_ilmu3` varchar(255) DEFAULT NULL,
  `bidang_penelitian` varchar(255) DEFAULT NULL,
  `bidang_prn` varchar(255) DEFAULT NULL,
  `tema_penelitian` varchar(255) DEFAULT NULL,
  `topik_penelitian` varchar(255) DEFAULT NULL,
  `lama_kegiatan` varchar(255) DEFAULT NULL,
  `nama_gelar1` varchar(255) DEFAULT NULL,
  `kualifikasi1` varchar(255) DEFAULT NULL,
  `bidang_keahlian1` varchar(255) DEFAULT NULL,
  `peran1` varchar(255) DEFAULT NULL,
  `tugas_penelitian1` varchar(255) DEFAULT NULL,
  `nama_gelar2` varchar(255) DEFAULT NULL,
  `kualifikasi2` varchar(255) DEFAULT NULL,
  `bidang_keahlian2` varchar(255) DEFAULT NULL,
  `peran2` varchar(255) DEFAULT NULL,
  `tugas_penelitian2` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `dokumen2` varchar(255) DEFAULT NULL,
  `dokumen3` varchar(255) DEFAULT NULL,
  `jumlah_pendanaan` varchar(255) DEFAULT NULL,
  `nama_mitra` varchar(255) DEFAULT NULL,
  `bidang_mitra` varchar(255) DEFAULT NULL,
  `alamat_mitra` varchar(255) DEFAULT NULL,
  `dokumen_mitra` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` char(36) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `jenis_kelamin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('1', 'admin', 'admin@gmail.com', 'Admin P3KM', 'Laki-Laki', '$2y$10$u69YwhTcBQ6wWSKVhQ.hUOYk8y7mPRdPSovfmiIOAyHfG1AtZyT4i', 'm4bPiwZI6yaIiWGMCoHRKWSumuHag9dVhKNHmwMx1VdYqHEbwd5oiWrdmsmN', '2023-05-31 07:31:25', '2023-07-13 23:53:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penelitian_usulanbaru`
--
ALTER TABLE `penelitian_usulanbaru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengabdian_usulanbaru`
--
ALTER TABLE `pengabdian_usulanbaru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penelitian_usulanbaru`
--
ALTER TABLE `penelitian_usulanbaru`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
