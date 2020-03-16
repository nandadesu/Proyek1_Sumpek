<?php  
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin_akun extends CI_Controller {

        public function __construct(){
            parent::__construct();

            if($this->session->userdata('role_id') != '1'){
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            
              redirect('Auth/login');
              
            }
        }

        public function index()
        {   
            $data['title']='Admin Page';
            $this->load->view('Template_admin/Header', $data);
            $this->load->view('Template_admin/Sidebar');
            $this->load->view('Akun/Data_barang');
            $this->load->view('Template_admin/Footer');
        }
    
    }
    
    /* End of file Controllername.php */
    
?>