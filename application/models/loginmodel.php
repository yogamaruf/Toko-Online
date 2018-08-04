<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginmodel extends CI_Model {
    
    public function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        return $this->db->get('admin'); 
    }

    public function logincus($email,$password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        return $this->db->get('customer'); 
    }
    
    public function cek($email) {
        $this->db->where('email', $email);

        return $this->db->get('customer'); 
    }

    public function getlupa($simpan,$id) {
        return $this->db->where('idcustom',$id)->update('customer',$simpan);
    }

    public function tambah($simpan) {
        return $this->db->insert('admin',$simpan);
    }

}