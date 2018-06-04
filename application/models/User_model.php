<?php
class User_model extends CI_model{


public function register_user($user){


$this->db->insert('userapp', $user);

}

public function login_user($email,$password){

  $this->db->select('*');
  $this->db->from('userapp');
  $this->db->where('email',$email);
  $this->db->where('password',$password);

  if($query=$this->db->get())
  {
      return $query->row_array();
  } else{
      return false;
  }
}



  public function email_check($email){
    $this->db->select('*');
    $this->db->from('userapp');
    $this->db->where('email',$email);
    $query=$this->db->get();


    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }
  }

  public function getCatalogosErrores(){
    $this->db->select('*');
    $this->db->from('c_error');
    $query=$this->db->get();
  
    if($query->num_rows()>0){
      return $query->row();
    }else{
      return true;
    }
  }



  public function getRecipe(){
    $data=array();
    $this->db->select('*');
    $this->db->from('recipe');
    $this->db->limit('6');
    return $this->db->get()->result_array();
    /*
      obtiene la receta con su detalle de datos
    $data=array();
    $this->db->select('*');
    $this->db->from('recipe');
    $this->db->join('recipedetails','recipe.idRecipe = recipedetails.idRecipeD');
    return $this->db->get()->result_array();*/

  }
}
?>