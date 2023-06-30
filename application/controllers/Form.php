<?php
    class Form extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Formulario');
        }
        public function nuevoC(){
          	$this->load->view('header');
            $this->load->view('formularios/nuevoC');
            $this->load->view('footer');
          }
        public function indexC(){
            $data['candidato']=$this->Formulario->obtenerTodos();
            $this->load->view('header');
            $this->load->view('formularios/indexC',$data);
            $this->load->view('footer');
          }

          public function guardar(){
            $datosNuevosFormulario=array("dignidad_ca"=>$this->input->post('dignidad_ca'),"nombre_ca"=>$this->input->post('nombre_ca'),
                "apellido_ca"=>$this->input->post('apellido_ca'),"cedula_ca"=>$this->input->post('cedula_ca'),"edad_ca"=>$this->input->post('edad_ca'),"movimiento_ca"=>$this->input->post('movimiento_ca'),
                "latitud_ca"=>$this->input->post('latitud_ca'),"longitud_ca"=>$this->input->post('longitud_ca')
              );
              // var_dump($datosNuevosFormulario);
              // return false;
              if($this->Formulario->insertar($datosNuevosFormulario)){
                redirect('Form/indexC');
              }else{
                echo "<h1>ERROR AL INSERTAR</h1>";
              }

           }
           //FUNCION PARA ELIMINAR CONSTRUCTORES
           public function eliminar($id_ca){
             if ($this->Formulario->borrar($id_ca)){
               redirect('Form/indexC');
               // code...
             } else {
               echo "ERROR AL BORRAR :/";
             }

          }


          //function renderizar vista editar con el instructor
           public function editarC($id_ca){
               $data["instructorEditar"]=$this->Formulario->obtenerPorId($id_ca);
               $this->load->view('header');
               $this->load->view('formularios/editarC',$data);
               $this->load->view('footer');
             }

             //Proceso de actualización
             public function procesarActualizacion(){
               $datosEditados=array(
                 "dignidad_ca"=>$this->input->post('dignidad_ca'),"nombre_ca"=>$this->input->post('nombre_ca'),
                     "apellido_ca"=>$this->input->post('apellido_ca'),"cedula_ca"=>$this->input->post('cedula_ca'),"edad_ca"=>$this->input->post('edad_ca'),"movimiento_ca"=>$this->input->post('movimiento_ca'),
                     "latitud_ca"=>$this->input->post('latitud_ca'),"longitud_ca"=>$this->input->post('longitud_ca')
               );
               $id_ca=$this->input->post("id_ca");
               if($this->Formulario->actualizar($id_ca,$datosEditados)){
                 redirect("Form/indexC");
               }else{
                 echo "ERROR AL ACTUALIZAR :(";
               }
             }

         }//cierre de la clases NOOOOOOOOOOO BORRRAARRRR

     ?>
