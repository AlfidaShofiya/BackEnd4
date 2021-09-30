<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "SELECT * FROM merkhp WHERE id = '$id'");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $merk_hp = $row['merk_hp'];
        $harga = $row['harga'];
        $detail = $row['detail'];
        $foto = $row['foto'];
    }
} 
else {
    header("Location: data.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut</title>
</head>

<body>
<form action="prosesedit.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <fieldset>
        <legend><h3>CheckOut</h3></legend>
        <table>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td>
                    <input type="text" name="id" id="id" size="40" value="<?= $id; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Merk HP</td>
                <td>:</td>
                <td>
                    <input type="text" name="merk_hp" id="merk_hp" size="40" value="<?= $merk_hp; ?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <input type="text" name="harga" id="harga" size="40" value="<?= $harga; ?>">
                </td>   
            </tr>
            <tr>
                <td>Detail</td>
                <td>:</td>
                <td>
                    <input type="text" name="detail" id="detail" size="40" value="<?= $detail; ?>">
                </td>   
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" id="edit" value="Simpan Data" /></td>
            </tr>
        </table>
    </fieldset>

</form>
</body>
</html>