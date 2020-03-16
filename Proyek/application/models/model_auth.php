<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class model_auth extends CI_Model {
    
        public function cek_login(){
            $username = set_value('username');
            $password = set_value('password');

            $result = $this->db->where('username',$username)->where('password', $password)->limit(1)->get('user');
            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return array();
            }
        }

        
        public function getUser(){
            return $this->db->get('user')->result_array();
         }

        public function login($username, $password){
            $this->db->select('username, password, role_id');
            $this->db->from('user');
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $this->db->limit(1);
    
            $query = $this->db->get();
            if ($query->num_rows()==1) {
                return $query->result();
            } else{
                return false;
            }
        }
    
     
    
    }
    
    /* End of file auth.php */
    
?>