<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class belajar extends CI_Controller {
    
        public function index($name ="Darryl")
        {        
            $data ['Title']="Belajar";
            $data ['name']= $name;
            $this->load->view ('Template/header');
            $this->load->view ('belajar/index',$data);
            $this->load->view ('Template/footer');
        }
            
    }
    
    /* End of file Controllername.php */
?>