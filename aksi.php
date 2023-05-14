<?php 
	function addCategories()
	{
		include 'koneksi.php';
		$sql = "insert into categories values 
		(default,'elektronik', NOW(), NOW()),
		(default,'komputer', NOW(), NOW()),
		(default,'aksesoris', NOW(), NOW()),
		(default,'handphone', NOW(), NOW()),
		(default,'makanan', NOW(), NOW()),
		(default,'minuman', NOW(), NOW()),
		(default,'kecantikan', NOW(), NOW()),
		(default,'perawatan', NOW(), NOW()),
		(default,'perlengkapan rumah', NOW(), NOW()),
		(default,'pakaian wanita', NOW(), NOW()),
		(default,'pakaian pria', NOW(), NOW()),
		(default,'fashion muslim', NOW(), NOW()),
		(default,'sepatu pria', NOW(), NOW()),
		(default,'sepatu wanita', NOW(), NOW()),
		(default,'fashion bayi', NOW(), NOW()),
		(default,'ibu dan bayi', NOW(), NOW()),
		(default,'jam tangan', NOW(), NOW()),
		(default,'tas pria', NOW(), NOW()),
		(default,'tas wanita', NOW(), NOW()),
		(default,'kesehatan', NOW(), NOW()),
		(default,'otomotif', NOW(), NOW()),
		(default,'olahraga', NOW(), NOW()),
		(default,'fotografi', NOW(), NOW()),
		(default,'sovenir', NOW(), NOW()),
		(default,'alat tulis', NOW(), NOW()),
		(default,'hobi dan koleksi', NOW(), NOW()),
		(default,'hijab', NOW(), NOW()),
		(default,'pakaian dalam', NOW(), NOW()),
		(default,'dekorasi', NOW(), NOW()),
		(default,'mainan', NOW(), NOW())
		";

		if ($conn->query($sql) === true ) {
			echo 'sukses';
		}else{
			echo 'gagal';
		}
	}

	function addProducts()
	{
		include 'koneksi.php';

		$sql = "insert into products values 
			(default, 1, 'tv', 'lorem', 11, 'accepted', now(), now(), 1, now(), 1),
			(default, 2, 'laptop', 'lorem', 200, 'waiting', now(), now(), 1, now(), 1),
			(default, 3, 'charger', 'lorem', 13, 'accepted', now(), now(), 1, now(), 1),
			(default, 4, 'samsung', 'lorem', 44, 'waiting', now(), now(), 1, now(), 1),
			(default, 5, 'batagor', 'lorem', 5, 'waiting', now(), now(), 1, now(), 1),
			(default, 6, 'fanta', 'lorem', 6, 'accepted', now(), now(), 1, now(), 1),
			(default, 7, 'bedak', 'lorem', 17, 'accepted', now(), now(), 1, now(), 1),
			(default, 8, 'facial wash', 'lorem', 18, 'accepted', now(), now(), 1, now(), 1),
			(default, 9, 'kursi', 'lorem', 29, 'accepted', now(), now(), 1, now(), 1),
			(default, 10, 'tunik', 'lorem', 10, 'accepted', now(), now(), 1, now(), 1),
			(default, 11, 'kemeja', 'lorem', 11, 'accepted', now(), now(), 1, now(), 1),
			(default, 12, 'jubah', 'lorem', 22, 'accepted', now(), now(), 1, now(), 1),
			(default, 13, 'vans', 'lorem', 43, 'accepted', now(), now(), 1, now(), 1),
			(default, 14, 'cats', 'lorem', 64, 'accepted', now(), now(), 1, now(), 1),
			(default, 15, 'baju bayi', 'lorem', 5, 'accepted', now(), now(), 1, now(), 1),
			(default, 16, 'gendongan', 'lorem', 16, 'waiting', now(), now(), 1, now(), 1),
			(default, 17, 'rolex', 'lorem', 117, 'waiting', now(), now(), 1, now(), 1),
			(default, 18, 'tas selempang', 'lorem', 18, 'waiting', now(), now(), 1, now(), 1),
			(default, 19, 'ransel', 'lorem', 19, 'waiting', now(), now(), 1, now(), 1),
			(default, 20, 'bodrex', 'lorem', 2, 'waiting', now(), now(), 1, now(), 1),
			(default, 21, 'knalpot', 'lorem', 21, 'waiting', now(), now(), 1, now(), 1),
			(default, 22, 'bola basket', 'lorem', 12, 'waiting', now(), now(), 1, now(), 1),
			(default, 23, 'sony', 'lorem', 213, 'accepted', now(), now(), 1, now(), 1),
			(default, 24, 'mangkok', 'lorem', 14, 'accepted', now(), now(), 1, now(), 1),
			(default, 25, 'buku', 'lorem', 5, 'accepted', now(), now(), 1, now(), 1),
			(default, 26, 'gitar', 'lorem', 126, 'accepted', now(), now(), 1, now(), 1),
			(default, 27, 'pashmina', 'lorem', 7, 'accepted', now(), now(), 1, now(), 1),
			(default, 28, 'g-string', 'lorem', 8, 'waiting', now(), now(), 1, now(), 1),
			(default, 29, 'baloon', 'lorem', 2, 'waiting', now(), now(), 1, now(), 1),
			(default, 30, 'boneka', 'lorem', 30, 'waiting', now(), now(), 1, now(), 1)
		";

		if ($conn->query($sql) === true ) {
			echo 'sukses';
		}else{
			echo 'gagal';
		}
	}

	addCategories();	
	addProducts();

?>