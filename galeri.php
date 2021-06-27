<!DOCTYPE html>
 <html>
 <head>

 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Muhammad Riski</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 </head>
 <body>

<?php include ("header.html"); ?>
<div class="kotak">
<a href="formgaleri.php">Tambah & Hapus Gambar</a><br><br>
 	<title>galeri</title>
</head>
<body>
   <h1></h1>
   <?php
  // Load file koneksi.php
  include "koneksi.php";
  $query = "SELECT * FROM gambar"; // Tampilkan semua data gambar
  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
  $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
  if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      echo "<img src='images/".$data['nama']."'></td>";
    }}?>
</body>
