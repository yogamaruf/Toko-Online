<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginmodel extends CI_Model {
    
    public function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('admin'); 
    }
    
    public function tambah($simpan) {
        return $this->db->insert('admin',$simpan);
    }

}