<?php

class User extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('user_model');
    $this->load->library('session');
  }

  public function index(){
    //$this->load->view('dashboard.php');
    //$res=$this->user_model->getRecipe();
      //if($res){
        //$data['result'] = $res;
      $data=array(
        'receta'=>$this->user_model->getRecipe()
      );
        $this->load->view('dashboard.php',$data);
      //}   
  }

  public function registro(){
    $this->load->view('register.php');
  }

  public function register_user(){
    $user=array(
      'firstName'=>$this->input->post('name'),
      'lastName'=>$this->input->post('apellidos'),
      'email'=>$this->input->post('email'),
      'password'=>sha1($this->input->post('password'))
    );
    //print_r($user);
    $email_check=$this->user_model->email_check($user['email']);
    if($email_check){
      $this->user_model->register_user($user);
      $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
      redirect('index.php/user/index');
    }else{
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
    print_r($user);
    $email_check=$this->user_model->email_check($user['email']);
    if($email_check){
      $this->user_model->register_user($user);
      $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
      redirect('user/login_view');
    }else{
      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      redirect('user');
    }
  }

  function user_profile(){
    $this->load->view('perfil.php');
  }

  public function vista_perfil(){
    $this->load->view('perfil_vista.php');
  }

  public function viewauction(){
    if($data){
      $this->session->set_userdata('id',$data['id']);
      $this->session->set_userdata('email',$data['email']);
      $this->session->set_userdata('name',$data['name']);
      $this->load->view("perfil.php");
    }else{
      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      $this->load->view("login.php");
    }
  }

  public function user_logout(){
    $this->session->sess_destroy();
    redirect('user/login_view', 'refresh');
  }

  function receta_nueva(){
    $datos=array(
    'idRecipe'=>$this->input->post('idRecipe'),
    'idDificult'=>$this->input->post('category'),
    'nameRecipe'=>$this->input->post('nameRecipe'),
    'time'=>$this->input->post('time'),
    'steps'=>$this->input->post('steps'),
    'description'=>$this->input->post('description')
  );
    //mandamos los datos del nuevo contacto
    $this->user_model->grabaReceta($datos);
    $this->index();
    //print_r($datos);
  }

  function ver_receta(){
    $datos=array(
      'idRecipe'=>$this->input->post('idRecipe')
    );
    $this->user_model->detalles_receta($datos);
    $this->detalle_list_us();
  }

  function detalle_list_us(){
    $this->load->view('detalles_lista_user.php');
  }

  function agregarR (){
    $data1=array(
        'recetas'=>$this->user_model->cuenta()
      );
    $data2=array(
        'ing'=>$this->user_model->ingredientes()
      );
    $recetas= array_merge($data1,$data2);

    $this->load->view('receta.php',$recetas);
  }

  function listaRecetas(){
    $dato=array(
        'recetas'=>$this->user_model->datos_receta_lista()
      );
    $this->load->view('lista_receta_usuario.php',$dato);
  }

}
?>