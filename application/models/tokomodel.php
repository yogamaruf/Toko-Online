<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tokomodel extends CI_Model {

	//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ TAMBAH ~  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	public function gettambah($simpan) {
		return $this->db->insert('customer',$simpan);
	}

	public function gettambahuser($simpan) {
		return $this->db->insert('admin',$simpan);
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

	public function getuser($w=null) {
		if(!empty($w)) {
			$this->db->where($w);
		}

		return $this->db->get('admin');
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
		$q = $this->db->query('SELECT order.kodeorder,customer.firstname,customer.lastname,customer.title,customer.idcustom,order.tanggal, GROUP_CONCAT(DISTINCT(order.kodeorder)ORDER BY order.kodeorder ASC) AS kodeorder, COUNT(*) AS jumorder FROM `order` JOIN customer ON customer.idcustom=order.idcustom GROUP BY order.idcustom ORDER BY order.tanggal DESC');

		return $q;
	}

	public function getdetailorder($id) {
		$r = $this->db->query('SELECT produk.nama,produk.harga,customer.title,customer.firstname,customer.lastname,checkout.jumlah,checkout.tglorder,checkout.kodeorder, GROUP_CONCAT(DISTINCT(produk.nama) SEPARATOR "<br><hr style=margin:3px;border-color:#ccc;>") AS nama, GROUP_CONCAT(checkout.jumlah SEPARATOR "<br><hr style=margin:3px;border-color:#ccc;>") AS jumlah, GROUP_CONCAT(produk.harga SEPARATOR "<br><hr style=margin:3px;border-color:#ccc;>Rp. ") AS harga FROM checkout JOIN produk ON produk.idproduk=checkout.idproduk JOIN customer ON customer.idcustom=checkout.idcustom GROUP BY checkout.kodeorder ORDER BY checkout.kodeorder DESC');

		return $r;
	}

	public function getkonfig() {
		return $this->db->get('konfigurasi');
	}

	public function gethal($id=null) {
		if (!empty($id)) {
			$this->db->where('idmenu',$id);
		}

		return $this->db->get('halaman');
	}

	public function getkonten($id=null) {
		$this->db->join('menu','menu.idmenu=halaman.idmenu');

		if (!empty($id)) {
			$this->db->where('id',$id);
		}

		return $this->db->limit(14)->get('halaman');
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

	public function getsimpankonten($konten,$id) {
		return $this->db->where('id',$id)->update('halaman',$konten);
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
