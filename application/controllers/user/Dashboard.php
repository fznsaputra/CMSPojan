<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // if(($this->session->userdata('level')!='Admin')){
		// 	redirect('home');
		}
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('galeri');
		$this->db->limit(3);
		$galeri = $this->db->get()->result_array();

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
		$this->db->limit(6);
        $konten = $this->db->get()->result_array();
		
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
		$this->db->limit(5);
        $recent = $this->db->get()->result_array();
		$data = array(
			'judul' => " Beranda | CMSPojan",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'caraousel' => $caraousel,
			'recent' => $recent,
			'galeri' => $galeri,

		);
		$this->load->view('user/dashboard', $data);
	}
	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
		$this->db->limit(5);
        $recent = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'judul' => $nama_kategori." | CMSPojan",
			'nama_kategori' => $nama_kategori,
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'recent' => $recent,
			'caraousel' => $caraousel,

		);
		$this->load->view('user/kategori', $data);
	}
	public function artikel($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug', $id);
		$konten = $this->db->get()->row();

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
		$this->db->limit(5);
        $recent = $this->db->get()->result_array();
		$data = array(
			'judul' => "Konten | CMSPojan",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'recent' => $recent,


		);
		$this->load->view('user/detail_konten', $data);
	}
	public function galeri()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('galeri');
		$galeri = $this->db->get()->result_array();

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();
		
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
		$this->db->limit(5);
        $recent = $this->db->get()->result_array();
		$data = array(
			'judul' => " Beranda | CMSPojan",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'caraousel' => $caraousel,
			'recent' => $recent,
			'galeri' => $galeri,

		);
		$this->load->view('user/galeri', $data);
	}
	public function search(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
		$this->db->like('a.judul', $this->input->post('search'));
		$konten = $this->db->get()->result_array();
		
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
		$this->db->limit(5);
        $recent = $this->db->get()->result_array();

		$data = array(
			'judul' => "Konten | CMSPojan",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'recent' => $recent,

		);
		if ($konten == NULL){
			$this->load->view('user/search2', $data);
			return;
		}
		$this->load->view('user/search', $data);
		
	}
}
