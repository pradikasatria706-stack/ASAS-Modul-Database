<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Siswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <div class="header">
    <h2>Data Siswa</h2>
    <p>Berikut daftar siswa yang tersimpan.</p>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NISN</th>
              <th>Gender</th>
              <th>Kelas</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $no = 1;
          $data = mysqli_query($koneksi, "SELECT * FROM siswa");

          while ($d = mysqli_fetch_array($data)) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $d['nama']; ?></td>
              <td><?= $d['nisn']; ?></td>
              <td><?= $d['jenis_kelamin']; ?></td>
              <td><?= $d['kelas']; ?></td>
              <td><?= $d['alamat']; ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>

      <div class="small-note">
        <a href="index.php" style="color: rgba(255,255,255,.9); text-decoration: underline;">Tambah data baru</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>

