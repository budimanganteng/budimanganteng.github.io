<?php
require "koneksi.php";

if(isset($_POST['Daftar'])){
    $nama = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $bootcamp = mysqli_real_escape_string($conn, $_POST['bootcamp']);

    $query = "INSERT INTO pendaftaran (id, nama, email, bootcamp) VALUES('', '$nama', '$email', '$bootcamp')";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "
            <script>
                alert('Berhasil menambah data');
                document.location.href = 'index.html';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Gagal menambah data: " . mysqli_error($conn) . "');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Bootcamp</title>
    <link rel="stylesheet" href="style_form.css">
</head>
<body>
<main>
    <div class="container">
        <form action="" method="POST">
            <h2>Formulir Pendaftaran Bootcamp</h2>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan name Anda" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="bootcamp">--Pilih Bootcamp:</label>
            <select id="bootcamp" name="bootcamp" required> <!-- Diupdate di sini -->
                <option value="">--Pilih bootcamp--</option>
                <option value="Android Developer">Android Developer</option>
                <option value="Machine learning">Machine learning</option>
                <option value="React Developer">React Developer</option>
                <option value="Data Scientist">Data Scientist</option>
                <option value="Full Stack Developer">Full Stack Developer</option>
                <option value="DevOps Engineer">DevOps Engineer</option>
            </select>
            <br><br>

            <button type="submit" name="Daftar">Kirim</button>
        </form>
    </div>
</main>
</body>
</html>
