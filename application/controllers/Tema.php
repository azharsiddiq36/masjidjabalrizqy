<?php
class Tema extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_tema');
        if ($this->session->userdata('pengguna_hak_akses')!='administrator'){
            redirect('login_admin');
        }
    }

    function index(){
        $data['record'] = $this->model_tema->tampil_data();
        $this->template->load('template','tema/lihat_data',$data);
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
                    'tema_nama' => $nama,
                    'tema_username' => $username,
                    'tema_email' => $email,
                    'tema_password' => $pass,
                    'tema_nomor' => $no_hp,
                    'tema_hak_akses' => $hak_akses,
                    'tema_status'=>$status
                );
                $this->model_tema->post($data);
                redirect('tema');

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

                $data = array('id_tema' => $id,
                    'nama' => $nama,
                    'email' => $email,
                    'pass' => $pass,
                    'no_hp' => $no_hp,
                    'level' => $level
                );
                $this->model_tema->edit($data,$id);
                redirect('tema');
            } else{
                $id=  $this->uri->segment(3);
                $data['record']     =  $this->model_tema->get_one($id)->row_array();
                $this->template->load('template','tema/update_data',$data);
        }
    }

    function delete()
    {
        $id=  $this->uri->segment(3);
        $status = $this->model_tema->get_one($id)->row_array();
        $data = null;
        if ($status['tema_status'] == "aktif"){
            $data = array('tema_status'=>'nonaktif');
        }
        else{
            $data = array('tema_status'=>'aktif');
        }

        $this->model_tema->delete($data,$id);
        redirect('tema');
    }




}

  ?>
