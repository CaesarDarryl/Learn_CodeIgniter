<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class mahasiswa_model extends CI_Model {
    
        //Function Get data dari database, untuk menampilkan saja
        public function getAllMahasiswa()
        {
            $query=$this->db->get('mahasiswa');
            return $query->result_array();
        }
        //Function untuk Post / menambah data pada database.
        public function tambahDataMhs()
        {
            $data = array(
            "nama" => $this->input->post('nama'),
            "NIM" => $this->input->post('nim'),
            "email" => $this->input->post('email'),
            "jurusan" => $this->input->post('jurusan')
            );            
            //insert ke database nya
            $this->db->insert('mahasiswa', $data);
            //mengarahkan ke page lain.
        }
        //bikin Model untuk hapus data.
        public function hapusMhs($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('mahasiswa');            
        }    
        public function getMhsId($id)
        {
            return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
            
        }
        public function editDataMhs($id)
        {
            $data = array(
                "id" => $this->input->post('id'),
                "nama" => $this->input->post('nama'),
                "NIM" => $this->input->post('nim'),
                "email" => $this->input->post('email'),
                "jurusan" => $this->input->post('jurusan')
            ); 

            $this->db->where('id', $id);
            $this->db->update('mahasiswa',$data);            
        }
        public function cariDataMhs()
        {
            $keyword = $this->input->post('keyword');
            $this->db->like('nama' , $keyword);
            $this->db->or_like('jurusan',$keyword);
            return($this->db->get('mahasiswa')->result_array());
        }
    }
    /* End of file Controllername.php */        
?>