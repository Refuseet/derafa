<!DOCTYPE html>
<html>
<head>
	<title>Derafa Gunshop</title>
</head>
<body>

	<h2>AMMO-NATION</h2>
	<br/>
	<a href="nambah.php">+ ADD YOUR PICKED GOODS </a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Satuan Barang</th>
            <th>Stock Barang</th>
            <th>Harga Barang</th>
			<th>Option</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_toko");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kodeBarang']; ?></td>
                <td><?php echo $d['namaBarang']; ?></td>
				<td><?php echo $d['satuanBarang']; ?></td>
				<td><?php echo $d['stockBarang']; ?></td>              
                <td><?php echo $d['hargaBarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['idBarang']; ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $d['idBarang']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>