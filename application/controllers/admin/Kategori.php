<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	
	
	function __construct()
    {
        parent::__construct();
        // if(($this->session->userdata('level')!='Admin')){
		// 	redirect('home');
		if(($this->session->userdata('level')==NULL)){
			redirect('lojin');
		}
	}
    
	
	public function index()
	{
		$this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
			'kategori' => $kategori
		);
        $this->load->view('admin/kategori', $data);
	}
	public function update (){  
        $where = array(
            'id_kategori' => $this->input->post('id_kategori'),
        );
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
        );
        $this->db->update('kategori',$data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Data Berhasil Diperbaharui..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/kategori');
	}
	public function hapus($id){
        $where = array('id_kategori' => $id);
        $this->db->delete('kategori',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Data Berhasil Dihapus..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/kategori');
    }
	public function simpan()
    {
        $username = $this->input->post('nama_kategori');
        $this->db->from('kategori');
        $this->db->where('nama_kategori', $username);
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Waduh, Usernamenya Sudah Digunakan..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/kategori');
        }
        $data = array(
            'nama_kategori'    =>     $this->input->post('nama_kategori', $kategori)

        );
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Kategori Berhasil Dimasukkan..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/kategori');
    }
    public function edit($id){
        $this->db->select('*')->from('kategori');
        $this->db->where('id_kategori', $id);
        $user = $this->db->get()->result_array();
        $data = array('kategori' => $user);
        $this->load->view('admin/kategori', $data);
    }
}



