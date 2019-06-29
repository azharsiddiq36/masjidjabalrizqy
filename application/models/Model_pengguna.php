<?php 
class Model_pengguna extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tbl_pengguna');
    }
  
    function post($data){
        $this->db->insert('tbl_pengguna',$data);
    }

    function get_one($id)
    {
        $param  =   array('pengguna_id'=>$id);
        return $this->db->get_where('tbl_pengguna',$param);
    }

    function edit($data,$id)
    {
        $this->db->where('pengguna_id',$id);
        $this->db->update('tbl_pengguna',$data);
    }
    function delete($data,$id)
    {
        $this->db->where('pengguna_id',$id);
        $this->db->update('tbl_pengguna',$data);
    }


}



 ?>