<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {
    function login($where){
        return $this->db->get_where('id_user',$where);
    }
    
    public function simpan(){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'level' => $this->input->post('level'),
        );
        $this->db->insert('user', $data);
    }
    // public function update(){
    //     $data = array(
    //         'nama' => $this->input->post('nama'),
    //         'level' => $this->input->post('level')
    //     );
    //     $where = $this->input->post('id_user');
    //     $this->db->where('id_user' ,$where);
    //     $this->db->update('user',$data);
    // }
}