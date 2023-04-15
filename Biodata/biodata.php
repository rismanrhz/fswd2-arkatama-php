<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="biodata_diri_baru.css">
	<title>Risma Nurhaliza</title>
</head>
<body>
	<center>
	<h1 class="judul"> <center>Biodata Diri</center> </h1> 
	<br>
	<table class="tabel" border="1px"> 
		<tr>
			<td rowspan="10"><img src="../assets/Risma 1.jpeg" style="width:3cm; height: 4cm;">
		</tr>
		<tr>
			<td>Nama</td>
			<td>Risma Nurhaliza</td>
		</tr>
		<tr>
			<td>TTL</td>
			<td>Bojonegoro, 27 November 2001</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>Perempuan</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>Olahraga</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>Jl. Kyai Maszad Gg. Kamituwo No.14 Banjarjo, Bojonegoro</td>
		</tr>
		<tr>
			<td>Riwayat Pendidikan</td>
			<td>SDN BANJARJO 1 (2017-2013)<br>
			SMPN 2 BOJONEGORO (2013-2017)<br>
			SMAN 1 BOJONEGORO (2017-2020)<br>
			UPN VETERAN JATIM (2020-Sekarang)</td>
		</tr>
	</table>
	</center>
	<center>
		<h2>
			Komentar
		</h2>
		<form action="biodata2.php" method="POST">
			Nama : <input type="text" name="nama" placeholder="tulis namamu.." required>
			Komentar : <input type="text" name="komentar" placeholder="tulis disini...">
			<button name="submit">Submit</button>	
		</form>

		<br>
		<?php
			if (!empty($_POST['nama'])) {
				$nama = $_POST['nama'];
				$komentar = $_POST['komentar'];
				echo "Nama : ";
				echo $nama;
				echo "<br>";
				echo "Komentar : ";
				echo $komentar;
			}
			
		?>
	</center>
</body>
</html>