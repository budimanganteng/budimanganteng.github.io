<?php

require 'koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM pendaftaran WHERE id = $id");

if($result){
    echo "
        <script>
            alert('Berhasil menghapus data');
            document.location.href = 'lihatdata.php';
            </script>
            ";
        }else{
            echo "
        <script>
            alert('Gagal menghapus data');
            document.location.href = 'lihatdata.php';
        </script>
    ";
}