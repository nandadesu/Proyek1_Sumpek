<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class History extends CI_Controller {
        public function index()
        {
            $id = $this->session->flashdata('id_user');
            $data['invoice'] = $this->model_history->tampil_data($id);
            $this->load->view('Template_user/header');
            $this->load->view('Template_user/sidebar');
            $this->load->view('Admin/History',$data) ;
            $this->load->view('Template_user/footer');
        }

        public function detail($id_transaksi)
        {
            $data['transaksi'] = $this->model_history->ambil_id_invoice($id_transaksi);
            $data['invoice'] = $this->model_history->ambil_id_pesanan($id_transaksi);
            $this->load->view('Template_user/header');
            $this->load->view('Template_user/sidebar');
            $this->load->view('Admin/History',$data) ;
            $this->load->view('Template_user/footer');
        }
    
    }
    
    /* End of file invoice.php */
    
?>