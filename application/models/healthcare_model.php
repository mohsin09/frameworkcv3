<?php 

class Healthcare_model extends CI_Model{

   

    public function get_all_countries(){
        $query = $this->db->get('city')->result();
        return $query;
   
    
}

public function fetch_country(){
    $this->db->order_by("name","ASC");
    $query = $this->db->get('city');
    if($query->num_rows() > 0){
        return $query->result();

    }
}
public function fetch_speciality($city_id){
    $this->db->where('city_id',$city_id);
    $this->db->order_by('name','ASC');
    $query= $this->db->get('speciality');
    
    $output='<option value="">Select speciality</option>';
    foreach($query->result() as $row)
    {
        $output .='<option value="'.$row->id.'">'.$row->name.'</option>';

    }
    return $output;
}


}
?>