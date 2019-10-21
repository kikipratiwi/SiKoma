<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class m_users extends CI_Model{
        public function getData(){
            $query = $this->db->query('select id,username from tbm_users');
            return $query->result_array();
        }

        public function find($id){
            return $this->db->where('id', $id)->get('tbm_users')->row();
        }
    }
    
?>