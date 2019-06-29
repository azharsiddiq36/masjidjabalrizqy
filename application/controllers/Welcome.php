<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() {
        parent::__construct();
        $this->load->model('model_lowongan');
        $this->load->model('model_event');
        $this->load->model('model_kutipan');
        $this->load->model('model_kajian');
        $this->load->model('model_pengguna');
        $this->load->model('model_tema');
        $this->load->model('model_kategori');



    }
	public function index()
	{
		$this->load->view('login');
	}

	public function frontend(){
        $data['kajian'] = $this->model_kajian->tampil_data();
        $data['kategori'] = $this->model_kategori->tampil_data();
        $data['lowongan'] = $this->model_lowongan->tampil_data();
        $data['kutipan'] = $this->model_kutipan->tampil_data();
        $data['event'] = $this->model_event->tampil_data();
         $this->load->view('frontend/index',$data);
    }
    public function kajian(){
        $data['kajian'] = $this->model_kajian->tampil_data();
        $data['kategori'] = $this->model_kategori->tampil_data();
        $data['lowongan'] = $this->model_lowongan->tampil_data();
        $data['kutipan'] = $this->model_kutipan->tampil_data();
        $data['event'] = $this->model_event->tampil_data();
        $this->load->view('frontend/comingsoon',$data);
    }
    public function about(){
        $data['kajian'] = $this->model_kajian->tampil_data();
        $data['kategori'] = $this->model_kategori->tampil_data();
        $data['lowongan'] = $this->model_lowongan->tampil_data();
        $data['kutipan'] = $this->model_kutipan->tampil_data();
        $data['event'] = $this->model_event->tampil_data();
        $this->load->view('frontend/comingsoon',$data);
    }
    public function kategori(){
        $data['kajian'] = $this->model_kajian->tampil_data();
        $data['kategori'] = $this->model_kategori->tampil_data();
        $data['lowongan'] = $this->model_lowongan->tampil_data();
        $data['kutipan'] = $this->model_kutipan->tampil_data();
        $data['event'] = $this->model_event->tampil_data();
        $this->load->view('frontend/comingsoon',$data);
    }
    public function lowongan(){
        $data['kajian'] = $this->model_kajian->tampil_data();
        $data['kategori'] = $this->model_kategori->tampil_data();
        $data['lowongan'] = $this->model_lowongan->tampil_data();
        $data['kutipan'] = $this->model_kutipan->tampil_data();
        $data['event'] = $this->model_event->tampil_data();
        $this->load->view('frontend/comingsoon',$data);
    }
    public function event(){
        $data['kajian'] = $this->model_kajian->tampil_data();
        $data['kategori'] = $this->model_kategori->tampil_data();
        $data['lowongan'] = $this->model_lowongan->tampil_data();
        $data['kutipan'] = $this->model_kutipan->tampil_data();
        $data['event'] = $this->model_event->tampil_data();
        $this->load->view('frontend/comingsoon',$data);
    }
    public function kampanye(){
        $data['kategori'] = $this->model_kategori->tampil_data();
        $this->load->view('frontend/kampanye',$data);
    }
//    public function kategori(){
//        $id = $this->uri->segment(3);
//        $data['kategori'] = $this->model_kategori->tampil_data();
//        $this->load->view('frontend/kategori',$data);
//    }
    public function detail(){
        $id = $this->uri->segment(3);
        $data['kategori'] = $this->model_kategori->tampil_data();

        $this->load->view('frontend/detail_kampanye',$data);
    }
}
