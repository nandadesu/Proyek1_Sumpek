<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class model_history extends CI_Model {
    
        public function index(){
            date_default_timezone_set('Asia/Jakarta');
            $nama       = $this->input->post('nama');
            $alamat       = $this->input->post('alamat');

            $ar = array(
                'nama'      => $nama,
                'alamat'    => $alamat,
                'tglPesan'    => date('Y-m-d H:i:s'),
                'batasBayar'    => date('Y-m-d H:i:s',mktime(date('H'),
                date('i'),date('s'),date('m'),date('d') + 1 ,date('Y')))
            );
            $this->db->insert('transaksi', $ar);
            $id_invoice = $this->db->insert_id();

            foreach($this->cart->contents() as $item){
                $data  = array(
                    'id_transaksi'    => $id_invoice,
                    'id_barang'     => $item['id'],
                    'nama_barang'   => $item['name'],
                    'jumlah'        => $item['qty'],
                    'harga'         => $item['price'],
                );
                $this->db->insert('invoice', $data);
               
            }
            return TRUE;
        }

        public function tampil_data($id){
            $result = $this->db->where('id_user',$id)->get('transaksi');
            if($result->num_rows() > 0){
                return $result->result();
            }else {
                return FALSE;
            }
        }

        public function ambil_id_invoice($id_transaksi){
            $result = $this->db->where('id', $id_transaksi)->limit(1)->get('transaksi');
            if($result->num_rows() > 0){
                return $result->row();
            }else {
                return FALSE;
            }
        }

        public function ambil_id_pesanan($id_transaksi){
            $result = $this->db->where('id_transaksi', $id_transaksi)->get('invoice');
            if($result->num_rows() > 0){
                return $result->result();
            }else {
                return FALSE;
            }
        }
    }
    
    /* End of file model_invoice.php */
    
?>