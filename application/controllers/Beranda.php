<?php

	class Beranda extends CI_Controller{

		public $promo;

		public function __construct(){
			parent::__construct();
			$this->load->model('Promo');
			$this->promo = $this->Promo;
		}

		public function index(){
			$this->load->view('header_beranda');
			$this->load->view('homepage');
			$this->load->view('footer_beranda');
		}

		public function cabang(){
			$this->load->view('header_beranda');
			$this->load->view('cabang');
			$this->load->view('footer_beranda');
		}

		public function contact(){
			$this->load->view('header_beranda');
			$this->load->view('contact');
			$this->load->view('footer_beranda');
		}

		public function privasi(){
			$this->load->view('header_beranda');
			$this->load->view('view_privasi');
			$this->load->view('footer_beranda');
		}

		public function promo(){
			$this->load->view('header_beranda');
			$this->tampil_promo();
			$this->load->view('footer_beranda');
		}

		public function tampil_promo(){
			$row = $this->promo->read();
			$this->load->view('tabel_promo', ['row'=>$row]);			
		}
	}