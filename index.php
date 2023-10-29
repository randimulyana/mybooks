<?php
// koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'my_books');

//ambil data dari query
$result = mysqli_query($koneksi, "SELECT * FROM buku");

// ambil data dari query
// $rows = mysqli_fetch_row($result); array numerik
// $rows = mysqli_fetch_assoc($result); array assosiative
// $rows = mysqli_fetch_array($result); mengembalikan keduanya

$row = [];
while ($rows = mysqli_fetch_assoc($result)) {
  $row[] = $rows;
}

$buku = $row;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Books</title>
</head>

<body>
  <h1>Daftar Buku</h1>
  <table border="1px" cellspacing="0" cellpadding="1px">
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Penerbit</th>
      <th>Pengarang</th>
      <th>isi</th>
    </tr>

    <?php $r = 1; ?>
    <?php foreach ($buku as $b) : ?>

      <tr>
        <td><?= $r++;; ?></td>
        <td><?= $b['judul']; ?></td>
        <td><?= $b['penerbit']; ?></td>
        <td><?= $b['pengarang']; ?></td>
        <td><?= $b['isi_buku']; ?></td>
      </tr>

    <?php endforeach; ?>

  </table>
</body>

</html>