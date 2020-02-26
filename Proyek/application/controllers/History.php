<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class History extends CI_Controller {

    
        public function index()
        {
            $data['invoice'] = $this->model_invoice->tampil_data();
            $this->load->view('Template_user/header');
            $this->load->view('Template_user/sidebar');
            $this->load->view('Admin/History',$data) ;
            $this->load->view('Template_user/footer');
        }

        public function detail($id_transaksi)
        {
            $data['transaksi'] = $this->model_invoice->ambil_id_invoice($id_transaksi);
            $data['invoice'] = $this->model_invoice->ambil_id_pesanan($id_transaksi);
            $this->load->view('Template_user/header');
            $this->load->view('Template_user/sidebar');
            $this->load->view('Admin/History',$data) ;
            $this->load->view('Template_user/footer');
        }
    
    }
    
    /* End of file invoice.php */
    
?>