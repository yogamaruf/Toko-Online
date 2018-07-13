<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('loginmodel');
    }

    public function index($error = NULL) {
        $data = array(
            'error' => $error);

        $this->load->view('admin/akun/login', $data);
    }

    public function login() {
        $this->load->model('loginmodel');
        $login = $this->loginmodel->login($this->input->post('username'), $this->input->post('password'))->num_rows();

        if ($login == 1) {
            $baris = $this->loginmodel->login($this->input->post('username'), $this->input->post('password'))->row();

            $data = array(
                'logged'   => TRUE,
                'username' => $baris->username);

            $this->session->set_userdata($data);

            redirect(base_url('index.php/admin/toko'));
        } else {
            $error = 'username / password salah';
            $this->index($error);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('index.php/admin/login'));
    }

    public function register() {
        $this->load->view('admin/akun/register');
    }

    public function getregister() {
        $simpan = array(
                    'idadmin' => $this->input->post('idadmin'),
                    'username' => $this->input->post('username'),
                    'namalengkap' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('pass'));

        $this->loginmodel->tambah($simpan);

        redirect(base_url('index.php/admin/toko'));
    }

}