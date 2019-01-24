<?php 
	
	class Username extends CI_Model {
		public $username;
		public $norek;	
		public $password;	

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function loginUser(){
			$query = $this->db->get_where('tb_userbanking',['Username'=>$this->username, 'Password'=>$this->password]);
			$row = $query->row();
			if(isset($this->username) && isset($this->password)){
				if($this->username === $row->Username && $this->password ===  $row->Password){
					$this->session->set_userdata('username', $row->Username);
					$this->session->set_userdata('norek',$row->No_rek);
					return TRUE;
				}
				else{
					return FALSE;
				}
			}
			else
				return FALSE;
		}		

		public function insert(){
			$sql = sprintf("INSERT INTO tb_userbanking VALUES('%s', '%s', '%s')", $this->username, $this->norek, $this->password);
			$this->db->query($sql);			
		}

		public function tampilData(){
			$sql = "SELECT * FROM tb_userbanking , tb_nasabah, tb_rekening WHERE tb_nasabah.Ktp = tb_rekening.Ktp and tb_rekening.No_rek=tb_userbanking.No_rek";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function updatePassword($passw){
			$sql = sprintf("UPDATE tb_userbanking SET Password = '%s' WHERE Username = '%s'",$passw, $this->username);
			$this->db->query($sql);
		}

		public function selectpass(){
			$query = $this->db->get_where('tb_userbanking',['Username'=>$this->username]);			
			return $query->row(); 
		}

		public function delete(){
			$sql = sprintf("DELETE FROM tb_userbanking WHERE Username='%s'", $this->username);
			$this->db->query($sql);
		}
	}