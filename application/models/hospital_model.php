<?php 

class Hospital_model extends CI_Model{

    public function get_all(){
         $data = $this->db->get('hospital')->result();
       
        return $data;
    }
    public function add_hospital($data){

        $this->db->insert('doctor', $data);
    }
    public function add_hospitals($data){

        $this->db->insert('hospital', $data);
        
    }
}