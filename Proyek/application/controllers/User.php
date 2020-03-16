<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User extends CI_Controller {
    
        public function index()
        {
            $this->load->model('model_auth');

            $data['user'] = $this->model_auth->getUser();
            $this->load->view('Template_user/header');
            $this->load->view('Template_user/sidebar');
            $this->load->view('Akun/User_profile',$data) ;
            $this->load->view('Template_user/footer');
        }
    }
    
    /* End of file User.php */
    
?>