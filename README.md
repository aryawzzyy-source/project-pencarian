# 📌 TUGAS PEMROGRAMAN INTERNET
## 🔎 Sistem Pencarian Produk Menggunakan PHP Native dan MySQL

---

## 👤 Identitas Mahasiswa

| Keterangan | Data |
|------------|------|
| Nama | Ariya Wijaya |
| NIM | 20251020035 |
| Program Studi | Teknik Informatika 2/1 |
| Mata Kuliah | Pemrograman Internet |
| Pertemuan | 13 |

---

## 📖 Deskripsi Project

Project ini merupakan aplikasi web sederhana untuk melakukan **pencarian data produk** berbasis web menggunakan:

- HTML
- CSS
- PHP Native
- MySQL
- XAMPP

Sistem memungkinkan pengguna mencari produk berdasarkan **nama produk** atau **deskripsi produk** menggunakan metode `GET`.

Pencarian menggunakan operator `LIKE` dan **Prepared Statement (mysqli)** untuk mencegah SQL Injection.

Project ini juga mendukung penyimpanan **gambar produk** yang tersimpan dalam folder `uploads/produk/`.

---

## 🗄 Struktur Database

### 📌 Nama Database

db_pencarian

### 📌 Nama Tabel

produk


### 📌 Struktur Tabel

| Field        | Type           | Keterangan |
|--------------|---------------|------------|
| id           | INT           | Primary Key, Auto Increment |
| nama_produk  | VARCHAR(100)  | Nama produk |
| deskripsi    | VARCHAR(2000) | Deskripsi produk |
| harga        | INT           | Harga produk |
| foto         | VARCHAR(255)  | Nama file gambar produk (nullable) |

---

## 📝 Data Dummy

| No | Nama Produk | Harga |
|----|-------------|--------|
| 1 | Laptop ASUS | Rp 15.000.000 |
| 2 | Smartphone Samsung | Rp 7.000.000 |
| 3 | Headset Logitech | Rp 1.200.000 |
| 4 | Monitor LG | Rp 2.500.000 |
| 5 | Keyboard Mechanical | Rp 900.000 |

---

## 🔎 Fitur Sistem

- ✅ Form pencarian produk
- ✅ Pencarian berdasarkan keyword
- ✅ Prepared Statement (mysqli)
- ✅ Menampilkan hasil pencarian dinamis
- ✅ Format harga dalam Rupiah
- ✅ Validasi input tidak boleh kosong
- ✅ Mendukung penyimpanan gambar produk

---

## 📂 Struktur Folder Project

project-pencarian/
│
├── index.html
├── search.php
├── db_pencarian.sql
├── uploads/
│ └── produk/
└── README.md

## ⚙ Cara Instalasi & Menjalankan Project

### 1️⃣ Install XAMPP
Download dan install dari:

https://www.apachefriends.org/

### 2️⃣ Jalankan Server
Aktifkan:
- Apache
- MySQL

### 3️⃣ Import Database

1. Buka browser:

http://localhost/phpmyadmin

2. Buat database baru:

db_pencarian

3. Klik tab **Import**
4. Upload file:

db_pencarian


### 4️⃣ Jalankan Project

1. Simpan folder project di:

c:/xampp/htdocs/

2. Buka browser:

http://localhost/pencarian


---

## 🔐 Keamanan Sistem

Sistem menggunakan:

- Prepared Statement (mysqli)
- Validasi input
- Fungsi `htmlspecialchars()` untuk mencegah XSS
- Struktur database terorganisir dengan Primary Key

## 📌 Kesimpulan

Aplikasi pencarian produk berhasil diimplementasikan menggunakan PHP Native dan MySQL dengan sistem yang:

- Dinamis
- Aman
- Terstruktur dengan baik
- Mendukung pencarian dan penyimpanan gambar

Project ini membantu memahami konsep:
- Koneksi database dengan PHP
- Query pencarian menggunakan LIKE
- Prepared Statement
- Integrasi HTML, CSS, PHP, dan MySQL

---

✍ Dibuat untuk memenuhi tugas Mata Kuliah Pemrograman Internet.
