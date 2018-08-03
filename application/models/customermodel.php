<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customermodel extends CI_Model {

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Menampilkan Data Pada LIST ~  |

	public function getproduk($id=null) { // LIST PRODUK
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('merk','merk.idmerk=produk.idmerk')->join('kategori','kategori.idkategori=produk.idkategori');

		if (!empty($id)) {
			$this->db->where('kategori.idkategori',$id);
			$this->db->or_where('merk.idmerk',$id);
		}
		
		$data = $this->db->get();
		return $data;
	} 

	public function getdetailproduk($id=null) { // Menampilkan data pada halaman DETAIL PRODUK
		$this->db->join('merk','merk.idmerk=produk.idmerk')->join('kategori','kategori.idkategori=produk.idkategori');

		if (!empty($id)) {
			$this->db->where($id);
		}

		return $this->db->get('produk');
	} 

	public function getcheck($kode=null) { // CHECKOUT
		$this->db->join('order','order.kodeorder=checkout.kodeorder');
		if (!empty($kode)) {
			$this->db->where('order.kodeorder',$kode);
		}

		return $this->db->order_by('idcheck','DESC')->get('checkout');
	}

	public function getkonfirmorder($id=null,$w=null) { // ORDER
		if (!empty($id)&&$this->db->where('status',$w)) {
			$this->db->where('idcustom',$id);
		}

		return $this->db->order_by('kodeorder','DESC')->get('order');
	}

	public function getkonfirm($kode=null) { // ORDER
		if (!empty($kode)) {
			$this->db->where('kodeorder',$kode);
		}

		return $this->db->order_by('kodeorder','DESC')->get('order');
	}

	public function getkat() { // Berdasarkan KATEGORI
		return $this->db->get('kategori');
	}

	public function getmerk() { // Berdasarkan MERK
		return $this->db->get('merk')->result_array();
	}

	public function getcart($kode=null) { // Menampilkan data pada TABEL KERANJANG 
		$id = $this->session->userdata('idcustom');
		$this->db->join('customer','customer.idcustom=keranjang.idcustomer');
		$this->db->where('idcustom',$id);
		$this->db->or_where('idcart',$kode);

		return $this->db->get('keranjang');
	}

	public function gethistori($id) {
		$this->db->where('idcustom',$id);

		return $this->db->get('order');
	}

	public function getheader() {
		return $this->db->get('konfigurasi');
	}

	public function gethal($id) {
		$this->db->where('id',$id);
		
		return $this->db->get('halaman');
	}

	public function getfooter($id=null) {
		$id = 15;
		return $this->db->where('id',$id)->get('halaman');
	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Menampilkan Data Pada FORM MY ACCOUNT ~  |

	public function getmyprofil($id=null) {
		$id = $this->session->userdata('email');
		$this->db->where('email',$id);

		return $this->db->get('customer');
	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Hitung Harga ~  |

	public function gethitung() {
		$hitung = 0;
		$id     = $this->session->userdata('idcustom');

		if (!empty($id)) {
			$data   = $this->db->get_where('keranjang',array('idcustomer' => $id));
			foreach ($data->result_array() as $key => $value) {
				$hitung += str_replace('', '', $value['total']);
			}
		} else {
			$hitung = "0";
		}

		return $hitung;
 	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Search Data ~  |

	public function getsearch($search) {  // Search data CUSTOMER
		$this->db->like('nama',$search);
		$this->db->order_by('nama','ASC');
		$this->db->limit(10);
		return $this->db->get('produk');
	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Tambah Data ~  |

	public function getorder($order) {  // TABEL ORDER
		return $this->db->insert('order',$order);
	}

	public function getcheckout($data) { // TABEL CHECKOUT
		return $this->db->insert('checkout',$data);
	}

	public function gettambah($simpan) { // TABEL CUSTOMER
		return $this->db->insert('customer',$simpan);
	}

	public function gettambahcart($simpan) { // TABEL KERANJANG
		return $this->db->insert('keranjang',$simpan);
	}

	public function gettimpacart($simpan,$produk) { // Menyimpan PRODUK yang memiliki id sama dan menambah data 
		return $this->db->where('idproduk',$produk)->update('keranjang',$simpan); // pada kolom jumlah TABEL KERANJANG
	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ KONFIRMASI DATA ~  |

	public function getlunas($kode,$simpan) { // TABEL KERANJANG
		return $this->db->where('kodeorder',$kode)->update('order',$simpan);
	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ PLUS AND MIN ~  |

	public function geteditcart($id,$simpan) { // Mengurangi dan menambah data pada kolom jumlah TABEL KERANJANG
		return $this->db->where('idcart',$id)->update('keranjang',$simpan);
	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Hapus Data ~  |

	public function gethapuscart($id) { // TABEL KERANJANG
		$this->db->where('idcart',$id);
		$this->db->or_where('idcustomer',$id);
		return $this->db->delete('keranjang');
	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

}
