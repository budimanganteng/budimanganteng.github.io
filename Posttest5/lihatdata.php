<?php 
  require 'koneksi.php';

  $sql = mysqli_query($conn, "SELECT * FROM pendaftaran");

  $pendaftaran = [];

  while($row = mysqli_fetch_assoc($sql)){
    $pendaftaran[] = $row;
  }
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootcamp Programming</title>
    <link rel="stylesheet" href="lihat_data.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="logo">
          <h1 class="logo-text">ID CAMP</h1>
        </div>
        <ul class="nav-links">
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="lihatdata.php">Lihat Data</a></li>
          <li><a href="about.html">Tentang saya</a></li>
          <a href="#" class="sun"><i class="fa-solid fa-sun"></i></a>
        </ul>
        <button class="hamburger" id="hamburger-menu" aria-label="Menu"><i class="bi bi-list"></i></button>
        <div class="nav-right">
          <button><a href="Daftar.php" class="btn-daftar">Daftar Sekarang</a></button>
        </div>
      </nav>
    </header>

    <main class="data-mahasiswa-section">
      <h1 class="data-mahasiswa-title">Data Pendaftar Bootcamp</h1>

      <table class="table-mahasiswa">
        <thead>
          <tr class="table-mahasiswa-row">
            <th class="table-mahasiswa-header">No</th>
            <th class="table-mahasiswa-header">Nama</th>
            <th class="table-mahasiswa-header">Email</th>
            <th class="table-mahasiswa-header">Bootcamp Kelas</th>
            <th class="table-mahasiswa-header">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; foreach($pendaftaran as $nama_database) : ?>
          <tr class="table-kerja-row">
            <td class="table-kerja-data"><?php echo $i ?></td>
            <td class="table-kerja-data"><?php echo $nama_database['nama'] ?></td>
            <td class="table-kerja-data"><?php echo $nama_database['email'] ?></td>
            <td class="table-kerja-data"><?php echo $nama_database['bootcamp'] ?></td>
            <td class="table-kerja-data">
              <div class="button-UD">
              <a href="edit.php?id=<?php echo $nama_database['id']?>"<button class="edit-data">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <p>Edit</p>
                </button></a>
                
                <a href="delete.php ?id=<?php echo $nama_database['id']?>"onclick="return confirm('Yakin ingin menghapus data ini?');"
                <button class="hapus-data">
                    <i class="fa-solid fa-trash-can"></i>
                    <p>Delete</p>
              </a>
                </button>
                </a>
              </div>
            </td>
          </tr>
        <?php $i++; endforeach ?>
      </tbody>
      </table>
    </main>

    <footer>
      <div class="footer-content">
        <p>&copy; 2024 IDCamp. All rights reserved.</p>
        <p>Contact us: info@idcamp.ioh.co.id</p>
        <div class="social-links">
          <a href="https://facebook.com">Facebook</a> |
          <a href="https://twitter.com">Twitter</a> |
          <a href="https://instagram.com">Instagram</a>
        </div>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
