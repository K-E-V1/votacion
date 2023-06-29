<?php
  class Reporte extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->model('Formulario');
    }
  //Renderización de la vista
  //muestra los desayunos
  public function report1(){
    $data['lugares1']=$this->Formulario->obtenerN();
    $this->load->view('header');
    $this->load->view('reporte/report1',$data);
    $this->load->view('footer');
  }

  public function report2(){
    $data['lugares2']=$this->Formulario->obtenerPRO();
    $this->load->view('header');
    $this->load->view('reporte/report2',$data);
    $this->load->view('footer');
  }

  public function report3(){
    $data['lugares3']=$this->Formulario->obtenerPRE();
    $this->load->view('header');
    $this->load->view('reporte/report3',$data);
    $this->load->view('footer');
  }

  public function report4(){
    $data['lugares1']=$this->Formulario->obtenerN();
    $data['lugares2']=$this->Formulario->obtenerPRO();
    $data['lugares3']=$this->Formulario->obtenerPRE();
    $this->load->view('header');
    $this->load->view('reporte/report4',$data);
    $this->load->view('footer');
  }


}//No borrar el cierre de la clase
 ?>
