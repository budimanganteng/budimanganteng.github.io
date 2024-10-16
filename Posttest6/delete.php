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


    require 'koneksi.php';
    
    $id = $_GET['id'];
    
        $result = mysqli_query($conn, "SELECT * from pendaftaran where id = '$id'");
    
        $pendaftaran = [];
    
        while($row = mysqli_fetch_assoc($result)){
            $pendaftaran[] = $row;
        }
    
        $pendaftaran = $pendaftaran[0];
    
    
$result = mysqli_query($conn, "DELETE from pendaftaran where id = $id");

if($result){
    if(is_file('assets/' .$pendaftaran['foto'])) {
        unlink('assets/' . $pendaftaran['foto']);
    }
    echo "
        <script>
            alert('Berhasil menghapus data');
            document.location.href = 'lihat_data.php';
            </script>
            ";
        }else{
            echo "
        <script>
            alert('Gagal menghapus data');
            document.location.href = 'lihat_data.php';
        </script>
    ";
}