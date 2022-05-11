<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reportes extends CI_Controller
{

    function __construct(){
        parent::__construct(); //invocando al constructor de la clase padre
        $this->load->database(); //cargando persistencia
        $this->load->library('Grocery_CRUD'); //cargando crud
        $this->load->model("reporte");
    }


    public function index(){
        
        $this->load->view('header');
        $this->load->view('reportes/index'); 
        $this->load->view('footer');
    }
    

    function traerDatosBarrios(){
        $this->load->database(); //cargando persistencia
        $this->load->model('reporte');
        $listadoReporte = $this->reporte->obtenerDatosBarrios();
        if ($listadoReporte) {
            
            echo json_encode(array(
                "estado" => "ok",
                "datos" => $listadoReporte->result()
            ));
        } else {
            echo json_encode(array(
                "estado" => "error",
                "mensaje" => "No existe terrenos dentro de la API"
            ));
        }

    }
}

?>