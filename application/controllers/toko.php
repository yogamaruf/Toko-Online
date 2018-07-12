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
				'list' => $this->customermodel->getkat());
		$this->template->tampil('customer/produk',$data);
	}

	public function register() {
		$data = array(
				'list' => $this->customermodel->getkat());
		$this->template->tampil('customer/register',$data);
	}

	public function kontak() {
		$data = array(
				'list' => $this->customermodel->getkat());
		$this->template->tampil('customer/kontak',$data);
	}

	public function keranjang() {
		$data = array(
				'list' => $this->customermodel->getkat());
		$this->template->tampil('customer/keranjang',$data);
	}

	public function detaillist() {
		$id = $this->uri->segment(3);
		$data = array(
				'data' => $this->customermodel->getproduk($id),
				'list' => $this->customermodel->getkat(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/produk',$data);
	}

}
