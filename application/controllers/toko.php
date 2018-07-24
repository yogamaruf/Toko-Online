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
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk()
				/*'jumlah' => $this->customermodel->getcart()*/);
		$this->template->tampil('customer/list',$data);
	}

	public function produk() {
		$data = array(
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				'total'  => $this->customermodel->gethitung(),
				/*'jumlah' => $this->customermodel->getcart()*/);
		$this->template->tampil('customer/produk',$data);
	}

	public function register() {
		$data = array(
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				/*'total'  => $this->customermodel->gethitung(),
				'jumlah' => $this->customermodel->getcart()*/);
		$this->template->tampil('customer/akun/register',$data);
	}

	public function kontak() {
		$data = array(
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				/*'total'  => $this->customermodel->gethitung(),
				'jumlah' => $this->customermodel->getcart()*/);
		$this->template->tampil('customer/kontak',$data);
	}

	public function keranjang() {
		if ($this->session->userdata('logged')<>1) {
				$this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Silahkan login terlebih dahulu !!!</strong>
                    </div>");

                redirect(base_url('index.php/login'));
        } else {
        	$id = $this->session->userdata('idcustom');
        	$data = array(
					'list'   => $this->customermodel->getkat(),
					'merk'   => $this->customermodel->getmerk(),
					'data'   => $this->customermodel->getcart($id),
					'jumlah' => $this->customermodel->getcart($id));

			$this->template->tampil('customer/keranjang',$data);
        }
	}

	public function daftar() {
		$data = array(
				'data'   => $this->customermodel->getdetailproduk(),
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				/*'total'  => $this->customermodel->gethitung(),
				'jumlah' => $this->customermodel->getcart()*/);
		$this->template->tampil('customer/listproduk',$data);
	}

	public function grid() {
		$data = array(
				'data'   => $this->customermodel->getdetailproduk(),
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				/*'total'  => $this->customermodel->gethitung(),
				'jumlah' => $this->customermodel->getcart()*/);
		$this->template->tampil('customer/gridproduk',$data);
	}

	public function three() {
		$data = array(
				'data'   => $this->customermodel->getdetailproduk(),
				'merk'   => $this->customermodel->getmerk(),
				/*'total'  => $this->customermodel->gethitung(),
				'jumlah' => $this->customermodel->getcart()*/);
		$this->template->tampil('customer/treecolumn',$data);
	}

	public function four() {
		$data = array(
				'data'   => $this->customermodel->getproduk(),
				'merk'   => $this->customermodel->getmerk(),
				/*'jumlah' => $this->customermodel->getcart(),
				'total'  => $this->customermodel->gethitung()*/);
		$this->template->tampil('customer/fourcolumn',$data);
	}

	public function konfirm() {
		$id = $this->session->userdata('idcustom');
		if ($this->customermodel->getcart($id)->num_rows()==0) {
			$this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Silahkan isi keranjang anda sebelum memesan...</strong>
                    </div>");

                redirect(base_url('index.php/toko/keranjang'));
		} else {
			$data = array(
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				'data'   => $this->customermodel->getcart($id),
				'jumlah' => $this->customermodel->getcart($id),
				'total'  => $this->input->post('total'),
				'alm'    => $this->input->post('alamat'),
				'kd'     => $this->input->post('kodepos'),
				'kbt'    => $this->input->post('kabupaten'),
				'pvs'    => $this->input->post('provinsi'),
				'ngr'    => $this->input->post('negara'));

			$this->template->tampil('customer/konfirmbayar',$data);
		}
	}

	public function myprofil() {
		if ($this->session->userdata('logged')<>1) {
				$this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Silahkan login terlebih dahulu !!!</strong>
                    </div>");

                redirect(base_url('index.php/login'));
        } else {
			$data = array(
					'merk'   => $this->customermodel->getmerk(),
					/*'total'  => $this->customermodel->gethitung(),
					'jumlah' => $this->customermodel->getcart(),*/
					'data'   => $this->customermodel->getmyprofil()->row_array());

			$this->template->tampil('customer/akun/profil',$data);
		}
	}

	public function detaillist() {
		$id = $this->uri->segment(3);
		$data = array(
				'data'   => $this->customermodel->getproduk($id),
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				/*'total'  => $this->customermodel->gethitung(),
				'jumlah' => $this->customermodel->getcart()*/);
		$this->template->tampil('customer/produk',$data);
	}

	public function detailproduk() {
		$id = $this->uri->segment(3);
		$data = array(
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				/*'total'  => $this->customermodel->gethitung(),
				'jumlah' => $this->customermodel->getcart(),*/
				'd'      => $this->customermodel->getdetailproduk(array('idproduk' => $id))->row_array());
		$this->template->tampil('customer/detailproduk',$data);
	}

	public function about() {
		$data = array(
				'merk'   => $this->customermodel->getmerk(),
				/*'total'  => $this->customermodel->gethitung(),
				'jumlah' => $this->customermodel->getcart()*/);
		$this->template->tampil('customer/about',$data);
	}

	public function search() {
		$search = $this->input->post('search');
		$data = array(
				'data'   => $this->customermodel->getsearch($search),
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				/*'total'  => $this->customermodel->gethitung(),
				'jumlah' => $this->customermodel->getcart()*/);

		$this->template->tampil('customer/produk',$data);
	}

	public function checkout() {
		$id = $this->session->userdata('idcustom');
		date_default_timezone_set('Asia/Jakarta');
		$order = array(
					'kodeorder' => $this->input->post('order'),
					'idcustom'  => $id,
					'jumbel'    => $this->input->post('barang'),
					'nominal'   => $this->input->post('tobayar'),
					'tanggal'   => date('Y-m-d h:i:s'),
					'status'    => 'Belum bayar');
		$this->customermodel->getorder($order);
		$kode = $this->db->insert_id();

		$keranjang = $this->customermodel->getcart($id);
		foreach ($keranjang->result_array() as $key => $value) {
					$data = array(
								'idcheck'    => $this->input->post('idcheck'),
								'kodeorder'  => $kode,
								'idproduk'   => $value['idproduk'],
								'idcustom'   => $id,
								'jumlah'     => $value['jumlah'],
								'total'      => $this->input->post('total'),
								'tglorder'   => date('Y-m-d'),
								'kdpos'      => $this->input->post('kodepos'),
								'negara'     => $this->input->post('negara'),
								'provinsi'   => $this->input->post('provinsi'),
								'kabupaten'  => $this->input->post('kabupaten'),
								'alamat'     => $this->input->post('alamat'),
								'viabayar'   => $this->input->post('viabayar'),
								'norekening' => $this->input->post('no'));

					$this->customermodel->getcheckout($data);
					$this->customermodel->gethapuscart($id);
				}

		redirect(base_url('index.php/toko/konfirmasi'));
	}

	public function konfirmasi() {
		$id = $this->session->userdata('idcustom');
		$w = 'Belum Bayar';
		$check = array(
					'merk'  => $this->customermodel->getmerk(),
					'order' => $this->customermodel->getkonfirmorder($id,$w)->row_array(),
					'check' => $this->customermodel->getcheck($id)->row_array());

		$this->template->tampil('customer/konfirmasi',$check);
	}

	public function finish() {
		$id = $this->session->userdata('idcustom');
		$kode = $this->input->post('kodeorder');
		if (!empty($kode)||$kode==$this->customermodel->getkonfirmorder($id)) {
			$simpan['status'] = 'Lunas';
			$this->customermodel->getlunas($kode,$simpan);

			$data['merk'] = $this->customermodel->getmerk();
			$this->template->tampil('customer/lunas',$data);
		} else {
			$this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Nama atau kode Order salah !!!</strong></div>");

			redirect(base_url('index.php/toko/konfirmasi'));
		}
	}

	public function tertunda() {
		$id = $this->session->userdata('idcustom');
		if ($this->session->userdata('logged')<>1) {
				$this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Silahkan login terlebih dahulu !!!</strong>
                    </div>");

                redirect(base_url('index.php/login'));
        } else {
        		$w = 'Belum Bayar';
				$data = array(
							'merk'  => $this->customermodel->getmerk(),
							'data' => $this->customermodel->getkonfirmorder($id,$w));
		
				$this->template->tampil('customer/tertunda',$data);
		}
	}

	public function tambahcustomer() {
		$simpan = array(
					'idcustom'  => $this->input->post('user'),
					'title'     => $this->input->post('title'),
					'firstname' => $this->input->post('namad'),
					'lastname'  => $this->input->post('namab'),
					'email'     => $this->input->post('email'),
					'password'  => $this->input->post('pass'),
					'date'      => $this->input->post('ttl'));

		$this->customermodel->gettambah($simpan);
		redirect(base_url('index.php/toko/'));
	}

	public function tambahcart() {
		if ($this->session->userdata('logged')<>1) {
				$this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Silahkan login terlebih dahulu !!!</strong>
                    </div>");

                redirect(base_url('index.php/login'));
        } else {
				$id     = $this->session->userdata('idcustom');
				$jumlah = $this->input->post('jumlah'); 
				$harga  = $this->input->post('harga');
				$simpan = array(
							'idcart'      => $this->input->post('idcart'),
							'idproduk'    => $this->input->post('idproduk'),
							'idcustomer'  => $id,
							'fotoproduk'  => $this->input->post('foto'),
							'deskripsi'   => $this->input->post('desk'),
							'harga'       => $harga,
							'jumlah'      => $jumlah,
							'total'       => $jumlah*$harga,
							'tanggalcart' => date('Y-m-d'));

				$this->customermodel->gettambahcart($simpan);
				
				echo "<script>alert('Berhasil di tambahkan');</script>";
				redirect(base_url('index.php/toko/keranjang'));
		}
	}

	public function hapuscart() {
		$id = $this->uri->segment(3);
		$this->customermodel->gethapuscart($id);

		redirect(base_url('index.php/toko/keranjang'));
	}

}
