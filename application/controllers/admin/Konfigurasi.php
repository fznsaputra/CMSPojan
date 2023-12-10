<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {

	
	
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
		$this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $data = array(
			'konfig' => $konfig
		);
        $this->load->view('admin/konfigurasi', $data);
	}
    public function update (){  
        // $namafoto = $this->input->post('foto');
        // $config['upload_path']          = 'assets/upload/konfig';
        // $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        // $config['file_name']            = $namafoto;
        // $config['overwrite']            = true;
        // $config['allowed_types']        = '*';
        // $this->load->library('upload', $config);
        // if($_FILES['foto']['size'] >= 500 * 1024){
        //     $this->session->set_flashdata('alert', '
        //         <div class="alert alert-danger alert-dismissible" role="alert">
        //         Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
        //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //         </div>
        //             ');
        //     redirect('admin/konfigurasi');  
        // }  elseif( ! $this->upload->do_upload('foto')){
        //     $error = array('error' => $this->upload->display_errors());
            
        // }else{
        //     $data = array('upload_data' => $this->upload->data());
        // }  
        $where = array(
            'id_konfigurasi' => 1
        );
        $data = array(
            'judul_website' => $this->input->post('judul'),
            'foto' => $this->input->post('foto'),
            'profil_website' => $this->input->post('profil_web'),
            'instagram' => $this->input->post('instagram'),
            'facebook' => $this->input->post('facebook'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'no_wa' => $this->input->post('no_wa'),
        );
        $this->db->update('konfigurasi',$data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Data Berhasil Diperbaharui..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/konfigurasi');
	}
	// public function update (){
    //     $data = array(
    //         'nama_kategori' => $this->input->post('nama_kategori'),
    //     );
    //     $where = $this->input->post('id_kategori');
    //     $this->db->where('id_kategori' ,$where);
    //     $this->db->update('kategori',$data);
    //     $this->session->set_flashdata('alert', '
    //     <div class="alert alert-info alert-dismissible fade show" role="alert">
    //                             <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Data Berhasil Diperbaharui..
    //                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //                         </div>
    //     ');
    //     redirect('admin/user');
	// }
	// public function hapus($id){
    //     $where = array('id_user' => $id);
    //     $this->db->delete('user',$where);
    //     $this->session->set_flashdata('alert', '
    //     <div class="alert alert-success alert-dismissible fade show" role="alert">
    //                             <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Data Berhasil Dihapus..
    //                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //                         </div>
    //     ');
    //     redirect('admin/user');
    // }
	// public function simpan()
    // {
    //     $username = $this->input->post('username');
    //     $this->db->from('user');
    //     $this->db->where('username', $username);
    //     $cek = $this->db->get()->result_array();
    //     if ($cek <> NULL) {
    //         $this->session->set_flashdata('alert', '
    //     <div class="alert alert-danger alert-dismissible fade show" role="alert">
    //                             <i class="fa fa-exclamation-circle me-2"></i>Waduh, Usernamenya Sudah Digunakan..
    //                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //                         </div>
    //     ');
    //     redirect('admin/user');
    //     }
    //     $this->User_model->simpan();
    //     $this->session->set_flashdata('alert', '
    //     <div class="alert alert-success alert-dismissible fade show" role="alert">
    //                             <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Data Berhasil Dimasukkan..
    //                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //                         </div>
    //     ');
    //     redirect('admin/user');
    // }
   
}



