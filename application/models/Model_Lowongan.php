<?php 
class Model_Lowongan extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tbl_lowongan');
    }
  
    function post($data){
        $this->db->insert('tbl_lowongan',$data);
    }

    function get_one($id)
    {
        $param  =   array('lowongan_id'=>$id);
        return $this->db->get_where('tbl_lowongan',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('lowongan_id',$id);
        $this->db->update('tbl_lowongan',$data);
    }
    function delete($id)
    {
        $this->db->where('lowongan_id',$id);
        $this->db->delete('tbl_lowongan');
    }
}



 ?>