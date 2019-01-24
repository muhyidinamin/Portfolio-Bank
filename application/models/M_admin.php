<?php 
	
	class M_admin extends CI_Model {

        public $username;
        public $password;

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function cekAdmin(){
			$query = $this->db->get_where('tb_admin',['Admin'=>$this->username, 'Password'=>$this->password]);
			$row = $query->row();
			if(isset($this->username) && isset($this->password)){
				if($this->username === $row->Admin && $this->password ===  $row->Password){
					$this->session->set_userdata('admin', $row->Admin);
					return TRUE;
				}
				else{
					return FALSE;
				}
			}
			else
				return FALSE;
		}			
	}