<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login_model extends CI_Model 
    {
    
        function login($username,$password)
        {
            $this->db->select("username,password,level");
            $this->db->from('user');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $this->db->limit(1);

            $query= $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }        
    }   