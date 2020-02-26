<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Data_barang extends CI_Controller {

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
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('Template_admin/header');
            $this->load->view('Template_admin/sidebar');
            $this->load->view('Akun/Data_barang', $data) ;
            $this->load->view('Template_admin/footer');
        }

        public function tambah_aksi()
        {
            $nama_barang    = $this->input->post('nama_barang');
            $deskripsi      = $this->input->post('deskripsi');
            $kategori       = $this->input->post('kategori');
            $harga          = $this->input->post('harga');
            $stok           = $this->input->post('stok');
            $gambar         = $_FILES['gambar']['name'];
            if ($gambar = ''){}else{  
                $config ['upload_path'] = './uploads';
                $config ['allowed_types'] = 'jpg|jpeg|png|gif';
                
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar Gagal Upload :(";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }
            $data = array(
                'nama_barang'   => $nama_barang,
                'deskripsi'     => $deskripsi,
                'kategori'         => $kategori,
                'harga'         => $harga,
                'stok'          => $stok,
                'gambar'        => $gambar
            );

            $this->model_barang->tambah_barang($data, 'product');
            
            redirect('Akun_admin/Data_barang');
            
        }

        public function edit($id)
        {
            $where = array('id_barang' => $id);
            $data['product'] = $this->model_barang->edit_barang($where, 'product')->result();
            $this->load->view('Template_admin/header');
            $this->load->view('Template_admin/sidebar');
            $this->load->view('Edit_barang', $data) ;
            $this->load->view('Template_admin/footer');
        }

        public function update()
        {
            $id             = $this->input->post('id_barang');
            $nama_barang    = $this->input->post('nama_barang');
            $deskripsi      = $this->input->post('deskripsi');
            $kategori       = $this->input->post('kategori');
            $harga          = $this->input->post('harga');
            $stok           = $this->input->post('stok');


            $data = array(
                'nama_barang'   => $nama_barang,
                'deskripsi'     => $deskripsi,
                'kategori'      => $kategori,
                'harga'         => $harga,
                'stok'          => $stok,
            );

            $where = array(
                'id_barang' => $id
            );

            $this->model_barang->update_data($where,$data,'product');
            
            redirect('Akun_admin/Data_barang');
            
        }

        public function hapus($id)
        {
            $where = array('id_barang' => $id);
            $this->model_barang->hapus_data($where,'product');
            redirect('Akun_admin/Data_barang/index');
        }

    
    }
    
    /* End of file Controllername.php */
    
?>