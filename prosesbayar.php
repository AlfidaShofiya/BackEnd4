<?php
error_reporting(0);
include 'koneksi.php';


if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $merk_hp = $_POST['merk_hp'];
    $harga = $_POST['harga'];
    $detail = $_POST['detail'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/" . $foto; 

    if (move_uploaded_file($tmp, $path)) {
        $query = "INSERT INTO merkhp VALUES ('$id','$merk_hp','$harga','$detail','$foto')";
        
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query gagal dijalankan." . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        } 
        else 
        {
            echo "<script>  alert('Data Berhasil Ditambah !'); window.location.href='data.php';</script>";
        }
    }
}

?>