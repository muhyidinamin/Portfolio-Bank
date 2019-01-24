<?php 
	
	class Rekening extends CI_Model {

		public $norek;
		public $ktp;
		public $pin;
		public $saldo;

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function insert(){
			$sql = sprintf("INSERT INTO tb_rekening VALUES ('%s','%s', '%s', '%.2f')",$this->norek, $this->ktp, $this->pin, $this->saldo);
			$this->db->query($sql);
		}

		public function tampilRekening(){
			$sql = "SELECT * FROM tb_nasabah, tb_rekening WHERE tb_rekening.No_rek = '$this->norek' AND Pin = '$this->pin' AND tb_nasabah.Ktp=tb_rekening.Ktp";
			$query = $this->db->query($sql);
			return $query->result();
		}		

		public function norekTujuan(){
			$sql = "SELECT * FROM tb_nasabah, tb_rekening WHERE tb_rekening.No_rek = '$this->norek' AND tb_nasabah.Ktp=tb_rekening.Ktp";
			$query = $this->db->query($sql);
			return $query->result();
		}

	    public function saldo(){
			$sql = "SELECT * FROM tb_rekening WHERE No_rek = '$this->norek'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function updateSaldo(){
			$sql = sprintf("UPDATE tb_rekening SET Saldo = '%.2f' WHERE No_rek = '%s'", $this->saldo, $this->norek);
			$this->db->query($sql);
		}		
	}