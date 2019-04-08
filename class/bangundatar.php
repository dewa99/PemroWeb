<?php 

	class bangundatar
	{
		protected $namabentuk;

		public function set_nama($nama)
		{
			$this->namabentuk = $nama;
		}

		public function get_nama()
		{
			echo $this->namabentuk;
		}
	}

?>