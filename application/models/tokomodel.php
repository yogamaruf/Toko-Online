<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tokomodel extends CI_Model {

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ TAMBAH ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	public function gettambah($simpan) {
		return $this->db->insert('customer',$simpan);
	}

	public function gettambahkat($simpan) {
		return $this->db->insert('kategori', $simpan);
	}

	public function gettambahmerk($simpan) {
		return $this->db->insert('merk', $simpan);
	}

	public function gettambahproduk($simpan) {
		return $this->db->insert('produk', $simpan);
	}

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ TAMPIL ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	public function getcustomer() {
		return $this->db->order_by('firstname', 'ASC')->get('customer')->result_array();
	}

	public function getproduk($w=null) {
		$this->db->join('merk','merk.idmerk=produk.idmerk')->join('kategori','kategori.idkategori=produk.idkategori');
		
		if(!empty($w)) {
			$this->db->where($w);
		}

		return $this->db->get('produk');
	}

	public function getuser() {
		return $this->db->get('admin')->result_array();
	}

	public function getkategori() {
		return $this->db->get('kategori')->result_array();
	}

	public function getmerk($w=null) {
		if(!empty($w)) {
			$this->db->where($w);
		}

		return $this->db->get('merk');
	}

	public function getorder() {
		$this->db->join('customer','customer.idcustom=order.idcustom');

		return $this->db->get('order');
	}

	public function getkonfig() {
		return $this->db->get('konfigurasi');
	}

	public function gethal1() {
		return $this->db->order_by('idmenu','ASC')->limit(6)->get('halaman');
	}

	public function gethal2() {
		return $this->db->order_by('idmenu','DESC')->limit(7)->get('halaman');
	}

	public function gethalaman($idmenu) {
		if (!empty($id)) {
			$this->db->where('idmenu',$idmenu);
		}

		return $this->db->get('detailhal');
	}

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ FORM EDIT ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	public function getedit($id) {
		return $this->db->get_where('customer',array('idcustom' => $id));
	}

	public function getedituser($id) {
		return $this->db->get_where('admin',array('idadmin' => $id));
	}

	public function geteditkat($id) {
		return $this->db->get_where('kategori',array('idkategori' => $id));
	}

	public function getdetail($id) {
		return $this->db->get_where('produk',array('idproduk' => $id));
	}

	public function geteditkonfig($id=null) {
		return $this->db->get_where('konfigurasi',array('id' => $id));
	}

	public function getedithal($id=null) {
		$this->db->join('detailhal','detailhal.idmenu=halaman.idmenu');
		$this->db->where('detailhal.idmenu',$id);

		return $this->db->get('halaman');
	}

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ EDIT ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	public function getubah($simpan,$id) {
		return $this->db->where('idcustom',$id)->update('customer',$simpan);
	}

	public function getubahkat($simpan,$id) {
		return $this->db->where('idkategori',$id)->update('kategori',$simpan);
	}

	public function getubahmerk($simpan,$id) {
		return $this->db->where('idmerk',$id)->update('merk',$simpan);
	}

	public function getubahuser($simpan,$id) {
		return $this->db->where('idadmin',$id)->update('admin',$simpan);
	}

	public function getubahproduk($simpan,$id) {
		return $this->db->where('idproduk',$id)->update('produk',$simpan);
	}

	public function getsimpankonfig($simpan,$id) {
		return $this->db->where('id',$id)->update('konfigurasi',$simpan);
	}

	public function getsimpanhalaman($hal,$idmenu) {
		return $this->db->where('idmenu',$idmenu)->update('halaman',$hal);
	}

	public function getsimpanhal($detailhal,$id) {
		return $this->db->where('id',$id)->update('detailhal',$detailhal);
	}

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ HAPUS ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	public function gethapus($id) {
		return $this->db->where('idcustom',$id)->delete('customer');
	}

	public function gethapuskat($id) {
		return $this->db->where('idkategori',$id)->delete('kategori');
	}

	public function gethapusmerk($id) {
		return $this->db->where('idmerk',$id)->delete('merk');
	}

	public function gethapusproduk($id) {
		return $this->db->where('idproduk',$id)->delete('produk');
	}

	public function gethapusadmin($id) {
		return $this->db->where('idadmin',$id)->delete('admin');
	}

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

}
