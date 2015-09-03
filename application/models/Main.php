<?php
    /**
     *
     */
    class Main extends CI_Model
    {
        function login($username, $password){
            $this->db->where('password', $password);
            $this->db->where('username', $username);
            return $this->db->get('tbl_accounts')->row_array();
        }
    }

 ?>
