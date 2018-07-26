<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template {
	
	protected $ci;

	function __construct() {
		$this->ci =& get_instance();
	}

	function tampilan($t=null,$d=null) {
		$data['konten'] = $this->ci->load->view($t,$d,true);

		$this->ci->load->view('admin/index.php',$data);
	}

	function tampil($t=null,$d=null) {
		$data = array(
				'content' => $this->ci->load->view($t,$d,true),
				'hitung'  => $this->ci->customermodel->gethitung($t,$d,true),
				'jumlah'  => $this->ci->customermodel->getcart($t,$d,true)->num_rows(),
				'header'  => $this->ci->customermodel->getheader($t,$d,true)->row_array());

		$this->ci->load->view('customer/index.php',$data);
	}

}