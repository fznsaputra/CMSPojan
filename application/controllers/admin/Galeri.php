<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	
	
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
		$this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $data = array(
			'galeri' => $galeri
		);
        $this->load->view('admin/galeri', $data);
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
        redirect('admin/konten');
	}
	public function hapus($id){
        $filename=FCPATH.'/assets/upload/galeri/'.$id;
        if (file_exists($filename)){
            unlink("./assets/upload/galeri/".$id);
        }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('galeri',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Data Berhasil Dihapus..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/galeri');
    }
	public function simpan()
    {
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/galeri';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/galeri');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
        
        
        
        $data = array(
            'judul'          =>     $this->input->post('judul'),
            'foto'           =>     $namafoto,
            'tanggal'        =>     date('Y-m-d'),

        );
        $this->db->insert('galeri',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Caraousel Berhasil Dimasukkan..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/galeri');
    }
    public function update2()
    {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/konten';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/konten');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            
        }else{
            $data = array('upload_data' => $this->upload->data());
        }  
        
        $data = array(
            'judul'          =>     $this->input->post('judul'),
            'id_kategori'    =>     $this->input->post('id_kategori'),
            'keterangan'     =>     $this->input->post('keterangan'), 
            'tanggal'        =>     date('Y-m-d'),

        );
        $where = array(
            'foto' => $this->input->post('nama_foto')
        );
        $this->db->update('konten',$data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Alhamdulillah, Kategori Berhasil Diperbaharui..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('admin/konten');
    }
    }



