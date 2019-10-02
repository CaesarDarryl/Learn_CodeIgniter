<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    
    public function index()
    {
        $data['title'] = 'List Siswa';
        $data['siswa'] = $this->siswa_model->getAllSiswa();
        if($this->input->post('keyword')) //ini adalah Jika teks yg di cari sudah di isi
        {
            $data['siswa'] = $this->siswa_model->cariDataSiswa();
        }
        $this->load->view('template/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('template/footer');        
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');        
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');

        if ($this->form_validation->run() == FALSE){
            $data['title'] = 'Form Menambahkan Data Siswa';
            $this->load->view('template/header', $data);
            $this->load->view('siswa/tambah', $data);
            $this->load->view('template/footer');
        }
        else{
            $this->siswa_model->tambahDataSiswa();
        }
    }
    public function hapus($ID)
    {
        $this->siswa_model->hapusMhs($ID);
        $this->session->set_flashdata('flash-data-delete','Data Sudah di HAPUS !');        
        redirect('siswa','refresh');      
    }
    public function detail($ID)
    {
        $data['title'] = "Detail Siswa";
        $data['siswa'] = $this->siswa_model->getSiswaId($ID);
        $this->load->view('template/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('template/footer');
    }
    public function edit($ID)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');       
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');

        if ($this->form_validation->run() == FALSE){
            $data['title'] = 'Form Edit Data Siswa';
            $data['siswa'] = $this->siswa_model->getSiswaId($ID);
            $this->load->view('template/header', $data);
            $this->load->view('siswa/edit', $data);
            $this->load->view('template/footer');
        }
        else{
            $this->siswa_model->editDataSiswa($ID);
            $this->session->set_flashdata('flash-data','Data berhasil di rubah');        
            redirect('siswa','refresh');
            
        }
    }
}

/* End of file siswa.php */

?>