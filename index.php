<?php 
	
	// echo "Hallo :)";
	// echo 'Hallo :)';
	//print "Hallo tes<br>";
	// echo 45 + .3 + ".3" / 5 * 6 % 3;
	
// 	$uang = 10000;
// 	$uang += 5.6;
// 	$uang /= 4;
// 	$uang *= 2;
// 	$uang ++;
// 	$uang --;
// 	$uang --;
// 	$angka = "sepuluh ribu";
// 	$angka .= " rupiah"; 
// 	$angka = explode(" ", $angka);
// 	//print_r($angka);
// 	$array_angka = array("angka",2,3,4,5);
// 	$array = array('nama' => 'dewa', 'umur' => 69 , 'alamat' => 'jember');
// var_dump($array_angka);


// 	//cara 1
// 	echo "Uangku : Rp. " . $uang;
// 	echo "<br>";
// 	//cara 2
// 	echo "Uangku : {$angka}";	
	
	//array 2 dimensi, pake yang ini
	$array = array(
		array('Chicago' , 2695), 
		array('Dallas',1197),
		array('Jember',1000)
	);

	//array with key / array object
	$arrayName = array(
		'chicago' => 2695, 
		'dallas' => 1197 
	);

	$array[0][1] = 37000;

		for ($i=0; $i < count($array); $i++) { 
			echo($array[$i][0] . " - " . $array[$i][1]);
			echo "<br>";

		}

	//print_r($arrayName);
	?>