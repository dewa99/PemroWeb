<?php 

include 'segitiga.php';

$s = new segitiga($_POST['alas'],$_POST['tinggi']);
echo $s->hitung_luas();
$s->get_nama();

?>