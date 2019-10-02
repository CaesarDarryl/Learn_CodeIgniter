<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class siswa_model extends CI_Model {
    
        //Function Get data dari database, untuk menampilkan saja
        public function getAllSiswa()
        {
            $query=$this->db->get('siswa');
            return $query->result_array();
        }
        //Function untuk Post / menambah data pada database.
        public function tambahDataSiswa()
        {
            $data = array(
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),    
            "Nim" => $this->input->post('nim')       
            );            
            //insert ke database nya
            $this->db->insert('siswa', $data);
            //mengarahkan ke page lain.
            
            redirect('siswa','refresh');
                                                
        }
        public function hapusMhs($ID)
        {
            $this->db->where('ID', $ID);
            $this->db->delete('siswa');
        }
        public function getSiswaId($ID)
        {
            return $this->db->get_where('siswa', ['ID' => $ID])->row_array();
        }
        public function editDataSiswa($ID)
        {
            $data = array(
                "ID" => $this->input->post('ID'),
                "Nama" => $this->input->post('nama'),
                "Alamat" => $this->input->post('alamat'),
                "NIM" => $this->input->post('nim')                         
            ); 
            $this->db->where('ID', $ID);
            $this->db->update('siswa',$data);
        }
        public function cariDataSiswa()
        {
            $keyword = $this->input->post('keyword');
            $this->db->like('Nama',$keyword);           
            return($this->db->get('siswa')->result_array());
        }
    }
    /* End of file Controllername.php */        
?>