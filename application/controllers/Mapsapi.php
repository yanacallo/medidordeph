<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapsapi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mapsapi_Model'); //Cargamos el Modelo
	}

	//Funcion para cargar la vista principal de Geolocalizacion que envia los registros de markadores de la BDD
	public function index(){
		$this->load->view('header');
		$data['locations']=$this->Mapsapi_Model->getLocations();
		$this->load->view('maps/index',$data);
		$this->load->view('footer');
	}

}
