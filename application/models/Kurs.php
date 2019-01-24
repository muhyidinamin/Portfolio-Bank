<?php 
	
	class Kurs extends CI_Model {
		//Variabel
		public $kode;
		public $nama;
		public $jual;
		public $beli;

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}		

		public function tampilKurs(){
			$sql = "SELECT * FROM tb_kurs";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function update(){
			$sql = sprintf("UPDATE tb_kurs SET Mata_uang = '%s', Jual = '%.2f', Beli = '%.2f' WHERE Kode = '%s'",
			$this->nama, $this->jual, $this->beli, $this->kode);
			$this->db->query($sql);
		}
	}