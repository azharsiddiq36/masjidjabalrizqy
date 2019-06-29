<?php
class Event extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_event');
        //chek_session();
        if ($this->session->userdata('pengguna_hak_akses')!='administrator'){
            redirect('login_admin');
        }
    }

    function index(){
        
        $data['record'] = $this->model_event->tampil_data();
        $this->template->load('template','event/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id  	 = $this->input->post('id_event');
            $nama_event    = $this->input->post('nama_event');
   
            $data           = array('id_event'=>$id,
            						'nama_event'=>$nama_event
            );
            $this->model_event->post($data);
            redirect('event');
        }
        else{
            echo "Data Gagal";
        }	
    }

    function edit()
    {
       if(isset($_POST['submit'])){
               
            $id      = $this->input->post('id_event');
            $nama_event    = $this->input->post('nama_event');
   
            $data           = array('id_event'=>$id,
                                    'nama_event'=>$nama_event
            );
            $this->model_event->edit($data,$id);
            redirect('event');
        }
        else{
            $id=  $this->uri->segment(3);
            //$this->load->model('model_event');
            $data['record']     =  $this->model_event->get_one($id)->row_array();
            $this->template->load('template','event/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_event->delete($id);
        redirect('event');
    }




}

  ?>
