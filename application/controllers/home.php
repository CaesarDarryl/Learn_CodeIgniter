<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
    
        public function index($name='Andi Bagus',$name2='Dewi Ayu',$name3='Dika Supatra',$name4='Agung Pambudji')
        {
            //echo "Selamat Datang di halaman Home";
            //Pembuatan Array
            $data ['Title']= 'home';
            $data ['name']= $name;
            $data ['name2']= $name2;
            $data ['name3']= $name3;
            $data ['name4']= $name4;
            
            // Digunakan untuk memanggil pada folder view
            $this->load->view ('Template/header',$data);
            $this->load->view ('home/index', $data);
            $this->load->view ('Template/footer',$data);
        }
        public function belajar($belajar='Saya belajar Code igniter')
        {
            //echo "Selamat Datang di halaman Home";
            //Pembuatan Array
            $data ['Title']= 'Belajar';
            $data ['belajar']= $belajar;
            
            // Digunakan untuk memanggil pada folder view
            $this->load->view ('Template/header',$data);
            $this->load->view ('home/index', $data);
            $this->load->view ('Template/footer',$data);
        }
        public function belajarLagi($belajar2='Saya belajar Code Framework')
        {
            //echo "Selamat Datang di halaman Home";
            //Pembuatan Array
            $data ['Title']= 'belajar Lagi';
            $data ['belajar2']= $belajar2;
            
            // Digunakan untuk memanggil pada folder view
            $this->load->view ('Template/header',$data);
            $this->load->view ('home/index', $data);
            $this->load->view ('Template/footer',$data);
        }
    }
    
    /* End of file Controllername.php */
?>