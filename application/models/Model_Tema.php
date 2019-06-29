<?php 
class Model_Tema extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tbl_tema');
    }
  
    function post($data){
        $this->db->insert('tbl_tema',$data);
    }

    function get_one($id)
    {
        $param  =   array('tema_id'=>$id);
        return $this->db->get_where('tbl_tema',$param);
    }

    function edit($data,$id)
    {
        $this->db->where('tema_id',$id);
        $this->db->update('tbl_tema',$data);
    }
    function delete($id)
    {
        $this->db->where('tema_id',$id);
        $this->db->delete('tbl_tema');
    }


}



 ?>