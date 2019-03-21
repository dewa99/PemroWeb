<?php 

$data = array(
	array("Chicago, IL","2695598"), 
	array("Dallas, TX","1197816"), 
	array("Houston, TX","2100263"), 
	array("Los Angeles, CA", "3792621"), 
	array("New York, NY" ,"8175133"), 
	array("Philadelphia, PA", "1526006"), 
	array("Phoenix, AZ", "1445632"), 
	array("San Antonio, TX", "1327407"), 
	array("San Diego, CA", "1307402"), 
	array("San Jose, CA", "945942")
);

$data2 = array(
	"Chicago, IL" => "2,695,598",
	"Dallas, TX" => "1,197,816",
	"Houston, TX" => "2,100,263",
	"Los Angeles, CA" => "3,792,621",
	"New York, NY" => "8,175,133",
	"Philadelphia, PA" => "1,526,006",
	"Phoenix, AZ" => "1,445,632",
	"San Antonio, TX" => "1,327,407",
	"San Diego, CA" => "1,307,402",
	"San Jose, CA" => "0,945,942"
);

//if else
// if ($data[0][1] > $data[1][1]) {
// 	echo "besar";
// }
// elseif(sizeof($data) > 10) {
// 	echo "iya";
// }
// else{
// 	echo "kecil";
// }

// echo "<br>";
// //switch case
// $i = 4;

// switch($i){
// 	case 1:
// 		echo "1";
// 		break;
// 	case 2:
// 		echo "2";
// 		break;
// 	case 3:
// 		echo "3";
// 		break;
// 	case 4:
// 		echo "4";
// 		break;
// 	case 5:
// 		echo "5";
// 		break;
// 	default:
// 		break;
// }

// //ternary

// echo "<br>";
// $a = $i > 3 ? 15 : 20;
// echo $a;

// echo $i == 3 ? "tiga" : "bukan 3";

// echo "<br>";

// if ( $i == 3 ? $i > 2 : $i < 2) {
// 	$a = 15;
// }else{
// 	$a = 20;
// }

// echo $a;

//Perulangan
//for
// for ($i=0; $i < 10; $i++) { 
// 	echo "perulangan - {$i}<br>";
// }
//do 
// $p=0;
// do {
// 	echo "perulangan - {$p}<br>";
// 	$p++;
// } 
// while ($p <= 10);

//while
// $i = 1;
// while ($i <= 10) {
// 	echo "perulangan - {$i}<br>";
// 	$i++;
// }
// foreach ($data as $v) {
// 	echo "datanya : {$v[0]} - {$v[1]}<br>";
// }

//sort($data2);

for ($i=0; $i < sizeof($data) ; $i++) { 
	for ($j=0; $j < sizeof($data) - 1 ; $j++) { 
		if ($data[$j][1] < $data[$j+1][1]) {
			$temp = $data[$j];
			$data[$j] = $data[$j+1];
			$data[$j+1] = $temp;
		}
	}
}

echo "<table border=1>";
	foreach ($data as $datum) {
		echo "<tr><td>{$datum[0]}</td><td>{$datum[1]}</td></tr>";
	}
echo "</table>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Praktikum</title>
</head>
<body>

	<table border="1" style="background: yellow">
		<?php foreach ($data as $datum):?>
		<tr>
			<td><?= $datum[0]?></td>
			<td><?= $datum[1]?></td>
		</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>