<?php  

  class Upload extends CI_Controller {
          
    public function __construct() {
      parent::__construct();
    }

    public function index() {
      if(isset($_POST['btnSubmit'])) {
        $config = [
          'upload_path' =>'./uploads/',
          'allowed_types' => 'jpg|jpeg|gif|png',
          'max_size' => 20000
        ];

        $this->load->library('upload', $config);

        if($this->upload->do_upload()){
          $this->load->view('upload_success_view',['data'=>$this->upload->data()]);
        }else{
          $this->load->view('upload_form_view');
        }
      }else{
        $this->load->view('upload_form_view');
      }
    }
  }

?>