<?php 
class Model_kutipan extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tbl_kutipan');
    }
  
    function post($data){
        $this->db->insert('tbl_kutipan',$data);
    }

    function get_one($id)
    {
        $param  =   array('kutipan_id'=>$id);
        return $this->db->get_where('tbl_kutipan',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('kutipan_id',$id);
        $this->db->update('tbl_kutipan',$data);
    }
    function delete($id)
    {
        $this->db->where('kutipan_id',$id);
        $this->db->delete('tbl_kutipan');
    }
}



 ?>