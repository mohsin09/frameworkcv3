<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {
	public function __construct() { 
		parent::__construct(); 
		$this->load->helper(array('form', 'url')); 
	 }

	/*
	 */
	public function index()
	{	

		$data = array();
		$data['upload_path'] = $this->config->item('upload_path');

		//echo "Herere"; exit;
		$this->load->model('doctor_model');

		$data['doctors'] = $this->doctor_model->get_all();
		

		//common on each page. 
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		//changes on each page. 
		//content part. 
		$this->load->view('doctors/index',$data);
		//common on each page. 
		$this->load->view('common/footer');
	}

	public function create(){

		$data = array();
		
        $data['errors'] = '';
		$this->load->model('doctor_model');
		$data['doctors'] = $this->doctor_model->get_all();
        //$data['hospitals'] = $this->hospital_model->get_all();


		 $post_data = $this->input->post();
	


        $this->load->library('form_validation');

       $rules = array(
		// array(
		// 	'field' => 'image',
		// 	'label' => 'Image',
		// 	'rules' => 'required'
		// 	),
		array(
			'field' => 'city_id',
			 'label' => 'Name',
			  'rules' => 'required'
		),
		array(
			'field' => 'speciality_id',
			 'label' => 'Name',
			  'rules' => 'required'
		),
       array(
              'field' => 'name',
               'label' => 'Name',
                'rules' => 'required'
		  ),

		  array(
			'field' => 'qualification',
			 'label' => 'Qualification',
			  'rules' => 'required'
		),
		array(
			'field' => 'experience',
			 'label' => 'Experience',
			  'rules' => 'required'
		),
		array(
			'field' => 'phone',
			 'label' => 'Phone',
			  'rules' => 'required'
		),
		array(
			'field' => 'address',
			 'label' => 'Address',
			  'rules' => 'required'
		),
		array(
			'field' => 'schedule',
			 'label' => 'Schedule',
			  'rules' => 'required'
		),
		


);

$this->form_validation->set_rules($rules);
$upload = array('error' => '');


if(isset($post_data['name'])){

	$upload = $this->doupload();
	
	
	$post_data = $this->input->post();
	
	
	if($this->form_validation->run() && empty($upload['error'])){
	
	$post_data['image'] = $upload['image'];
	
	// echo "<pre>";
	// print_r($post_data);
	// exit;

$this->doctor_model->add_doctors($post_data);
redirect(base_url().'doctors/index');

}else{

$data['errors'] = validation_errors();


}

}
$data['upload']=$upload;


//common on each page.
$this->load->view('common/header');
//$this->load->view('common/sidebar');
//changes on each page.
//content part.
$this->load->view('doctors/create',$data);
//common on each page.
$this->load->view('common/footer');

}
public function update($id)
    {
		
		$this->load->model('doctor_model');
	 
	  $data = array();
	 
      $id = $this->uri->segment(3);
	
$doctor = $this->doctor_model->update_doctors_get_by_id($id);

$post_data = $this->input->post();
$this->load->library('form_validation');

$rules = array(
	array(
		   'field' => 'name',
			'label' => 'Name',
			 'rules' => 'required'
	   ),
	   array(
		'field' => 'city_id',
		 'label' => 'Name',
		  'rules' => 'required'
	),
	array(
		'field' => 'speciality_id',
		 'label' => 'Name',
		  'rules' => 'required'
	),
	   array(
		 'field' => 'qualification',
		  'label' => 'Qualification',
		   'rules' => 'required'
	 ),
	 array(
		 'field' => 'experience',
		  'label' => 'Experience',
		   'rules' => 'required'
	 ),
	 array(
		 'field' => 'phone',
		  'label' => 'Phone',
		   'rules' => 'required'
	 ),
	 array(
		 'field' => 'address',
		  'label' => 'Address',
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

$data = array(
'name' => $this->input->post('name'),
'qualification' => $this->input->post('qualification'),
'specialty' => $this->input->post('specialty'),
'experience' => $this->input->post('experience'),
'phone' => $this->input->post('phone'),
'address' => $this->input->post('address'),
'schedule' => $this->input->post('schedule'),

);

if($this->doctor_model->update_doctors($id,$data)) // call the method from the model
{

redirect(base_url().'doctors/index');

}
else
{
$data['errors'] = validation_errors();
}

}

$data['doctor'] = $doctor;

$this->load->view('common/header');
$this->load->view('common/sidebar');
$this->load->view('doctors/update',$data);
$this->load->view('common/footer');
}
public function delete($id){
	
	$this->load->model('doctor_model');
	$doctor=$this->doctor_model->delete_doctor($id);
	if(empty($doctor)){
		$this->session->set_flashdata('failure','Record cannot found');
		redirect(base_url().'doctors/index');
	}
}
public function doupload(){

	$upload = array();
	$upload['image'] = '';
	$upload['error'] = '';
	$upload['status'] = FALSE;
	
	$config['upload_path'] = './uploads';
	$config['allowed_types'] = 'gif|jpg|png';
	// $config['max_size'] = 1024;
	// $config['max_width'] = 1024;
	// $config['max_height'] = 1200;
	$this->load->library('upload', $config);
	
	if (!$this->upload->do_upload('image'))
	{
	$data = array('error' => $this->upload->display_errors());
	
	
	
	$upload['error'] = $data['error'];
	}
	else
	{
	$data = $this->upload->data();
	$upload['status'] = TRUE;
	$upload['image'] = $data['file_name'];
	
	}
	
	return $upload;
	
	}
	public function details($id){
		$data = array();
		
		$data['upload_path'] = $this->config->item('upload_path');
		
		//echo "Herere"; exit;
		$this->load->model('doctor_model');
		
		$data['doctors'] = $this->doctor_model->userprofile($id);
		// $config['upload_path'] = './uploads';
		// $this->load->library('upload', $config);
		// //common on each page.
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		//changes on each page.
		//content part.
		$this->load->view('doctors/details',$data);
		//common on each page.
		$this->load->view('common/footer');
		}


}