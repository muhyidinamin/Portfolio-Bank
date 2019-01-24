<?php 
	
	class Promo extends CI_Model {
		//Variabel
		public $judul;
		public $gambar;
		public $deskripsi;

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function insert(){
			$data = ['Judul'=>$this->judul, 'Gambar'=>$this->gambar, 'Deskripsi'=>$this->deskripsi]; 
			$query = $this->db->insert('tb_promo',$data);
		}


		public function read(){
			$sql = "SELECT * FROM tb_promo";
			$query = $this->db->query($sql);
			return $query->result();
		}
	}