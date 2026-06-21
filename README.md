# 📦 Sales Order Management System

Sales Order Management System adalah aplikasi berbasis web yang dikembangkan menggunakan Framework CodeIgniter 3 untuk membantu proses pengelolaan penjualan pada perusahaan distribusi produk elektronik.

Sistem ini dirancang untuk mempermudah pengelolaan data produk, pelanggan, sales order, stok barang, serta laporan penjualan dalam satu platform yang terintegrasi. Dengan adanya sistem ini, proses pencatatan transaksi menjadi lebih cepat, akurat, dan efisien dibandingkan dengan pencatatan manual.

---

## 🎯 Tujuan Sistem

* Mempermudah pengelolaan data produk dan stok.
* Mempermudah pengelolaan data pelanggan.
* Membantu sales dalam membuat sales order.
* Memantau transaksi penjualan secara terpusat.
* Menyediakan laporan penjualan yang mudah diakses oleh manajemen.

---

## 👥 Hak Akses Pengguna

### 🔑 Admin

Admin memiliki akses penuh terhadap sistem, meliputi:

* Mengelola data produk
* Menambah stok produk
* Mengelola data pelanggan
* Mengelola sales order
* Mengubah status order
* Melihat seluruh laporan
* Mengakses dashboard

### 🛒 Sales

Sales bertugas melakukan transaksi penjualan dan hanya dapat mengakses data miliknya sendiri.

Fitur yang tersedia:

* Membuat sales order
* Melihat sales order miliknya
* Melihat detail transaksi
* Mengakses dashboard

### 📊 Manager

Manager berfokus pada pemantauan performa penjualan.

Fitur yang tersedia:

* Melihat dashboard
* Melihat laporan produk
* Melihat laporan per sales
* Melihat laporan per periode

---

## ✨ Fitur Utama

### Dashboard

Menampilkan ringkasan informasi penting seperti:

* Total Produk
* Total Pelanggan
* Total Sales Order
* Total Pendapatan
* Produk dengan stok terendah
* Order terbaru

### Manajemen Produk

* Tambah Produk
* Edit Produk
* Hapus Produk
* Tambah Stok Produk

### Manajemen Pelanggan

* Tambah Pelanggan
* Edit Pelanggan
* Hapus Pelanggan

### Sales Order

* Generate kode order otomatis
* Validasi stok produk
* Perhitungan total harga otomatis
* Update status order
* Detail transaksi

### Laporan

* Laporan Produk
* Laporan Per Sales
* Laporan Penjualan Periode
* Cetak Laporan

---

## 🛠️ Teknologi Yang Digunakan

| Teknologi     | Keterangan         |
| ------------- | ------------------ |
| PHP 7.3       | Bahasa Pemrograman |
| CodeIgniter 3 | Framework Backend  |
| MySQL         | Database           |
| Bootstrap 4   | User Interface     |
| SB Admin 2    | Dashboard Template |
| Font Awesome  | Icon Library       |
| XAMPP         | Web Server         |

---

## 🗄️ Struktur Database

Sistem menggunakan beberapa tabel utama:

* users
* sales
* produk
* pelanggan
* sales_order

Relasi antar tabel digunakan untuk menghubungkan data pelanggan, produk, sales, dan transaksi penjualan.

---

## 📸 Tampilan Sistem

### Login

![Login](screenshots/login.jpeg)

### Dashboard

![Dashboard](screenshots/dashboard.jpeg)

### Data Produk

![Produk](screenshots/produk.jpeg)

### Data Pelanggan

![Pelanggan](screenshots/pelanggan.jpeg)

### Sales Order

![Sales Order](screenshots/sales_order.jpeg)

### Laporan

![Laporan](screenshots/laporan.jpeg)

---

## 🔑 Akun Demo

### Admin

Username : admin

Password : admin123

### Sales

Username : tina

Password : tina123

### Manager

Username : lulu

Password : lulu123

> Sesuaikan dengan data yang tersedia pada database.

---


## 👨‍🎓 Pengembang

Nama : Lukiyatul Paroh

Program Studi : Sistem Informasi Manajemen

Mata Kuliah : Pemrograman Web II

Tahun : 2026
