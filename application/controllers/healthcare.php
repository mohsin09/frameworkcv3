<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Healthcare extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('healthcare_model');

    }
	public function index()
	{
    


		$data['city']=$this->healthcare_model->fetch_country();
		$this->load->view('healthhome',$data);
		
	}

	
	public function fetch_speciality(){
		if($this->input->post('city_id'))
		{
			echo $this->healthcare_model->fetch_speciality($this->input->post('city_id'));
		}

	}

	public function fetch_doctorlist(){
		
	}
}