<?php 
class Model_Kajian extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        $this->db->select("*");
        $this->db->join('tbl_tema','tbl_tema.tema_id = tbl_kajian.kajian_tema_id');
        $this->db->order_by('kajian_tanggal','DESC');
        $this->db->order_by('kajian_jam','DESC');
        $query = $this->db->get('tbl_kajian');
        return $query;
    }
  
    function post($data){
        $this->db->insert('tbl_kajian',$data);
    }

    function get_one($id)
    {
        $param  =   array('kajian_id'=>$id);
        return $this->db->get_where('tbl_kajian',$param);
    }

    function edit($data,$id)
    {
        $this->db->where('kajian_id',$id);
        $this->db->update('tbl_kajian',$data);
    }
    function delete($data,$id)
    {
        $this->db->where('kajian_id',$id);
        $this->db->update('tbl_kajian',$data);
    }


}



 ?>