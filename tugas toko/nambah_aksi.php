<!DOCTYPE html>
<html>
<head>
	<title>Derafa Gunshop</title>
</head>
<body>

	<h2>AMMO-NATION</h2>
	<br/>
	<a href="index.php">Back</a>
	<br/>
	<br/>
	<h3>TAMBAH BARANG</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Kode Barang</td>
				<td><input type="text" name="kodeBarang"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="namaBarang"></td>
			</tr>
			<tr>
				<td>Satuan Barang</td>
				<td><input type="text" name="satuanBarang"></td>
			</tr>
            <tr>
				<td>Stock Barang</td>
				<td><input type="number" name="stockBarang"></td>
			</tr>
            <tr>
				<td>Harga Barang</td>
				<td><input type="number" name="hargaBarang"></td>
			</tr>
			<tr>
				<td>Simpan</td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>