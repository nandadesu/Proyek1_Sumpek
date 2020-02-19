<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class invoice extends CI_Controller {

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
            $data['invoice'] = $this->model_invoice->tampil_data();
            $this->load->view('Template_admin/header');
            $this->load->view('Template_admin/sidebar');
            $this->load->view('Admin/invoice',$data) ;
            $this->load->view('Template_admin/footer');
        }

        public function detail($id_transaksi)
        {
            $data['transaksi'] = $this->model_invoice->ambil_id_invoice($id_transaksi);
            $data['invoice'] = $this->model_invoice->ambil_id_pesanan($id_transaksi);
            $this->load->view('Template_admin/header');
            $this->load->view('Template_admin/sidebar');
            $this->load->view('Admin/detail_invoice',$data) ;
            $this->load->view('Template_admin/footer');
        }
    
    }
    
    /* End of file invoice.php */
    
?>