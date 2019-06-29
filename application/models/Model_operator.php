<?php
class Model_Operator extends CI_Model{



    function login($username,$password)
    {
        $cek=  array('pengguna_username'=>$username,'pengguna_password'=>md5($password));
        return $this->db->get_where('tbl_pengguna',$cek);
        
    } 

    function tampildata()
    {
        return $this->db->get('user');
    }

    function get_one($id)
    {
        $param  =   array('no_hp'=>$id);
        return $this->db->get_where('operator',$param);
    }
}
