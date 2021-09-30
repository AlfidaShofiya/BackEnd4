<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['edit'])) {

	$id = $_POST['id'];
    $merk_hp = $_POST['merk_hp'];
    $harga = $_POST['harga'];
    $detail = $_POST['detail'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/" . $foto; 
if (empty($foto)) 
{
	$query = "UPDATE merkhp set merk_hp = '$merk_hp', harga = '$harga', detail = '$detail', foto = '$foto' where id = '$id'";
}
else
{
	$file = mysqli_query($koneksi, "SELECT foto FROM merkhp where id = '$id' ");
	$hasil = mysqli_fetch_array($file);
	$foto_lama = $hasil['foto'];
	unlink("image/".$foto_lama);

	if (move_uploaded_file($tmp, $path)) 
	{
		$query = "UPDATE merkhp set merk_hp = '$merk_hp', harga = '$harga', detail = '$detail', foto = '$foto' where id = '$id'";
}
	}
}

$result = mysqli_query($koneksi, $query);

if (!$result) 	
{
	die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
}
else
{
	echo "<script>alert('Data Berhasil Diubah');window.location.href='data.php'</script> ";
}


?>