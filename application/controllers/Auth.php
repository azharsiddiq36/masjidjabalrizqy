<?php
class Auth extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
    }

    function login()
    {
        if(isset($_POST['submit'])){
            // proses login disini
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $passmd5    = md5($password);
            $hasil= $this->model_operator->login($username,$password)->row_array();
            if($username == $hasil['pengguna_username'] && $passmd5 == $hasil['pengguna_password'] )
            {
                $this->session->set_userdata('pengguna_id',$hasil['pengguna_id']);
                $this->session->set_userdata('pengguna_username',$hasil['pengguna_username']);
                $this->session->set_userdata('pengguna_nama',$hasil['pengguna_nama']);
                $this->session->set_userdata('pengguna_email',$hasil['pengguna_email']);
                $this->session->set_userdata('pengguna_hak_akses',$hasil['pengguna_hak_akses']);
                $this->session->set_userdata('pengguna_nomor',$hasil['pengguna_nomor']);
                redirect('Dashboard');
            }

            else
            {
              echo $this->session->set_flashdata('msg','Username Atau Password Salah');
              redirect('Welcome');
            }
        }
        
    }


    function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
