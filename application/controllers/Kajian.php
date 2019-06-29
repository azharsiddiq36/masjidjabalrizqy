<?php
class kajian extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_kajian');
        $this->load->model('model_tema');
        if ($this->session->userdata('pengguna_hak_akses')!='administrator'){
            redirect('login_admin');
        }
    }

    function index(){
        $data['record'] = $this->model_kajian->tampil_data();
        $data['tema'] = $this->model_tema->tampil_data();
        $this->template->load('template','kajian/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
            $pemateri    = $this->input->post('pemateri');
            $foto  =null;
            $judul = $this->input->post('judul');
            $url = $this->input->post('url');
            $jam = $this->input->post('jam');
            $tgl_kajian    = $this->input->post('tgl_kajian');
            $tema    = $this->input->post('tema');
            $keterangan    = $this->input->post('keterangan');
            if ($url != null){
                $foto = $url;
            }
            else{
                $config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 204800;
                $this->upload->initialize($config);
                if ( !$this->upload->do_upload('foto')){
                    $foto = 'assets/images/user.png';
                }
                else {
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/images/' . $this->upload->data('file_name');
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = FALSE;
                    $config['quality'] = '50%';
                    $config['width'] = 1024;
                    $config['height'] = 768;
                    $config['new_image'] = './assets/images/' . $this->upload->data('file_name');
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $foto = base_url().'assets/images/' . $this->upload->data('file_name');
                }
            }
                $data = array(
                    'kajian_pemateri' => $pemateri,
                    'kajian_foto' => $foto,
                    'kajian_judul' => $judul,
                    'kajian_jam' => $jam,
                    'kajian_tanggal' => $tgl_kajian,
                    'kajian_tema_id'=>$tema,
                    'kajian_keterangan' => $keterangan
                );
                $this->model_kajian->post($data);
                redirect('kajian');

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

                $data = array('id_kajian' => $id,
                    'nama' => $nama,
                    'email' => $email,
                    'pass' => $pass,
                    'no_hp' => $no_hp,
                    'level' => $level
                );
                $this->model_kajian->edit($data,$id);
                redirect('kajian');
            } else{
                $id=  $this->uri->segment(3);
                $data['record']     =  $this->model_kajian->get_one($id)->row_array();
                $this->template->load('template','kajian/update_data',$data);
        }
    }

    function delete()
    {
        $id=  $this->uri->segment(3);
        $status = $this->model_kajian->get_one($id)->row_array();
        $data = null;
        if ($status['kajian_status'] == "aktif"){
            $data = array('kajian_status'=>'nonaktif');
        }
        else{
            $data = array('kajian_status'=>'aktif');
        }

        $this->model_kajian->delete($data,$id);
        redirect('kajian');
    }




}

  ?>
