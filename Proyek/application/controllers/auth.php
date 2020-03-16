<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Auth extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('model_auth');
        }

    
        public function login()
        {
            $this->form_validation->set_rules('username' , 'Username' , 'required');
            $this->form_validation->set_rules('password' , 'Password' , 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('Template/header');
                $this->load->view('form_login');
                $this->load->view('Template/footer');
            }else{
                $auth = $this->model_auth->cek_login();

                if($auth == FALSE){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username atau Password Salah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                  
                  redirect('Auth/login');
                  
                    
                }else{
                    $this->session->set_userdata('username',$auth->username);
                    $this->session->set_userdata('role_id',$auth->role_id);
                    $this->session->set_userdata('id_user',$auth->id);

                    $this->session->set_flashdata('id_user',$auth->id);

                    switch($auth->role_id){
                        case 1 : 
                            redirect('Akun_admin/Data_barang');
                            break;
                        case 2 : 
                            redirect('History/index');
                            break;
                        default: break;
                    }
                }
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            
            redirect('auth/login');
            
        }
    
    }
    
    /* End of file auth.php */
    
?>