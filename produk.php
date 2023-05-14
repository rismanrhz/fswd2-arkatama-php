<?php 
	include 'koneksi.php';

	$query = "SELECT p.name, p.price, c.name AS kategori FROM products p JOIN categories c ON c.id = p.category_id";
	$result = $conn->query($query);
?>

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Produk</title>
  </head>
  <body>
    <div class="container">
	      <h3 class=" fw-bold text-center">Tabel Produk</h3>
		  	<div class="table-responsive">
		  		<table class="table table-hover table-striped border">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Nama</th>
					      <th scope="col">Harga ($)</th>
					      <th scope="col">Kategori</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  		if ($result->num_rows > 0) {
					  			$no = 1;
					  			while($data = $result->fetch_assoc()) {
					  	?>
						    <tr>
						      <th scope="row"><?= $no++ ?></th>
						      <td><?= $data['name'] ?></td>
						      <td>$ <?= $data['price'] ?></td>
						      <td><?= $data['kategori'] ?></td>
						    </tr>
							<?php }} ?>
					  </tbody>
					</table>
		  	</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>