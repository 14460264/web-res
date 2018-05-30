<?php
class User_model extends CI_model{


  public function register_user($user){
    $this->db->insert('userapp', $user);
  }

  public function login_user($email,$password){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email',$email);
    $this->db->where('password',$password);

    if($query=$this->db->get())    {
        return $query->row_array();
    } else{
      return false;
    }
  }

  public function email_check($email){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email',$email);
    $query=$this->db->get();


    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }
  }

  public function getRecipe(){
    $data=array();
    $this->db->select('*');
    $this->db->from('recipe');
    $this->db->limit('5');
    return $this->db->get()->result_array();
    /*
      obtiene la receta con su detalle de datos
    $data=array();
    $this->db->select('*');
    $this->db->from('recipe');
    $this->db->join('recipedetails','recipe.idRecipe = recipedetails.idRecipeD');
    return $this->db->get()->result_array();*/

  }

  public function cuenta(){
    $data=array();
    $this->db->select('*');
    $this->db->from('recipe');
    return $this->db->get()->result_array();
  }

  public function ingredientes(){
    $ing=array();
    $this->db->select('*');
    $this->db->from('listingredients');
    return $this->db->get()->result_array();
  }

  function grabaReceta($datos){
    $this->db->insert('recipe',$datos);
  }

  public function datos_receta_lista(){
    $data=array();
    $this->db->select('*');
    $this->db->from('recipe');
    $this->db->join('listdificult','recipe.idDificult = listdificult.idCategoryDif');
    $this->db->join('listcategory','recipe.idCategory = listcategory.idCategoryFood');
    $this->db->order_by('idRecipe','asc');
    return $this->db->get()->result_array();
  } 

  public function detalles_receta($datos){
    $data=array();
    $this->db->select('*');
    $this->db->from('recipe');
    $this->db->join('recipedetails','recipe.idRecipe = recipedetails.idRecipeD');
    $this->db->join('listdificult','recipe.idDificult = listdificult.idCategoryDif');
    $this->db->join('listcategory','recipe.idCategory = listcategory.idCategoryFood');
    $this->db->order_by('idRecipe','asc');
    return $this->db->get()->result_array();
  }

}
?>