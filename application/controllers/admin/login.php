<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('loginmodel');
        $this->load->model('customermodel');
        $this->load->library('template');
    }

    public function index($error = NULL) {
        $this->load->view('admin/akun/login');
    }

    public function loginadmin() {
        $login = $this->loginmodel->login($this->input->post('username'), $this->input->post('password'))->num_rows();

        if ($login == 1) {
            $baris = $this->loginmodel->login($this->input->post('username'), $this->input->post('password'))->row();

            $data = array(
                'logged'   => TRUE,
                'username' => $baris->username);

            $this->session->set_userdata($data);

            redirect(base_url('admin/toko'));
        } else {
            $this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Username atau password salah !!!</strong></div>");

            redirect(base_url('admin/login'));
        }
    }

    public function keluar() {
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }

    public function regis() {
        $this->load->view('admin/akun/register');
    }

    public function getregister() {
        $simpan = array(
                    'idadmin'     => $this->input->post('idadmin'),
                    'username'    => $this->input->post('username'),
                    'namalengkap' => $this->input->post('nama'),
                    'email'       => $this->input->post('email'),
                    'password'    => $this->input->post('pass'));

        $this->loginmodel->tambah($simpan);

        redirect(base_url('admin/toko'));
    }

}