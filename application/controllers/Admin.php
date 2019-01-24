<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends CI_Controller{
		
		public $kurs = NULL;
		public $trans 	= NULL;
		public $nasabah = NULL;
		public $user = NULL;
		public $promo = NULL;

		public function __construct(){
			parent::__construct();
			$this->load->model('M_admin');
			$this->load->model('Kurs');
			$this->load->model('Transaksi');
			$this->load->model('M_nasabah');
			$this->load->model('Username');
			$this->load->model('Promo');
			$this->kurs = $this->Kurs;
			$this->trans= $this->Transaksi;
			$this->nasabah= $this->M_nasabah;
			$this->user= $this->Username;
			$this->promo = $this->Promo;
		}

		public function index(){
			$this->load->view('header_beranda');
			$this->load->view('form_admin');
			$this->load->view('footer_beranda');
		}

		public function homepage(){
			$this->load->view('header_admin');
			$this->load->view('footer_admin');
		}

		public function proses(){
			$model = $this->M_admin;
			$model->username = $_POST['username'];
			$model->password = $_POST['password'];
			if($model->cekAdmin()){
				redirect('Admin/homepage');
			}else{
				redirect('Admin?error=salah');
			}
		}

		public function tampilTransaksi(){
			$this->load->view('header_admin');
			$this->Transaksi();
			$this->load->view('footer_admin');
		}
		public function Transaksi(){
			$row = $this->trans->daftarTransaksi();
			$this->load->view('tampil_transaksi', ['row'=>$row]);
		}
		public function TampilNasabah(){
			$this->load->view('header_admin');
			$this->nasabah();
			$this->load->view('footer_admin');
		}
		public function nasabah(){
			$row = $this->nasabah->tampilNasabah();
			$this->load->view('tampil_nasabah', ['row'=>$row]);
		}

		public function tampil_search(){
			$this->load->view('header_admin');
			$this->search();
			$this->load->view('footer_admin');	
		}

		public function search(){
			$cari = $_POST['search'];
			$row = $this->nasabah->search($cari);
			$this->load->view('tampil_search', ['row'=>$row]);
		}


		public function kurs(){
			$this->load->view('header_admin');
			$this->tampil_kurs();
			$this->load->view('footer_admin');
		}

		public function tampil_kurs(){
			$row = $this->kurs->tampilKurs();
			$this->load->view('tampil_kurs', ['row'=>$row]);
		}

		public function update_kurs($id){
			$this->load->view('header_admin');
			$this->update($id);
			$this->load->view('footer_admin');
		}

		public function update($id){
			if(isset($_POST['Submit'])){
				$this->kurs->kode = $_POST['kode'];
				$this->kurs->nama = $_POST['nama'];
				$this->kurs->jual = $_POST['jual'];
				$this->kurs->beli = $_POST['beli'];
				if(empty($this->kurs->kode) || empty($this->kurs->nama)||empty($this->kurs->jual)||empty($this->kurs->beli)){
					redirect('Admin/update_kurs/'.$id.'?error=kosong');
				}else{
					$this->kurs->update();
					redirect('Admin/kurs');
				}
			}else{
				$query = $this->db->query("SELECT * FROM tb_kurs WHERE Kode='$id'");
				$data = $query->row();
				$this->kurs->kode=$data->Kode;
				$this->kurs->nama=$data->Mata_uang;
				$this->kurs->jual=$data->Jual;
				$this->kurs->beli=$data->Beli;
				$this->load->view('form_kurs', ['kurs'=>$this->kurs]);
			}
		}

		public function tampil_user(){
			$this->load->view('header_admin');
			$this->tampil();
			$this->load->view('footer_admin');
		}

		public function tampil(){
			$row = $this->user->tampilData();
			$this->load->view('delete_user', ['row'=>$row]);
		}

		public function delete($id){
			$this->user->username = $id;
			$this->user->delete();
			redirect('Admin/tampil_user');
		}

		public function logout(){
			if($this->session->has_userdata('admin')){
				$this->session->sess_destroy();
				redirect('Admin');
			}		
		}

		public function posting_promo(){
			$this->load->view('header_admin');
			$this->load->view('form_promo');
			$this->load->view('footer_admin');
		}

		public function posting(){
				$config['upload_path'] = BASEPATH.'../assets/img/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '1366';
				$config['max_height'] = '768';
 
				$this->load->library('upload', $config);
				$this->promo->judul = $_POST['judul'];
				$this->promo->gambar = $_FILES['userfile']['name'];
				$this->promo->deskripsi = $_POST['deskripsi'];
				$this->promo->insert();
				//$upload = $this->upload->do_upload();
				//if($this->upload->do_upload()){
					//$data = array('upload_data' => $this->upload->data());
					redirect('Notif/posting');
				//}else{
				//}
		}
	}