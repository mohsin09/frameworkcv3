<?php 

class Authorization_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function get_by_login($email,$password){

        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where(array('email'=> $email ,'password'=>$password));
        $query=$this->db->get();
        
        //  echo "<pre>234234234234";
        //             print_r($query);
        //             exit;
        return $query->row();
        
    }



}
