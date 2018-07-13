<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('customermodel');
		$this->load->library('template');
	}

	public function index() {
		$data = array(
				'list' => $this->customermodel->getkat(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/list',$data);
	}

	public function produk() {
		$data = array(
				'list' => $this->customermodel->getkat(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/produk',$data);
	}

	public function register() {
		$data = array(
				'list' => $this->customermodel->getkat(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/register',$data);
	}

	public function kontak() {
		$data = array(
				'list' => $this->customermodel->getkat(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/kontak',$data);
	}

	public function keranjang() {
		$data = array(
				'list' => $this->customermodel->getkat(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/keranjang',$data);
	}

	public function daftar() {
		$data = array(
				'data' => $this->customermodel->getdetailproduk(),
				'list' => $this->customermodel->getkat(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/listproduk',$data);
	}

	public function grid() {
		$data = array(
				'data' => $this->customermodel->getdetailproduk(),
				'list' => $this->customermodel->getkat(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/gridproduk',$data);
	}

	public function three() {
		$data = array(
				'data' => $this->customermodel->getdetailproduk(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/treecolumn',$data);
	}

	public function four() {
		$data = array(
				'data' => $this->customermodel->getdetailproduk(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/fourcolumn',$data);
	}

	public function detaillist() {
		$id = $this->uri->segment(3);
		$data = array(
				'data' => $this->customermodel->getproduk($id),
				'list' => $this->customermodel->getkat(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/produk',$data);
	}

	public function detailproduk() {
		$id = $this->uri->segment(3);
		$data = array(
				'list' => $this->customermodel->getkat(),
				'merk' => $this->customermodel->getmerk(),
				'd' => !empty($id) ? $this->customermodel->getdetailproduk(array('idproduk' => $id))->row_array() : null);
		$this->template->tampil('customer/detailproduk',$data);
	}

	public function about() {
		$data = array(
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/about',$data);
	}

}
