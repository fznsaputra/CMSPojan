<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        if(($this->session->userdata('level')==NULL)){
			redirect('lojin');
		}}
    
	
	public function index()
	{
		$this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
        $this->load->view('admin/user_admin', $data);
	}
	public function update (){
        $data = array(
            'nama' => $this->input->post('nama'),
            'level' => $this->input->post('level')
        );
        $where = $this->input->post('id_user');
        $this->db->where('id_user' ,$where);
        $this->db->update('user',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Data Berhasil Diperbaharui..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/user');
	}
	public function hapus($id){
        $where = array('id_user' => $id);
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Data Berhasil Dihapus..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/user');
    }
	public function simpan()
    {
        $username = $this->input->post('username');
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Waduh, Usernamenya Sudah Digunakan..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/user');
        }
        $this->User_model->simpan();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Data Berhasil Dimasukkan..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/user');
    }
    public function edit($id){
        $this->db->select('*')->from('user');
        $this->db->where('id_user', $id);
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
        $this->load->view('admin/user_edit', $data);
    }
}

