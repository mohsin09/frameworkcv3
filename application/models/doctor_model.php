<?php 

Class Doctor_model extends CI_Model{

    public function get_all(){
        
       $data =  $this->db->get('doctor')->result();
       return $data;
    }


    public function add_doctors($data){

        $this->db->insert('doctor', $data);
        
    }
    public function update_doctors_get_by_id($id){
        
        $data = $this->db->where('id',$id)->get('doctor')->row();
        
        return $data;
        
        
    }
    public function update_doctors($id,$data){
        
        return $this->db->update('doctor',$data,array('id'=>$id));
        
    }
    public function delete_doctor($id){

        $this->db->where('id',$id);
        $this->db->delete('doctor');
        
        
        
        }
        public function userprofile($id){



            $data=$this->db
            ->where('id',$id)
            ->get('doctor')
            ->result();
            
            return $data;
          
            
            }

    
   
    
   
}