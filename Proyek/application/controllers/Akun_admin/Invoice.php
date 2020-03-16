<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class invoice extends CI_Controller {

       
    
        public function index()
        {
            $data['transaksi'] = $this->model_invoice->tampil_data();
            $this->load->view('Template_admin/header');
            $this->load->view('Template_admin/sidebar');
            $this->load->view('Admin/invoice',$data) ;
            $this->load->view('Template_admin/footer');
        }

        public function detail($id_invoice)
        {
            $data['transaksi'] = $this->model_invoice->ambil_id_invoice($id_invoice);
            $data['invoice'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
            $this->load->view('Template_admin/header');
            $this->load->view('Template_admin/sidebar');
            $this->load->view('Admin/detail_invoice',$data) ;
            $this->load->view('Template_admin/footer');
        }
    
    }
    
    /* End of file invoice.php */
    
?>