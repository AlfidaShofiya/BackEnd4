<?php
	error_reporting(0);
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>DATA CHECK OUT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<h1 style="text-align: center;">CheckOut</h1>
	<center><a href="bayar.php">Tambah Data</a></center>
	<table border="1" style="margin: auto;">
		<thead>
		<tr>
			<th>Id</th>
			<th>Merk HP</th>
			<th>Harga</th>
			<th>Detail</th>
			<th>Foto</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php

			$result = mysqli_query($koneksi, "SELECT * FROM merkhp");
			while ($row = mysqli_fetch_array($result)) {

		?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['merk_hp'];?></td>
					<td><?php echo $row['harga'];?></td>
					<td><?php echo $row['detail'];?></td>
					<td>
						<center>
							<img src="image/<?php echo $row['foto'];?> "border="0" width="70px" height="70px"/>
						</center>
					</td>
					<td>
						<a href="editdata.php?id=<?php echo $row['id'];?>">Edit</a>
						<a href="hapusdata.php?id=<?php echo $row['id'];?>">Hapus</a>
					</td>

				</tr>
				<?php } ?>	
		</tbody>
	</table>
</body>
</html>