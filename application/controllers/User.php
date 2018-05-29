<?php

class User extends CI_Controller {


public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}



public function registro()
{
$this->load->view('register.php');
}



  public function index(){
    //$res=$this->user_model->getRecipe();
    //if($res){
      //$data['result'] = $res;
    $data=array(
      'receta'=>$this->user_model->getRecipe()
    );
      $this->load->view('dashboard.php',$data);
    //}
    
  }


  public function register_user(){
    $user=array(
      'name'=>$this->input->post('name'),
      'email'=>$this->input->post('email'),
      'password'=>sha1($this->input->post('password')),

        );
  

$email_check=$this->user_model->email_check($user['email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('index.php/user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('index.php/user/registro');


}

}

public function login_view(){

$this->load->view("login.php");

}

function login_user(){
  
  $user_login=array(

  'email'=>$this->input->post('email'),
  'password'=>sha1($this->input->post('password'))

    );

    $data=$this->user_model->login_user($user_login['email'],$user_login['password']);
      if($data)
      {
        $this->session->set_userdata('id',$data['id']);
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('name',$data['name']);
 

       $this->load->view("perfil.php");

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
       $this->load->view("login.php");

      }

  }


function user_profile(){

$this->load->view('perfil.php');

}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('index.php/user/login_view', 'refresh');
}

public function vista_perfil(){

$this->load->view('perfil_vista.php');
}


  function user_perfil(){
    $this->load->view('perfil.php');
  }


  public function list(){
    $res=$this->user_model->getRecipe();
      if($res){
        $this->load->view();
    }
  }
 function agregar(){
    $this->load->view('agregar.php');
  }
}
?>


