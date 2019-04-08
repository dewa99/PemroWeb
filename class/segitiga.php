<?php 
	include 'bangundatar.php';
	
	class segitiga extends bangundatar
	{
		private $alas , $tinggi;
		
		function __construct($a , $b)
		{
			$this->set_nama('segitiga');
			$this->alas = $a;
			$this->tinggi = $b;
			echo "Segitiga baru dibuat<br>";
		}

		function set_alas($alas)
		{
			$this->alas = $alas;
		}

		function set_tinggi($tinggi)
		{
			$this->tinggi = $tinggi;
		}

		function get_alas(){
			return $this->alas;
		}

		function get_tinggi(){
			return $this->tinggi;
		}

		function hitung_luas(){
			return $this->alas * $this->tinggi/2;
		}

		function __destruct()
		{
			echo "<br>Segitiga telah selesai dibuat";
		}

	}


?>