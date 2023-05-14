<?php
	function seleksi($triangle = 'downsideRight'){
	if ($triangle == 'all'){
		downsideRight();
	}
	else {
		upsideLeft();
		downsideLeft();
		upsideRight();
		downsideRight();
		}
	}
		seleksi();
	function upsideLeft($symbol = " * ", $row = 5){
	for ($a = 1 ; $a <= $row ; $a++){
	for ($b = 1 ; $b <= $a ; $b++){
		echo $symbol;
	}
		echo "<br>";
	}
		echo " <br>";
	}
	function downsideLeft($symbol = " * ", $row = 5){
	for ($i = $row ; $i >=1 ; $i--){
	for ($j = 1 ; $j <= $i ; $j++){
		echo $symbol;
	}
		echo "<br>";
	}
		echo " <br>";
	}
	function upsideRight($symbol = "*", $row = 5){
	for($a=1; $a<=$row; $a++){
	for($c=$row; $c>=$a; $c-=1){
		echo " &nbsp";
	}
	for($i=1; $i<=$a; $i++){
		echo $symbol;
	}
		echo "<br>";
	}
		echo " <br> ";
	}
	function downsideRight($symbol = "*", $row = 5){
	for($a=1; $a<=$row; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$row; $c>=$a; $c-=1){
		echo $symbol;
	}
		echo "<br>";
	}
	}
?>