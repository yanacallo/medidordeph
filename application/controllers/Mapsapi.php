<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapsapi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database(); //cargando persistencia
		$this->load->library('Grocery_CRUD'); //cargando crud
		$this->load->model('Mapsapi_Model'); //Cargamos el Modelo
	}

	//Funcion para cargar la vista principal de Geolocalizacion que envia los registros de markadores de la BDD
	public function index(){
		$this->load->view('header');
		$data['locations']=$this->Mapsapi_Model->getLocations();
		$this->load->view('maps/index',$data);
		$this->load->view('footer');
	}

	public function gestionLugares()
	{
			$terrenos = new grocery_CRUD();
			$terrenos->set_subject('Localidad');
			$terrenos->set_table('locations'); //estableciendo la tabla de l BDD
			$terrenos->set_theme('datatables'); //definiendo al aspeto grafico
			$terrenos->columns('id', 'lat', 'lng', 'title', 'description', 'propietario', 'producto', 'imagen');
			$terrenos->set_field_upload('imagen','assets/uploads/terrenos/');//forma para subir un archivo
			$terrenos->display_as('id', '#');
			$terrenos->display_as('lat', 'Latitud');
			$terrenos->display_as('lng', 'Longitud');
			$terrenos->display_as('title', 'Dirección');
			$terrenos->display_as('description', 'Descripción');
			$terrenos->display_as('propietario', 'Propietario');
			$terrenos->display_as('producto', 'Producto');
			$terrenos->display_as('imagen', 'Imagen');
			$terrenos->fields('lat', 'lng', 'title', 'description', 'propietario', 'producto', 'imagen');
			$terrenos->set_language("spanish");
			$terrenos->set_theme("flexigrid");

			$terrenos->unset_clone();

			$output = $terrenos->render();
			$this->load->view('header');
			$this->load->view('maps/gestion', $output);
			$this->load->view('footer');
	}

}
