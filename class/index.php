<?php 

	// function perkalian(int $a , $b = 40){
	// 	echo ($a * $b);
	// }

	// perkalian(2.4);

	// include 'segitiga.php';
	//bikin objek dari class 
	// $a = new segitiga(50,24);

	// $a->set_alas(50);
	// $a->set_tinggi(25);

	// echo $a->hitung_luas();

?>

<h4>FORM LUAS SEGITIGA</h4>

<form action="hitung.php" method="post">
	<span>alas</span>
	<br>
	<input type="number" name="alas" placeholder="alas">
	<br>
	<span>tinggi</span>
	<br>
	<input type="number" name="tinggi" placeholder="tinggi">
	<br>
	<input type="submit" name="submit">
</form>

<!-- http://localhost/praktikum/class/hitung.php?alas=50&tinggi=20&submit=Submit+Query -->

<!-- http://localhost/praktikum/class/hitung.php -->