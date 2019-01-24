<?php

	class E_banking extends CI_Controller{

		public $vmutasi = NULL;
		public $vsaldo = NULL;
		public $user = NULL;
		public $pass;
		public $newpass;
		public $repass;

		public function __construct(){
			parent::__construct();
			$this->load->model('Rekening');
			$this->load->model('Username');
			$this->load->model('Transaksi');
			$this->vmutasi = $this->Transaksi;
			$this->vsaldo = $this->Rekening;
			$this->user = $this->Username;

		}

		public function index(){
			if(isset($_SESSION['username'])){
        		redirect('E_banking/home');
    		}
			$this->load->view('header_beranda');
			$this->load->view('form_login');
			$this->load->view('footer_beranda');
		}

		public function login_proses(){
			$this->user->username = $_POST['username'];
			$this->user->password = $_POST['password'];
			if($this->user->loginUser()){
				redirect('E_banking/home');
			}else{
				redirect('E_banking?error=salah');
			}
		}

		public function home(){
			$this->load->view('header_ebank');
			$this->load->view('home_ebank');
			$this->load->view('footer_ebank');
		}

		public function update_password(){
			$this->load->view('header_ebank');
			$this->load->view('form_updatepass');
			$this->load->view('footer_ebank');
		}

		public function update_proses(){
			$this->pass=$_POST['pass'];
			$this->newpass=$_POST['newpass'];
			$this->repass=$_POST['repass'];
			$this->user->username = $this->session->userdata('username');
			$row = $this->user->selectpass();
			$this->user->password = $row->Password;
			if($this->pass == $this->user->password){
				if($this->newpass == $this->repass){
					$this->user->updatePassword($this->newpass);
					redirect('Notif/ubah_pass');
				}else 
					redirect('E_banking/update_password?error=tidak_sama');	
			}else 
				redirect('E_banking/update_password?error=salah');
			
		}

		public function tampil_mutasi(){
			$this->load->view('header_ebank');
			$this->mutasi();
			$this->load->view('footer_ebank');
		}

		public function mutasi(){
			$this->vmutasi->norek = $this->session->userdata('norek');
			$row = $this->vmutasi->mutasi();
			$this->load->view('tampil_mutasi', ['row'=>$row]);
		}
		public function tampil_saldo(){
			$this->load->view('header_ebank');
			$this->saldo();
			$this->load->view('footer_ebank');
		}
		public function saldo(){
			$this->vsaldo->norek = $this->session->userdata('norek');
			$data = $this->vsaldo->saldo();
			$row = $data->Saldo;
			$this->load->view('tampil_saldo', ['row'=>$row]);
		}

		public function logout(){
			if($this->session->has_userdata('username')){
				$this->session->sess_destroy();
				redirect('E_banking');
			}		
		}

		public function transfer(){
			$this->load->view('header_ebank');
			$this->load->view('form_transfer');
			$this->load->view('footer_ebank');
		}

		public function cekTujuan(){
			$model = $this->Rekening;

			$model->norek = $_POST['tujuan'];
			$nominal = $_POST['nominal'];

			if(empty($model->norek) || empty($nominal)){
				redirect('E_banking/transfer?error=kosong');
			}else{
				$this->session->set_userdata('nominal', $nominal);
				$this->session->set_userdata('tujuan', $model->norek);
				$row = $model->norekTujuan();
				if($row){
					$this->load->view('konfirmasi', ['row'=>$row]);
				}else{
					redirect('E_banking/transfer?error=salah');
				}
			}
		}

		public function konfirmasi(){
			$this->load->view('header_ebank');
			$this->cekTujuan();
			$this->load->view('footer_ebank');
		}

		public function proses_transfer(){
			$this->update_pengirim();
			$this->update_penerima();
			redirect('Notif/transfer');
		}

		public function update_pengirim(){
			$model = $this->Rekening;
			$trans = $this->Transaksi;
			$trans->status = 'OUT';
			$trans->tgl = date("y/m/d h:i:s");
			$this->session->set_userdata('tgl', $trans->tgl);
			$trans->jenis = 'Transfer'; 
			$model->norek = $this->session->userdata('norek');
			$trans->norek = $model->norek;
			$nominal = $this->session->userdata('nominal');
			$trans->nilai = $nominal;
			$row = $model->saldo();
			$model->saldo = $row->Saldo;
			$model->saldo = $model->saldo - $nominal;
			$model->updateSaldo();
			$trans->insert();
		}

		public function update_penerima(){
			$model = $this->Rekening;
			$trans = $this->Transaksi;
			$trans->status = 'IN';
			$trans->tgl = date("y/m/d h:i:s");
			$trans->jenis = 'Transfer';

			$model->norek = $this->session->userdata('tujuan');
			$trans->norek = $model->norek;
			$nominal = $this->session->userdata('nominal');
			$trans->nilai = $nominal;
			$row = $model->saldo();
			$model->saldo = $row->Saldo;
			$model->saldo = $model->saldo + $nominal;
			$model->updateSaldo();
			$trans->insert();
		}

		public function pulsa(){
			$this->load->view('header_ebank');
			$this->load->view('form_pulsa');
			$this->load->view('footer_ebank');
		}

		public function nominal(){
			$this->load->view('header_ebank');
			$this->nomer();
			$this->load->view('footer_ebank');	
		}

		public function nomer(){
			$model = $this->Rekening;
			$no = $_POST['tujuan'];
			if(empty($no)){
				redirect('E_Banking/pulsa?error=kosong');
			}else{
				$this->session->set_userdata('no', $no);
				$this->load->view('nominal_pulsa');
			}
		}

		public function proses_pulsa(){
			$this->update_saldo();
			redirect('Notif/pulsa');
		}

		public function update_saldo(){
			$model = $this->Rekening;
			$trans = $this->Transaksi;

			$trans->nilai = $_POST['nominal'];
			if(empty($trans->nilai)){
				redirect('E_banking/nominal?error=kosong');
			}else{
				$this->session->set_userdata('nominal', $trans->nilai);
				$trans->status = 'OUT';
				$trans->tgl = date("y/m/d h:m:s");
				$this->session->set_userdata('tgl', $trans->tgl);
				$trans->jenis = 'Isi Pulsa'; 
				$model->norek = $this->session->userdata('norek');
				$trans->norek = $model->norek;
				$row = $model->saldo();
				$model->saldo = $row->Saldo;
				$model->saldo = $model->saldo - $trans->nilai;
				$model->updateSaldo();
				$trans->insert();
			}
		}
	}