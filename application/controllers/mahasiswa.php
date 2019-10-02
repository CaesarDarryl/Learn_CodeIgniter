
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        //Penambahan untuk form validasi , seolah2 Tab nim tak boleh kosong
        $this->load->library('form_validation');    
        // Penambahan Session dalam Contructor
        $this->load->library('session');        
    }
    
    public function index()
    {
        //$this->load->database();
        $data['title'] = 'List Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if($this->input->post('keyword'))
        {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMhs();
        }
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }
    
    public function tambah(){        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE){
            $data['title'] = 'Form Menambahkan Data Mahasiswa';
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('template/footer');
        }
        else{
            $this->Mahasiswa_model->tambahDataMhs();
            //Set flash Data , sekedar informasi kalau kita sudah melakukan sesuatu, dan keluar notifnya
            $this->session->set_flashdata('flash-data', 'Data berhasil di tambahkan');
            //Pemindahan halaman 1 ke lain dgn cara refresh
            redirect('mahasiswa','refresh');                       
        }
    }
    //Function Hapus dengan parameter patokan ID
    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusMhs($id);
        $this->session->set_flashdata('flash-data-delete', 'Data sudah di hapus');        
        redirect('mahasiswa','refresh');        
    }
    public function detail($id)
    {
        $data['title'] = "Detail Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getMhsId($id);        
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('template/footer');                
    }
    public function edit($id){        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE){
            $data['title'] = 'Form Menambahkan Data Mahasiswa';
            $data['mahasiswa'] = $this->Mahasiswa_model->getMhsId($id);
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('template/footer');
        }
        else{
            $this->Mahasiswa_model->editDataMhs($id);
            //Set flash Data , sekedar informasi kalau kita sudah melakukan sesuatu, dan keluar notifnya
            $this->session->set_flashdata('flash-data', 'Data berhasil di Edit');
            //Pemindahan halaman 1 ke lain dgn cara refresh
            redirect('mahasiswa','refresh');                       
        }
    }
}
/* End of file mahasiswa.php */
?>