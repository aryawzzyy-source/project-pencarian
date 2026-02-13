TUGAS PEMROGRAMAN INTERNET
Pencarian Data Menggunakan PHP Native dan MySQL

Nama       : Ariya Wijaya
NIM        : 20251020035
Prodi      : Teknik Informatika 2/1
Pertemuan  : 13

Deskripsi Project
Project ini merupakan aplikasi web sederhana untuk melakukan pencarian data produk menggunakan:
1. HTML
2. CSS
3. PHP
4. MySQL
5. XAMPP
Sistem memungkinkan pengguna mencari produk berdasarkan nama produk atau deskripsi menggunakan metode GET dan query LIKE dengan prepared statement untuk mencegah SQL Injection.

Database
Nama Database
db_pencarian

Nama Tabel
produk

Struktur Tabel
Field          Type           Keterangan
id             INT            Primary Key, Auto Increment
nama_produk    VARCHAR(100)   Nama produk
deskripsi      VARCHAR(2000)  Deskripsi produk
harga          INT            Harga produk

Data Dummy
Beberapa data yang digunakan dalam tabel produk:
1. Laptop ASUS          - Rp 15.000.000
2. Smartphone Samsung   - Rp 7.000.000
3. Headset Logitech     - Rp 1.200.000
4. Monitor LG           - Rp 2.500.000
5. Keyboard Mechanical  - Rp 900.000

Fitur Sistem
1. Form pencarian produk
2. Pencarian berdasarkan keyword
3. Menggunakan Prepared Statement (mysqli)
4. Menampilkan harga dalam Rupiah
5. Format harga dalam Rupiah
6. Validasi input tidak boleh kosong

Cara Menjalankan Project
1. Install dan jalankan XAMPP
2. Aktifkan Apache dan MySQL
3. Buka browser dan akses:
   http://localhost/phpmyadmin
4. Buat database dengan nama:
   db_pencarian
5. Import file:
   db_pencarian.sql
6. Simpan folder project di dalam:
   htdocs/
7. Jalankan di browser:
   http://localhost/nama_folder_project
