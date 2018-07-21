<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('loginmodel');
        $this->load->model('customermodel');
        $this->load->library('template');
    }

    public function index($error = NULL) {
        $data = array(
                'list'  => $this->customermodel->getkat(),
                'merk'  => $this->customermodel->getmerk());

        $this->template->tampil('customer/akun/login', $data);
    }

    public function loginmer() {
        $login = $this->loginmodel->logincus($this->input->post('email'), $this->input->post('password'))->num_rows();

        if ($login == 1) {
            $baris = $this->loginmodel->logincus($this->input->post('email'), $this->input->post('password'))->row();

            $data = array(
                'logged'   => TRUE,
                'email'    => $baris->email,
                'idcustom' => $baris->idcustom);

            $this->session->set_userdata($data);

            redirect(base_url('index.php/toko/keranjang'));
        } else {
            $this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>E-mail atau password salah !!!</strong></div>");

            redirect(base_url('index.php/login'));
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('index.php/toko'));
    }

}