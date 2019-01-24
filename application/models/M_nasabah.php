<?php 
	
	class M_nasabah extends CI_Model {

		public $ktp;
		public $first;
		public $last;
		public $alamat;
		public $telp;

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}		
	    
		public function insert(){
			$sql = sprintf("INSERT INTO tb_nasabah VALUES('%s', '%s', '%s', '%s', '%s')",
			$this->ktp, $this->first, $this->last, $this->alamat, $this->telp);
			$this->db->query($sql);
		}
	    
	    public function tampilNasabah(){
			$sql = "SELECT * FROM tb_nasabah, tb_rekening WHERE tb_nasabah.Ktp=tb_rekening.Ktp";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function search($cari){
			$sql = "SELECT * FROM tb_nasabah, tb_rekening WHERE tb_nasabah.Ktp=tb_rekening.Ktp AND Nama_belakang LIKE '%$cari%'";
			$query = $this->db->query($sql);
			return $query->result();
		}	
	}