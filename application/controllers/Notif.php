<?php

	class Notif extends CI_Controller{
		
		public $noresi;
		public $rekening;

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('Rekening');
			$this->rekening = $this->Rekening;

		}

		public function index(){
			$this->load->view('header_beranda');
			$this->load->view('footer_beranda');
		}

		public function nasabah(){
			$this->load->view('header_beranda');
			$this->data_rekening();
			$this->load->view('footer_beranda');			
		}

		public function posting(){
			$this->load->view('header_beranda');
			$this->load->view('notif_posting');
			$this->load->view('footer_beranda');			
		}

		public function data_rekening(){
			$this->load->model('Rekening');
			$rekening = $this->Rekening;

			$rekening->ktp = $_GET['ktp'];
			$query = $this->db->get_where('tb_rekening',['Ktp'=>$rekening->ktp]);
			$row = $query->row();
			$rekening->norek = $row->No_rek;
			$rekening->pin = $row->Pin;
			$resi = $this->session->userdata('noresi');	
			$this->load->view('notif_nasabah', ['rekening'=>$rekening, 'resi'=>$resi]);
		}

		public function ebanking(){
			$this->load->view('header_beranda');
			$this->load->view('notif_ebanking');
			$this->load->view('footer_beranda');
		}

		public function transfer(){						
			$this->load->view('header_ebank');
			$this->data_transfer();
			$this->load->view('footer_ebank');
		}

		public function data_transfer(){
			$this->rekening->norek = $this->session->userdata('norek');
			$nominal = $this->session->userdata('nominal');
			$asal = $this->rekening->norekTujuan();
			$no = $this->noTransaksi(6);
			$tgl = $this->session->userdata('tgl');
			$this->rekening->norek = $this->session->userdata('tujuan');
			$tujuan = $this->rekening->norekTujuan();

			$this->load->view('notif_transfer', ['asal'=>$asal, 'tujuan'=>$tujuan, 'nominal'=>$nominal, 'tgl'=>$tgl, 'no'=>$no]);
		}


		public function pulsa(){
			$this->load->view('header_ebank');
			$this->data_pulsa();
			$this->load->view('footer_ebank');
		}

		public function data_pulsa(){
			$no = $this->noTransaksi(6);
			$telp = $this->session->userdata('no');
			$nominal = $this->session->userdata('nominal');
			$tgl = $this->session->userdata('tgl');
			$this->load->view('notif_pulsa', ['no'=>$no, 'telp'=>$telp, 'tgl'=>$tgl, 'nominal'=>$nominal]);
		}

		public function ubah_pass(){
			$this->load->view('header_ebank');
			$this->load->view('notif_change_pass');
			$this->load->view('footer_ebank');
		}

    	public function noTransaksi($panjang){
	        $karakter = '0123456789';
	        $panjangChar = strlen($karakter);
	        for($i=0;$i<$panjang;$i++){
	            $this->noresi .= $karakter[rand(0, $panjangChar -1)];
	        }
	        return $this->noresi;
    	}
	}