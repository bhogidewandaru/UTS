<?php
$conn = mysqli_connect("localhost", "root", "", "web2");
require 'functions.php';
$corona = query("SELECT * FROM corona");

if (isset($_POST["submit"]) ) {
	if ( Tambah($_POST) > 0 ) {
		echo "<script> 
				alert('data berhasil ditambahkan!');
				document.location.href = 'uts.php';
		</script>";
	} else {
		echo "
		<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'uts.php';
		</script>";
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Data Pemantauan</title>
</head>
<body>
	<?php foreach ($corona as $row) : ?>
	<h2><center>Data Pemantauan COVID-19 wilayah <?php echo $row["wilayah"]; ?></center></h2>
	<h2><center><?php echo date('l, d-m-Y  h:i:s a');?></center></h2>
	<h2><center><?php echo $row["operator"]; ?></center></h2>

	<form action="" method="post">
		<table>
		<tr>
			<th>
				<label for="wilayah">Nama Wilayah</label>
			</th>
			<th>
				<label for="positif">Jumlah Positif</label>
			</th>
			<th>
				<label for="dirawat">Jumlah Dirawat</label>
			</th>
			<th>
				<label for="sembuh">Jumlah Sembuh</label>
			</th>
			<th>
				<label for="meninggal">Jumlah Meninggal</label>
			</th>
			<th>
				<label for="operator">Nama Operator</label>
			</th>
			<th>
				<label for="nim">NIM Siswa</label>
			</th>
		</tr>
		<tr>
		<td>
			<select name="wilayah" id="wilayah">
				<option value="DKI Jakarta">DKI Jakarta</option>
				<option value="Jawa Barat">Jawa Barat</option>
				<option value="Banten">Banten</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
			</select>
		</td>
		<td>
			<input type="text" name="positif">
		</td>
		<td>
			<input type="text" name="dirawat">
		</td>
		<td>
			<input type="text" name="sembuh">
		</td>
		<td>
			<input type="text" name="meninggal">
		</td>
		<td>
			<input type="text" name="operator">
		</td>
		<td>
			<input type="text" name="nim">
		</td>
		</tr>
	</table>	
			<button type="submit" name="submit">Tambah</button>





	
	<form action="" method="post">
			<div align="center">
			<table border="1">
				<tr>
					<th>No</th>	
					<th>Positif</th>
					<th>Dirawat</th>
					<th>Sembuh</th>
					<th>Meninggal</th>
				</tr>
				<?php $i = 1; ?>
				
					<tr>
						<td><?php echo $i; ?></td>
							<td><?php echo $row["positif"]; ?></td>
							<td><?php echo $row["dirawat"]; ?></td>
							<td><?php echo $row["sembuh"]; ?></td>
							<td><?php echo $row["meninggal"]; ?></td>
					</tr>
<?php $i++; ?>
<?php endforeach;?>
			</div>
			</table>

</body>
</html>