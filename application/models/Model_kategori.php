<?php 
class Model_kategori extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tbl_kategori');
    }
  
    function post($data){
        $this->db->insert('tbl_kategori',$data);
    }

    function get_one($id)
    {
        $param  =   array('kategori_id'=>$id);
        return $this->db->get_where('tbl_kategori',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('kategori_id',$id);
        $this->db->update('tbl_kategori',$data);
    }
    function delete($id)
    {
        $this->db->where('kategori_id',$id);
        $this->db->delete('tbl_kategori');
    }
}



 ?>