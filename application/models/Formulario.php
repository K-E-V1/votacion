<?php
class formulario extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor un instructor en mysql
  function insertar($datos){

  return $this->db->insert("candidato",$datos);
  }
  //FUNCION PARA CONSULTAR Instructores
  function obtenerTodos(){
    $listadoCandidatos=$this->db->get("candidato");
    if($listadoCandidatos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoCandidatos->result();
    }else {
      return false;
    }
  }

  function obtenerN(){
    $this->db->where('dignidad_ca','Nacional');
    $listadoCandidatos=$this->db->get("candidato");
    if($listadoCandidatos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoCandidatos->result();
    }else {
      return false;
    }
  }
  function obtenerPRO(){
    $this->db->where('dignidad_ca','Provincial');
    $listadoCandidatos=$this->db->get("candidato");
    if($listadoCandidatos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoCandidatos->result();
    }else {
      return false;
    }
  }
  function obtenerPRE(){
    $this->db->where('dignidad_ca','Presidente');
    $listadoCandidatos=$this->db->get("candidato");
    if($listadoCandidatos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoCandidatos->result();
    }else {
      return false;
    }
  }
  //BORRAR Instructores
  function borrar($id_ca){
    //DELTE FROM INSTRUCTOR WHERE id_ins
    $this->db->where("id_ca",$id_ca);
    if ($this->db->delete("candidato")) {
      return true;
    } else {
      return false;
    }
  }

      //funcion para consultar un instructor especifico.
      function obtenerPorId($id_ca){
          $this->db->where("id_ca",$id_ca);
          $instructor=$this->db->get("candidato");
          if($instructor->num_rows()>0) {
            return $instructor->row();
          }
          return false;
      }


      function actualizar($id_ca,$datos){
      $this->db->where("id_ca" ,$id_ca);
      return $this->db->update('candidato',$datos);
    }
}
 ?>
