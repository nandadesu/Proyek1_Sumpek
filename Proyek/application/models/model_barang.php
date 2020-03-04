<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Model_barang extends CI_Model {
        public function tampil_data(){
            return $this->db->get('product');
        }
        public function tambah_barang($data,$table){
            $this->db->insert($table, $data);
        }
        public function edit_barang($where,$table){
            return $this->db->get_where($table, $where);
        }
        public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table, $data);
        }
        public function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function find($id){
            $result = $this ->db->where('id_barang',$id)
                            ->limit(1)
                            ->get('product');
            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return array();
            }
        }

        public function detail_barang($id_barang){
            $result = $this ->db->where('id_barang',$id_barang)->get('product');
            return $this->db->get()->result();
            if($result->num_rows() > 0){
                return $result->result();
            }else{
                return FALSE;
            }
        }

        public function get_keyword($keyword){
            $this->db->from('product');
            $this->db->like('nama_barang',$keyword);
            $this->db->or_like('kategori',$keyword);
            return $this->db->get()->result();

        }




        
    }
    
    /* End of file ModelName.php */
    
?>