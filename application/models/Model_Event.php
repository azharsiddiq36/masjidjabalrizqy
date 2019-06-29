<?php 
class Model_Event extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();

    }

    function tampil_data(){
	    $this->db->select("*");
	    $this->db->join('tbl_kategori','tbl_kategori.kategori_id = tbl_event.event_id_kategori');
	    $query = $this->db->get('tbl_event');
        return $query;
    }
  
    function post($data){
        $this->db->insert('tbl_event',$data);
    }

    function get_one($id)
    {
        $param  =   array('event_id'=>$id);
        return $this->db->get_where('tbl_event',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('event_id',$id);
        $this->db->update('tbl_event',$data);
    }
    function delete($id)
    {
        $this->db->where('event_id',$id);
        $this->db->delete('tbl_event');
    }
}



 ?>