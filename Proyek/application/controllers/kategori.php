<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class kategori extends CI_Controller {
    
        public function sofa()
        {
            $data['sofa'] = $this->model_kategori->data_sofa()->result();
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('sofa', $data);
            $this->load->view('Template/footer');
        }

        public function kursi()
        {
            $data['kursi'] = $this->model_kategori->data_kursi()->result();
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('kursi', $data);
            $this->load->view('Template/footer');
        }

        public function meja()
        {
            $data['meja'] = $this->model_kategori->data_meja()->result();
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('meja', $data);
            $this->load->view('Template/footer');
        }
    
    }
    
    /* End of file kategori.php */
    
?>