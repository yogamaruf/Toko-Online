<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('customermodel');
		$this->load->library('template');
	}

	public function index() {
		$id1 = 1;$id2 = 2;
		$data = array(
				'title' => $this->customermodel->gethal($id1)->row_array(),
				'title1' => $this->customermodel->gethal($id2)->row_array(),
				'list'  => $this->customermodel->getkat(),
				'merk'  => $this->customermodel->getmerk(),
				'total' => $this->customermodel->gethitung());
		$this->template->tampil('customer/list',$data);
	}

	public function incart() {
		$kode   = $this->uri->segment(3);
		$cart   = $this->db->get_where('keranjang',array('idcart' => $kode));
		$jumlah = $this->input->post('angka')+1;
		
		foreach ($cart->result_array() as $key => $value) {
			$harga  = $value['harga'];
			$simpan = array(
					'idcart' => $value['idcart'],
					'harga'  => $harga,
					'jumlah' => $jumlah,
					'total'  => $jumlah*$harga);

			$this->customermodel->geteditcart($kode,$simpan);
		}
		
		redirect(base_url('index.php/toko/keranjang'));
	}

	public function decart() {
		$id     = $this->uri->segment(3);
		$cart   = $this->db->get_where('keranjang',array('idcart' => $id));
		$jumlah = $this->input->post('angka')-1;

		if ($jumlah==0) {
			$this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
              	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <strong>QTY anda nol (0) maka akan dihapus</strong></div>");
			$this->customermodel->gethapuscart($id);
			redirect(base_url('index.php/toko/keranjang'));
		} else {
			foreach ($cart->result_array() as $key => $value) {
			$harga  = $value['harga'];
			$simpan = array(
					'idcart' => $value['idcart'],
					'harga'  => $harga,
					'jumlah' => $jumlah,
					'total'  => $jumlah*$harga);
			
			$this->customermodel->geteditcart($id,$simpan);
			}
		}

		redirect(base_url('index.php/toko/keranjang'));
	}

	public function produk() {
		$data = array(
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				'total'  => $this->customermodel->gethitung());
		$this->template->tampil('customer/produk',$data);
	}

	public function register() {
		if($this->session->userdata('logged')==1) {
			echo "<script>alert('Untuk registrasi silahkan anda logout terlebih dahulu');</script>";
		}

		$id1 = 5;$id2 = 6;
		$data = array(
				'title' => $this->customermodel->gethal($id1)->row_array(),
				'title1' => $this->customermodel->gethal($id2)->row_array(),
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk());
		$this->template->tampil('customer/akun/register',$data);
	}

	public function lupa() {
		$data = array(
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				'total'  => $this->customermodel->gethitung());
		$this->template->tampil('customer/akun/lupa',$data);
	}

	public function kontak() {
		$id = 7;
		$data = array(
				'kontak' => $this->customermodel->gethal($id)->row_array(),
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk());
		$this->template->tampil('customer/kontak',$data);
	}

	public function keranjang() {
		if ($this->session->userdata('logged')<>1) {
			$this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
              	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <strong>Silahkan login terlebih dahulu !!!</strong></div>");

            redirect(base_url('index.php/login'));
        } else {
        	$id = $this->session->userdata('idcustom');
        	$id = 10;
			$data = array(
					'title'  => $this->customermodel->gethal($id)->row_array(),
					'list'   => $this->customermodel->getkat(),
					'merk'   => $this->customermodel->getmerk(),
					'data'   => $this->customermodel->getcart($id),
					'jumlah' => $this->customermodel->getcart());

			$this->template->tampil('customer/keranjang',$data);
        }
	}

	public function daftar() {
		$data = array(
				'data'   => $this->customermodel->getdetailproduk(),
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				'total'  => $this->customermodel->gethitung());
		$this->template->tampil('customer/listproduk',$data);
	}

	public function grid() {
		$id = 9;
		$data = array(
				'title' => $this->customermodel->gethal($id)->row_array(),
				'data'   => $this->customermodel->getdetailproduk(),
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				'total'  => $this->customermodel->gethitung());
		$this->template->tampil('customer/gridproduk',$data);
	}

	public function three() {
		$id = 11;
		$data = array(
				'title' => $this->customermodel->gethal($id)->row_array(),
				'data'  => $this->customermodel->getdetailproduk(),
				'merk'  => $this->customermodel->getmerk());
		$this->template->tampil('customer/treecolumn',$data);
	}

	public function four() {
		$id = 12;
		$data = array(
				'title' => $this->customermodel->gethal($id)->row_array(),
				'data'  => $this->customermodel->getproduk(),
				'merk'  => $this->customermodel->getmerk());
		$this->template->tampil('customer/fourcolumn',$data);
	}

	public function histori() {
		$id = $this->session->userdata('idcustom');
		if ($this->session->userdata('logged')<>1) {
			$this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <strong>Silahkan login terlebih dahulu !!!</strong></div>");

            redirect(base_url('index.php/login'));
        } else {
			$id = 14;
			$data = array(
					'title' => $this->customermodel->gethal($id)->row_array(),
					'merk'  => $this->customermodel->getmerk(),
					'data'  => $this->customermodel->gethistori($id));
		
			$this->template->tampil('customer/histori',$data);
		}
	}

	public function konfirm() {
		$id = $this->session->userdata('idcustom');
		if ($this->customermodel->getcart($id)->num_rows()==0) {
			$this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <strong>Silahkan isi keranjang anda sebelum memesan...</strong></div>");

            redirect(base_url('index.php/toko/keranjang'));
		} else {
			$id = 13;
			$data = array(
					'title'  => $this->customermodel->gethal($id)->row_array(),
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
                        <strong>Silahkan login terlebih dahulu !!!</strong></div>");

                redirect(base_url('index.php/login'));
        } else {
			$id1 = 3;$id2 = 4;
			$data = array(
					'title'  => $this->customermodel->gethal($id1)->row_array(),
					'title1' => $this->customermodel->gethal($id2)->row_array(),
					'merk'   => $this->customermodel->getmerk(),
					'data'   => $this->customermodel->getmyprofil()->row_array());

			$this->template->tampil('customer/akun/profil',$data);
		}
	}

	public function detaillist() {
		$id = $this->uri->segment(3);
		$produk = $this->customermodel->getproduk($id)->row_array();
		$data = array(
				'promerk'  => 'Berdasarkan Merk '.$produk['namamerk'],
				'kategori' => 'Berdasarkan Kategori '.$produk['namakategori'],
				'data'     => $this->customermodel->getproduk($id),
				'list'     => $this->customermodel->getkat(),
				'merk'     => $this->customermodel->getmerk(),
				'total'    => $this->customermodel->gethitung());
		$this->template->tampil('customer/produk',$data);
	}

	public function detailproduk() {
		$id = $this->uri->segment(3);
		$data = array(
				'list'   => $this->customermodel->getkat(),
				'merk'   => $this->customermodel->getmerk(),
				'total'  => $this->customermodel->gethitung(),
				'd'      => $this->customermodel->getdetailproduk(array('idproduk' => $id))->row_array());
		$this->template->tampil('customer/detailproduk',$data);
	}

	public function about() {
		$id = 8;
		$data = array(
				'data' => $this->customermodel->gethal($id)->row_array(),
				'merk' => $this->customermodel->getmerk());
		$this->template->tampil('customer/about',$data);
	}

	public function autocomplete() {
		if (isset($_GET['term'])) {
			$result = $this->customermodel->getsearch($_GET['term']);
			if (count($result) > 0) {
				foreach ($result->result_array() as $key => $value) {
					$d[] = array(
						'label' => $value['nama']);

					echo json_encode($d);
				}
			}
		}
	}

	public function search() {
		$search = $this->input->get('title');
		$data = array(
				'cari'  => 'Hasil dari " '.$search.' "',
				'data'  => $this->customermodel->getsearch($search),
				'list'  => $this->customermodel->getkat(),
				'total' => $this->customermodel->gethitung(),
				'merk'  => $this->customermodel->getmerk());

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
					'tglorder'   => date('Y-m-d h:i:s'),
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
		$kode = $this->uri->segment(3);
		$check = array(
				'merk'  => $this->customermodel->getmerk(),
				'order' => $this->customermodel->getkonfirm($kode)->row_array(),
				'check' => $this->customermodel->getcheck($kode)->row_array());

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
                <strong>Silahkan login terlebih dahulu !!!</strong></div>");

            redirect(base_url('index.php/login'));
        } else {
        	$w  = 'Belum Bayar';
			$id = 13;
			$data = array(
					'title' => $this->customermodel->gethal($id)->row_array(),
					'merk'  => $this->customermodel->getmerk(),
					'data'  => $this->customermodel->getkonfirmorder($id,$w));
		
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
                <strong>Silahkan login terlebih dahulu !!!</strong></div>");

            redirect(base_url('index.php/login'));
        } else {
			$id     = $this->session->userdata('idcustom');
			$produk = $this->input->post('idproduk');
			$harga  = $this->input->post('harga');
			$tabel  = $this->db->get_where('keranjang',array('idproduk' => $produk))->row_array();

			if ($produk==$tabel['idproduk']) {
				$sum    = $tabel['jumlah']+1;
				$simpan = array(
						'idproduk'   => $produk,
						'harga'      => $harga,
						'jumlah'     => $sum,
						'total'      => $sum*$harga);

				$this->customermodel->gettimpacart($simpan,$produk);
			} else {
				$jumlah = $this->input->post('jumlah'); 
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
			}

			redirect(base_url('index.php/toko/keranjang'));
		}
	}

	public function hapuscart() {
		$id = $this->uri->segment(3);
		$this->customermodel->gethapuscart($id);

		redirect(base_url('index.php/toko/keranjang'));
	}

}
