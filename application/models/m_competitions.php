<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class M_competitions extends CI_Model{
        public function getData(){
            $query = $this->db->query('select * from tbm_competitions');
            return $query->result_array();
        }

        public function find($id){
            return $this->db->where('id', $id)->get('tbm_competitions')->row();
        }
    }
    
?>