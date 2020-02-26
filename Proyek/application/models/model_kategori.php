<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class model_kategori extends CI_Model {
    
        public function data_sofa(){
            return $this->db->get_where("product", array('kategori'=>'sofa'));
        }

        public function data_kursi(){
            return $this->db->get_where("product", array('kategori'=>'kursi'));
        }

        public function data_meja(){
            return $this->db->get_where("product", array('kategori'=>'meja'));
        }
    
    
    }
    
    /* End of file model_kategori.php */
    
?>