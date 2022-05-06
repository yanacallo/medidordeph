<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lugares extends CI_Controller
{

    function __construct()
    {
        parent::__construct(); //invocando al constructor de la clase padre
        $this->load->database(); //cargando persistencia
        $this->load->library('Grocery_CRUD'); //cargando crud
        $this->load->model("lugar");
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function gestionLugares()
    {
        $terrenos = new grocery_CRUD();
        $terrenos->set_subject('Localidad');
        $terrenos->set_table('localidades'); //estableciendo la tabla de l BDD
        $terrenos->set_theme('datatables'); //definiendo al aspeto grafico
        $terrenos->columns('id_loc', 'provincia_loc', 'canton_loc', 'parroquia_loc', 'barrio_loc');
        $terrenos->display_as('id_loc', '#');
        $terrenos->display_as('provincia_loc', 'Provincia');
        $terrenos->display_as('canton_loc', 'Canton');
        $terrenos->display_as('parroquia_loc', 'Parroquia');
        $terrenos->display_as('barrio_loc', 'Barrio');
        $terrenos->fields('provincia_loc', 'canton_loc', 'parroquia_loc', 'barrio_loc');
        $terrenos->set_language("spanish");
        $terrenos->set_theme("flexigrid");

        $terrenos->unset_clone();

        $output = $terrenos->render();
        $this->load->view('header');
        $this->load->view('lugares/index', $output);
        $this->load->view('footer');
    }

    public function listarTerrenos()
    {
        $this->load->model('lugar');
        $listadoTerrenos = $this->terreno->obtenerDatos();
        if ($listadoTerrenos) {
            echo json_encode(array(
                "estado" => "ok",
                "datos" => $listadoTerrenos->result()
            ));
        } else {
            echo json_encode(array(
                "estado" => "error",
                "mensaje" => "No existe terrenos dentro de la API"
            ));
        }
    }

    public function guardarTerreno()
    {

        // $provincia = "PRUEBA";
        // $canton = "PRUEBA";
        // $parroquia = "PRUEBA";
        // $barrio = "PRUEBA";
        // $direccion = "PRUEBA";
        $provincia = $this->input->post('provincia_ter');
        $canton = $this->input->post('canton_ter');
        $parroquia = $this->input->post('parroquia_ter');
        $barrio = $this->input->post('barrio_ter');
        $direccion = $this->input->post('direccion_ter');
        /*$usuario_creacion = $this->input->post('usuario_creacion');
        $usuario_actualizacion = $this->input->post('usuario_actualizacion');*/


        $datosNuevoTerreno = array(
            "provincia_ter" => $provincia,
            "canton_ter" => $canton,
            "parroquia_ter" => $parroquia,
            "barrio_ter" => $barrio,
            "direccion_ter" => $direccion
            /*"usuario_creacion_tip" => $usuario_creacion,
            "usuario_actualizacion_tip" => $usuario_actualizacion*/
        );
        $agregarTerreno = $this->lugar->insertarTerreno($datosNuevoTerreno);
        if ($agregarTerreno) {
            echo json_encode(array(
                "estado" => "ok"
            ));
        } else {
            echo json_encode(array(
                "estado" => "error",
                "mensaje" => "No se pudo insertar"
            ));
        }
    }
}
