<html>
<head>
  <title>Data Gambar</title>
</head>
<body>
<h1>Data Gambar</h1><hr>
<a href="tambahgambar.php">Tambah Gambar</a><br><br>
<table border="1" cellpadding="8">
<tr>
  <th>Gambar</th>
  <th>Nama File</th>
  <th>Ukuran File</th>
  <th>Tipe File</th>
  <th>Aksi</th>
</tr>
<?php
// Load file koneksi.php
include "koneksi.php";
$query = "SELECT * FROM gambar"; // Tampilkan semua data gambar
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['nama']."' width='100' height='100'></td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['ukuran']."</td>";
    echo "<td>".$data['tipe']."</td>";
    echo "<td><a href='hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
</body>
</html>
