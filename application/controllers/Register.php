<?php

	class Register extends CI_Controller{
		public $nasabah = NULL;
		public $rekening = NULL;
		public $randomString;
		public $noresi;

		public function __construct(){
			parent::__construct();
			$this->load->model('Username');
			$this->load->model('M_nasabah');
			$this->load->model('Rekening');
			$this->nasabah = $this->M_nasabah;
			$this->rekening = $this->Rekening;
		}

		public function index(){
			$this->load->view('header_beranda');
			$this->load->view('form_register');
			$this->load->view('footer_beranda');
		}

		public function pilihan(){
			if(isset($_POST['submit'])){
			$pilih=$_POST['pilihan'];
			if($pilih=='nasabah'){
				redirect('Register/nasabah');
			}else{
				redirect('Register/cek_rekening');
			}
			}else{
				redirect('Register');
			}
		}

		public function cek_rekening(){
			$this->load->view('header_beranda');
			$this->load->view('form_cek');
			$this->load->view('footer_beranda');
		}

		public function proses_cek(){
			$model = $this->Rekening;

			$model->norek=$_POST['norek'];
			$model->pin=$_POST['pin'];

			$data=$model->tampilRekening();
			if($data){
				$this->session->set_userdata('norek',$model->norek);
				$this->load->view('form_username',['data'=>$data]);
				
			}else{
				redirect('Register/cek_rekening?error=salah');
			}
		}

		public function daftar(){
			$this->load->view('header_beranda');
			$this->proses_cek();
			$this->load->view('footer_beranda');

		}

		public function pendaftaran(){
			$model = $this->Username;

			$model->username=$_POST['username'];
			$model->password=$_POST['password'];
			$model->norek=$this->session->userdata('norek');
			$model->insert();
			redirect('Notif/ebanking');
		}

		public function nasabah(){
			$this->load->view('header_beranda');
			$this->load->view('form_nasabah');
			$this->load->view('footer_beranda');
		}
		public function nas_baru(){
			$this->nasabah->ktp = $_POST['noktp'];
			$this->nasabah->first = $_POST['first'];
			$this->nasabah->last = $_POST['last'];
			$this->nasabah->alamat = $_POST['alamat'];
			$this->nasabah->telp = $_POST['telp'];

			$this->rekening->ktp = $_POST['noktp'];
			$this->rekening->saldo = $_POST['setoran'];
			$this->rekening->pin = $this->defaultPin(6);
			$this->noresi = $this->noPendaftaran(8);
			$this->session->set_userdata('noresi', $this->noresi);

			$this->nasabah->insert();
			$this->rekening->insert();
			redirect('Notif/nasabah?ktp='.$this->nasabah->ktp);
		}

		public function defaultPin($panjang){
	        $karakter = '0123456789';
	        $panjangChar = strlen($karakter);
	        for($i=0;$i<$panjang;$i++){
	            $this->randomString .= $karakter[rand(0, $panjangChar -1)];
	        }
	        return $this->randomString;
    	}

    	public function noPendaftaran($panjang){
	        $karakter = '0123456789ABCDEFGHIJ';
	        $panjangChar = strlen($karakter);
	        for($i=0;$i<$panjang;$i++){
	            $this->noresi .= $karakter[rand(0, $panjangChar -1)];
	        }
	        return $this->noresi;
    	}    	
	}