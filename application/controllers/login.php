<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class login extends CI_Controller {
    
        public function index()
        {
            $data['title']='Login';
            $data['pesan']='Masukkan Username dan Password';
            $this->load->view('template/header_login', $data);
            $this->load->view('login/index');
            $this->load->view('template/footer');                     
        }
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('login_model');
            $this->load->library('session');
            

        }
        
        public function proses_login()
        {

            $username = $this->input->post('uname1');
            $password = $this->input->post('pass1');

            $cekLogin = $this->login_model->login($username,$password);
            if($cekLogin)
            {
                foreach($cekLogin as $row);
                $this->session->set_userdata('user',$row["username"]);
                $this->session->set_userdata('level',$row["level"]);

                if($this->session->userdata('level') == 'admin')
                {
                    redirect('mahasiswa/index');
                }
                else if($this->session->userdata('level') == 'user')
                {
                    redirect('siswa/index');
                }            
            }
            else
            {
                // var_dump($cekLogin);                
                $this->session->set_flashdata('login', 'Password / username Salah');
                redirect('login/index' , 'refresh');
            }
        }
        public function logout()
        {
            $this->session->unset_userdata('user');
            $this->session->unset_userdata('level');            
            redirect('login','refresh');
        }
    }
    
    /* End of file login.php */
    
?>