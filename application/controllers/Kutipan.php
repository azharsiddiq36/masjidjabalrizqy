<?php
class Kutipan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_kutipan');
        if ($this->session->userdata('pengguna_hak_akses')!='administrator'){
            redirect('login_admin');
        }
    }

    function index(){
        $data['record'] = $this->model_kutipan->tampil_data();
        $this->template->load('template','kutipan/lihat_data',$data);
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
                    'kutipan_nama' => $nama,
                    'kutipan_username' => $username,
                    'kutipan_email' => $email,
                    'kutipan_password' => $pass,
                    'kutipan_nomor' => $no_hp,
                    'kutipan_hak_akses' => $hak_akses,
                    'kutipan_status'=>$status
                );
                $this->model_kutipan->post($data);
                redirect('kutipan');

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

                $data = array('id_kutipan' => $id,
                    'nama' => $nama,
                    'email' => $email,
                    'pass' => $pass,
                    'no_hp' => $no_hp,
                    'level' => $level
                );
                $this->model_kutipan->edit($data,$id);
                redirect('kutipan');
            } else{
                $id=  $this->uri->segment(3);
                $data['record']     =  $this->model_kutipan->get_one($id)->row_array();
                $this->template->load('template','kutipan/update_data',$data);
        }
    }

    function delete()
    {
        $id=  $this->uri->segment(3);
        $status = $this->model_kutipan->get_one($id)->row_array();
        $data = null;
        if ($status['kutipan_status'] == "aktif"){
            $data = array('kutipan_status'=>'nonaktif');
        }
        else{
            $data = array('kutipan_status'=>'aktif');
        }

        $this->model_kutipan->delete($data,$id);
        redirect('kutipan');
    }




}

  ?>
