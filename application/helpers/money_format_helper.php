<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    if (!function_exists('rupiah')) {
        function rupiah($amount){
            $result = 'Rp ' . number_format($amount,0,',','.');
            return $result;
        }
    }

    // example 
        // $this->load->helpers('money_format');
        // echo rupiah('20000');
        
?>