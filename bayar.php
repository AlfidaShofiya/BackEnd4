<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>DATA CHECK OUT</title>
</head>

<body>
<form action="prosesbayar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<fieldset>
		<legend><h3>CheckOut</h3></legend>
		<table>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td>
					<input type="text" name="id" id="id" size="40" />
				</td>
			<tr>
				<td>Merk HP</td>
				<td>:</td>
				<td>
					<input type="text" name="merk_hp" id="merk_hp" size="40" />
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td>
					<input type="text" name="harga" id="harga" size="40" />
				</td>	
			</tr>
			<tr>
				<td>Detail</td>
				<td>:</td>
				<td>
					<input type="text" name="detail" id="detail" size="40" />
				</td>	
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td><input type="file" name="foto" id="foto" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" id="simpan" value="Simpan Data" /></td>
			</tr>
		</table>
	</fieldset>

</form>
</body>
</html>