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
		return $data->result_array();;
	} 

	public function getdetailproduk($id=null) { // Menampilkan data pada halaman DETAIL PRODUK
		$this->db->join('merk','merk.idmerk=produk.idmerk')->join('kategori','kategori.idkategori=produk.idkategori');

		if (!empty($id)) {
			$this->db->where($id);
		}

		return $this->db->get('produk');
	} 

	public function getcheck($id) { // CHECKOUT
		$this->db->join('customer','customer.idcustom=checkout.idcustom');
		$this->db->where('customer.idcustom',$id);

		return $this->db->get('checkout');
	}

	public function getkonfirmorder($id) { // ORDER
		$this->db->where('idcustom',$id);

		return $this->db->get('order');
	}

	public function getkat() { // Berdasarkan KATEGORI
		return $this->db->get('kategori');
	}

	public function getmerk() { // Berdasarkan MERK
		return $this->db->get('merk')->result_array();
	}

	public function getcart($id) { // Menampilkan data pada TABEL KERANJANG 
		$this->db->join('customer','customer.idcustom=keranjang.idcustomer');
		$this->db->where('idcustom',$id);

		return $this->db->get('keranjang');
	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Menampilkan Data Pada FORM MY ACCOUNT ~  |

	public function getmyprofil($id=null) {
		$id = $this->session->userdata('email');
		$this->db->where('email',$id);

		return $this->db->get('customer');
	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Search Data ~  |

	public function getsearch($search) {  // Search data CUSTOMER
		$this->db->select('*');
		$this->db->like('nama',$search);

		return $this->db->get('produk')->result_array();
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

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ Hapus Data ~  |

	public function gethapuscart($id) { // TABEL KERANJANG
		$this->db->where('idcart',$id);
		$this->db->or_where('idcustomer',$id);
		return $this->db->delete('keranjang');
	}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<  ~ END ~  |

}
