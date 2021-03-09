<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hospitals extends CI_Controller{

    public function index(){

        $data = array();
        
        $this->load->model('hospital_model');
        

        
        $data['hospitals'] = $this->hospital_model->get_all();
       


        $this->load->view('common/header');
        $this->load->view('common/sidebar');
        $this->load->view('hospitals/index',$data);

        $this->load->view('common/footer');




    }
    public function create(){

		$data = array();
        $data['errors'] = '';
        $this->load->model('hospital_model');


         $post_data = $this->input->post();


        $this->load->library('form_validation');

       $rules = array(
       array(
              'field' => 'name',
               'label' => 'Name',
                'rules' => 'required'
		  ),
		  array(
			'field' => 'address',
			 'label' => 'Address',
			  'rules' => 'required'
		),
		array(
			'field' => 'departments',
			 'label' => 'Departments',
			  'rules' => 'required'
		),
		array(
			'field' => 'labs',
			 'label' => 'Labs',
			  'rules' => 'required'
		),
		array(
			'field' => 'doctors',
			 'label' => 'Doctors',
			  'rules' => 'required'
		),
		array(
			'field' => 'ambulance',
			 'label' => 'Ambulance',
			  'rules' => 'required'
		),
		array(
			'field' => 'schedule',
			 'label' => 'Schedule',
			  'rules' => 'required'
		),
		


);

$this->form_validation->set_rules($rules);


if(isset($post_data['name'])){

if($this->form_validation->run()){

$this->hospital_model->add_hospitals($post_data);
redirect(base_url().'hospitals/index');

}else{

$data['errors'] = validation_errors();

}

}

//common on each page.
$this->load->view('common/header');
$this->load->view('common/sidebar');
//changes on each page.
//content part.
$this->load->view('hospitals/create',$data);
//common on each page.
$this->load->view('common/footer');

}

public function update($id){

$this->load->model('hospital_model');

}



}