<?php
class Lowongan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_lowongan');
        if ($this->session->userdata('pengguna_hak_akses')!='administrator'){
            redirect('login_admin');
        }
        //chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_lowongan->tampil_data();
        $this->template->load('template','lowongan/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id  	 = $this->input->post('id_lowongan');
            $nama_lowongan    = $this->input->post('nama_lowongan');
   
            $data           = array('id_lowongan'=>$id,
            						'nama_lowongan'=>$nama_lowongan
            );
            $this->model_lowongan->post($data);
            redirect('lowongan');
        }
        else{
            echo "Data Gagal";
        }	
    }

    function edit()
    {
       if(isset($_POST['submit'])){
               
            $id      = $this->input->post('id_lowongan');
            $nama_lowongan    = $this->input->post('nama_lowongan');
   
            $data           = array('id_lowongan'=>$id,
                                    'nama_lowongan'=>$nama_lowongan
            );
            $this->model_lowongan->edit($data,$id);
            redirect('lowongan');
        }
        else{
            $id=  $this->uri->segment(3);
            //$this->load->model('model_lowongan');
            $data['record']     =  $this->model_lowongan->get_one($id)->row_array();
            $this->template->load('template','lowongan/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_lowongan->delete($id);
        redirect('lowongan');
    }




}

  ?>
