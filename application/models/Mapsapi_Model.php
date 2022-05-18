<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapsapi_Model extends CI_Model{

	//Funcion que retorna un select * from de la tabla 'locations'
	public function getLocations(){
		return $this->db->select('*')
										->from('locations')
										->order_by('id','desc')
										->get()
										->result_array();
  }

}
