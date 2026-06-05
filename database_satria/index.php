<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Pendaftaran Siswa</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <div class="header">
    <h2>Form Pendaftaran Siswa</h2>
    <p>Isi data siswa dengan rapi, lalu klik <b>Simpan</b>.</p>
  </div>

  <div class="card">
    <div class="card-inner">
      <form method="POST" action="proses.php">
        <div class="grid">
          <div class="field">
            <label>Nama</label>
            <input type="text" name="nama" required>
          </div>

          <div class="field">
            <label>NISN</label>
            <input type="text" name="nisn" required>
          </div>

          <div class="field">
            <label>Jenis Kelamin</label>
            <select name="jk" required>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div class="field">
            <label>Kelas</label>
            <input type="text" name="kelas" required>
          </div>

          <div class="field" style="grid-column: 1 / -1;">
            <label>Alamat</label>
            <textarea name="alamat" required></textarea>
          </div>
        </div>

        <div class="actions">
          <button class="btn" type="submit">Simpan</button>
          <span class="small-note">Data akan tampil di halaman tabel.</span>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>

