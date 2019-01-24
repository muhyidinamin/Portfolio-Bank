<?php 
	
	class Transaksi extends CI_Model {

		public $no;
		public $norek;
		public $tgl;
		public $jenis;
		public $status;
		public $nilai;	

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function insert(){
			$sql = sprintf("INSERT INTO tb_transaksi VALUES('%s', '%s', '%s', '%s', '%s', '%.2f')", $this->no, $this->norek, $this->tgl, $this->jenis, $this->status, $this->nilai);
			$this->db->query($sql);
		}

	    public function mutasi(){
			$sql = "SELECT * FROM tb_transaksi WHERE No_rek='$this->norek'";
			$query = $this->db->query($sql);
			return $query->result();
		}
		
		public function daftarTransaksi(){
			$sql = "SELECT * FROM tb_nasabah, tb_rekening, tb_transaksi WHERE tb_nasabah.Ktp=tb_rekening.Ktp AND tb_rekening.No_rek=tb_transaksi.No_rek";
			$query = $this->db->query($sql);
			return $query->result();
		}
	}