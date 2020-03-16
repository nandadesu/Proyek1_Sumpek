<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
        
        public function index()
        {
            $id = $this->session->flashdata('id_user');
            $data['barang']= $this->model_barang->tampil_data()->result();
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('Admin/Admin',$data) ;
            $this->load->view('Template/footer');
        }

        public function tambah_keranjang($id)
        {
            $barang = $this->model_barang->find($id);
            $jumlah = $this->input->post('qty');
            $data = array(
                'id'            => $barang->id_barang,
                'qty'           => $jumlah,
                'price'         => $barang->harga,
                'name'          => $barang->nama_barang
            );
            $this->cart->insert($data);
            redirect('Admin','refresh');
            
        }

        public function detail_keranjang()
        {
            $data['barang']= $this->model_barang->tampil_data()->result();
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('Admin/detail_keranjang') ;
            $this->load->view('Template/footer');
        }

        public function hapus_keranjang()
        {
            $this->cart->destroy();
            redirect('Admin/detail_keranjang');
        }

    
        public function pembayaran()
        {
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('Admin/pembayaran') ;
            $this->load->view('Template/footer');
        }

        public function proses_pesanan()
        {
            $is_processed = $this->model_invoice->index();
            if($is_processed){
                $this->cart->destroy();
                $this->load->view('Template/header');
                $this->load->view('Template/sidebar');
                $this->load->view('Admin/proses') ;
                $this->load->view('Template/footer');
            }else{
                echo "Maaf, Pesanan Anda Gagal diproses :(";
            }
            
        }
        public function detail($id_barang)
        {
            $data['barang']= $this->model_barang->detail_barang($id_barang);
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('Admin/detail_barang',$data) ;
            $this->load->view('Template/footer');
        }
        public function search(){
            $keyword = $this->input->post('keyword');
            $data['barang']=$this->model_barang->get_keyword($keyword);
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('Admin/Admin',$data) ;
            $this->load->view('Template/footer');

        }
    
    }
    
    /* End of file Admin.php */
    
?>