<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorizations extends CI_Controller {
    public function login(){
        $this->load->library('session');
      

        $this->load->model('authorization_model');
        $this->load->library('form_validation');
        echo validation_errors();
    


        $data = array();
        $data['login_error'] = '';

        if (isset($_POST['login'])) {
            
                $this->form_validation->set_rules('email','email','required');
                $this->form_validation->set_rules('password','password','required|min_length[5]');
                if($this->form_validation->run()==true){
                  
                    $email = $_POST['email'];
                    $password =$_POST['password'];
                   

                    $admin = $this->authorization_model->get_by_login($email,$password);

                    // echo "<pre>234234234234";
                    // print_r($admin);
                    // exit;

                    if (is_object($admin)) {

                        $this->session->set_flashdata("success","Your are logged in");
                        $_SESSION['user_logged']= TRUE;
                        $_SESSION['name']= $admin->name;
                        redirect("home","Refresh");

                    }else{
                        $data['login_error'] = "Invalid email or password!";  
                    }
                }
            }
           

            $this->load->view('authorizations/login',$data);




    }
    public function registration(){
        $this->load->library('session');
        $this->load->library('form_validation');
        echo validation_errors();
        
        if (isset($_POST['registration'])) {
            $this->form_validation->set_rules('name','name','required');
            $this->form_validation->set_rules('email','email','required');
            $this->form_validation->set_rules('password','password','required|min_length[5]');
            if($this->form_validation->run()==true){
                
                $data=array(
                    'name'=>$_POST['name'],
                    'email'=>$_POST['email'],
                    'password'=>$_POST['password'],);
                $this->db->insert('admin', $data);            
                    $this->session->set_flashdata("success","Your account has been register");
                    redirect("home","Refresh");
            }
            else{
                echo "error";
            }
           
        }
        
        
        $this->load->view('authorizations/registration');








    }
    public function logout(){
        $this->load->library('session');
        

        $this->session->unset_userdata('name');
        redirect("Authorizations/login","Refresh");



    }




}