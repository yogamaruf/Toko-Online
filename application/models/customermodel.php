<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customermodel extends CI_Model {

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Menampilkan Data ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	public function getproduk($id) {
		$data   = array();
		$pilih  = array('idkategori' => $id );
		$pilih1 = array('idmerk' => $id );
		$q = $this->db->get_where('produk',$pilih,1);
		$p = $this->db->get_where('produk',$pilih1,1);

		if ($q->num_rows()>0) {
			$data = $q->result_array();
		} elseif ($p->num_rows()>0) {
			$data = $p->result_array();
		}

		return $data;
	} 

	public function getkat() {
		return $this->db->get('kategori');
	}

	public function getmerk() {
		return $this->db->get('merk');
	}

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

}
