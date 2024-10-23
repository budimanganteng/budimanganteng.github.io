<?php 
    require 'koneksi.php';

    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * from mahasiswa where id = '$id'");
    
    $mahasiswa = [];

    while($row = mysqli_fetch_assoc($result)){
        $mahasiswa[] = $row;
    }

    $mahasiswa = $mahasiswa[0];

    if(isset($_POST['update'])){
        $NIM = $_POST['NIM'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $prodi = $_POST['prodi'];

        $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', kelas = '$kelas', prodi = '$prodi' where id = '$id'";

        $result = mysqli_query($conn, $query);
        
        if($result){
            echo "
                <script>
                    alert('Berhasil Update data');
                    document.location.href = 'lihat_data.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Gagal Update data');
                </script>
            ";
        }
    }
?>