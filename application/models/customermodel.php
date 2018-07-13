<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customermodel extends CI_Model {

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Menampilkan Data ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	public function getproduk($id) {
		$data   = array();
		$pilih  = array('idkategori' => $id );
		$pilih1 = array('idmerk' => $id );
		$pilih2 = array('idproduk' => $id );
		$q = $this->db->get_where('produk',$pilih,1);
		$p = $this->db->get_where('produk',$pilih1,1);
		$d = $this->db->get_where('produk',$pilih2,1);

		if ($q->num_rows()>0) {
			$data = $q->result_array();
		} elseif ($p->num_rows()>0) {
			$data = $p->result_array();
		} else {
			$data = $d->result_array();
		}

		return $data;
	} 

	public function getkat() {
		return $this->db->get('kategori');
	}

	public function getmerk() {
		return $this->db->get('merk')->result_array();
	}

	public function getdetailproduk($w=null) {
		$this->db->join('merk','merk.idmerk=produk.idmerk')->join('kategori','kategori.idkategori=produk.idkategori');

		if(!empty($w)) {
			$this->db->where($w);
		}

		return $this->db->get('produk');
	}

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>
	//$q = $this->db->query('SELECT produk.idproduk,kategori.namakategori FROM produk, kategori WHERE produk.idkategori = kategori.idkategori AND namakategori='$id'');

}
