<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pencarian";
$conn = new mysqli($servername, $username, $password, $dbname);
// Cek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
// Ambil keyword dari form pencarian
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hasil Pencarian</title>
  <style>
    /* Styles sama seperti sebelumnya, bisa di-copy dari file utama */
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f7f7f7;
    }

    .result {
      max-width: 600px;
      margin: 0 auto;
    }

    .product {
      background-color: white;
      padding: 15px;
      margin-bottom: 10px;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgb(0 0 0 / 0.1);
    }

    .product h3 {
      margin: 0 0 10px 0;
    }

    a.back {
      display: inline-block;
      margin-bottom: 20px;
      text-decoration: none;
      color: #007bff;
    }

    a.back:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="result">
    <a href="index.html" class="back">&laquo; Kembali ke Pencarian</a>
    <h2>Hasil Pencarian untuk: "<?php echo htmlspecialchars($keyword); ?>"</h2>
    <?php
    if ($keyword != '') {
      // Query pencarian menggunakan LIKE untuk nama_produk dan deskripsi
      $sql = "SELECT * FROM produk WHERE nama_produk LIKE ? OR deskripsi LIKE
?";
      $stmt = $conn->prepare($sql);
      // Menambahkan wildcard % untuk pencarian partial match
      $searchTerm = "%" . $keyword . "%";
      $stmt->bind_param("ss", $searchTerm, $searchTerm);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows > 0) {
        // Tampilkan hasil pencarian
        while ($row = $result->fetch_assoc()) {
          echo "<div class='product'>";

          if (!empty($row['foto'])) {
            echo "<img src='uploads/produk/" . htmlspecialchars($row['foto']) . "' 
        alt='Foto Produk' 
        style='width:150px; display:block; margin-bottom:10px;'>";
          }

          echo "<h3>" . htmlspecialchars($row['nama_produk']) . "</h3>";
          echo "<p>" . htmlspecialchars($row['deskripsi']) . "</p>";
          echo "<strong>Harga: Rp " . number_format($row['harga'], 0, ',', '.') . "</strong>";

          echo "</div>";
        }
      } else {
        echo "<p>Tidak ada produk yang ditemukan.</p>";
      }
      $stmt->close();
    } else {
      echo "<p>Masukkan kata kunci pencarian.</p>";
    }
    $conn->close();
    ?>
  </div>
</body>

</html>