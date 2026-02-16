# 📌 TUGAS PEMROGRAMAN INTERNET  
## 🔎 Sistem Pencarian Produk Menggunakan PHP Native dan MySQL

---

## 📖 Deskripsi Project

Project ini merupakan implementasi **Sistem Pencarian Data Produk** berbasis web menggunakan:

- HTML5  
- CSS3  
- PHP Native  
- MySQL  
- XAMPP  

Aplikasi memungkinkan pengguna melakukan pencarian produk berdasarkan **nama produk** atau **deskripsi produk** menggunakan metode `GET`.

Proses pencarian memanfaatkan:

- Operator SQL `LIKE`
- Wildcard `%`
- **Prepared Statement (mysqli)** untuk mencegah SQL Injection

Sistem ini juga mendukung penyimpanan gambar produk dalam folder:

```
uploads/produk/
```

---

## 🗄 Struktur Database

### 📌 Nama Database
```
db_pencarian
```

### 📌 Nama Tabel
```
produk
```

### 📌 Struktur Tabel

| Field        | Type           | Keterangan |
|--------------|---------------|------------|
| id           | INT           | Primary Key, Auto Increment |
| nama_produk  | VARCHAR(100)  | Nama produk (NOT NULL) |
| deskripsi    | VARCHAR(2000) | Deskripsi produk |
| harga        | INT           | Harga produk |
| foto         | VARCHAR(255)  | Nama file gambar (nullable) |

---

## 📝 Query Insert Data Dummy

```sql
INSERT INTO produk (nama_produk, deskripsi, harga) VALUES
('Laptop ASUS', 'Laptop gaming dengan spesifikasi tinggi', 15000000),
('Smartphone Samsung', 'Smartphone dengan kamera terbaik', 7000000),
('Headset Logitech', 'Headset gaming dengan suara jernih', 1200000),
('Monitor LG', 'Monitor LED 24 inci Full HD', 2500000),
('Keyboard Mechanical', 'Keyboard dengan switch Cherry MX', 900000);
```

---

## 🔎 Fitur Sistem

- ✅ Form pencarian produk
- ✅ Pencarian berdasarkan keyword
- ✅ Partial match menggunakan LIKE
- ✅ Prepared Statement (mysqli)
- ✅ Menampilkan hasil pencarian secara dinamis
- ✅ Format harga dalam Rupiah (`number_format`)
- ✅ Validasi input tidak boleh kosong
- ✅ Sanitasi output menggunakan `htmlspecialchars()`

---

## 📂 Struktur Folder Project

```
pencarian/
│
├── index.html
├── search.php
├── uploads/
│   └── produk/
└── README.md
```

---

## ⚙ Cara Instalasi & Menjalankan Project

### 1️⃣ Install XAMPP
Download dari:
```
https://www.apachefriends.org/
```

### 2️⃣ Jalankan Server
Aktifkan:
- Apache  
- MySQL  

### 3️⃣ Import Database

1. Buka:
```
http://localhost/phpmyadmin
```

2. Buat database:
```
db_pencarian
```

3. Klik tab **SQL**
4. Jalankan script CREATE TABLE dan INSERT data dummy

### 4️⃣ Jalankan Project

1. Simpan folder project di:
```
C:/xampp/htdocs/
```

2. Akses melalui browser:
```
http://localhost/project-pencarian/
```

---

## 🔐 Keamanan Sistem

Sistem menerapkan praktik keamanan dasar:

- Prepared Statement untuk mencegah SQL Injection  
- Validasi input pengguna  
- `htmlspecialchars()` untuk mencegah XSS  
- Query terstruktur dan aman  
- Koneksi database menggunakan mysqli  

---

## 📌 Konsep yang Dipelajari

Project ini membantu memahami:

- Konsep Database Relasional  
- Perintah SQL (SELECT dengan LIKE)  
- Prepared Statement  
- Integrasi HTML, CSS, dan PHP  
- Metode GET dalam pengiriman data  
- Format angka menggunakan `number_format()`  
- Keamanan dasar aplikasi web  

---

## 📌 Kesimpulan

Aplikasi pencarian produk berhasil diimplementasikan menggunakan PHP Native dan MySQL dengan sistem yang:

- Dinamis  
- Aman  
- Terstruktur  
- Sesuai dengan materi Pertemuan 13  

Project ini memperkuat pemahaman tentang pencarian data berbasis web dan pengamanan query menggunakan prepared statement.

---

✍ Dibuat untuk memenuhi tugas Mata Kuliah **Pemrograman Internet – Pertemuan 13**
