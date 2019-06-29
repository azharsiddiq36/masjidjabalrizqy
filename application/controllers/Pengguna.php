<?php
class Pengguna extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_pengguna');
        if ($this->session->userdata('pengguna_hak_akses')!='administrator'){
            redirect('login_admin');
        }
    }

    function index(){
        $data['record'] = $this->model_pengguna->tampil_data();
        $this->template->load('template','pengguna/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
            $username    = $this->input->post('username');
            $nama    = $this->input->post('nama');
            $email = $this->input->post('email');
            $pass = $this->input->post('password');
            $no_hp    = $this->input->post('no_hp');
            $hak_akses    = $this->input->post('hak_akses');
            $status = "nonaktif";
                $data = array(
                    'pengguna_nama' => $nama,
                    'pengguna_username' => $username,
                    'pengguna_email' => $email,
                    'pengguna_password' => $pass,
                    'pengguna_nomor' => $no_hp,
                    'pengguna_hak_akses' => $hak_akses,
                    'pengguna_status'=>$status
                );
                $this->model_pengguna->post($data);
                redirect('pengguna');

        } else{
            echo "Data Gagal";
        }
    }

    function edit()
    {
        if(isset($_POST['submit'])){
            $id=  $this->uri->segment(3);
            $nama    = $this->input->post('nama');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $no_hp    = $this->input->post('no_hp');
            $level = $this->input->post('level');
            $config['upload_path'] = './assets/images/foto';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $this->upload->initialize($config);

                $data = array('id_pengguna' => $id,
                    'nama' => $nama,
                    'email' => $email,
                    'pass' => $pass,
                    'no_hp' => $no_hp,
                    'level' => $level
                );
                $this->model_pengguna->edit($data,$id);
                redirect('pengguna');
            } else{
                $id=  $this->uri->segment(3);
                $data['record']     =  $this->model_pengguna->get_one($id)->row_array();
                $this->template->load('template','pengguna/update_data',$data);
        }
    }

    function delete()
    {
        $id=  $this->uri->segment(3);
        $status = $this->model_pengguna->get_one($id)->row_array();
        $data = null;
        if ($status['pengguna_status'] == "aktif"){
            $data = array('pengguna_status'=>'nonaktif');
        }
        else{
            $data = array('pengguna_status'=>'aktif');
        }

        $this->model_pengguna->delete($data,$id);
        redirect('pengguna');
    }




}

  ?>
