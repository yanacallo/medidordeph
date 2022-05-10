<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mapsapi_Model extends CI_Model{
	public function get_locations()
	{
		return $this->db
		->select('*')
		->from('locations')
		->order_by('id','desc')
		->get()
		->result_array();
	}

	public function getTools(){
		return $this->db
		->select('*')
		->from('locations')
		->order_by('id','desc')
		->get()
		->result_array();
    }

	public function get_loc()
	{
		return $this->db
		->select('lat,lng')
		->from('locations')
		->get()
		->result_array();
		//->row();
	}

	public function get_a_location($where = array())
	{
		return $this->db
		->select('*')
		->where($where)
		->get('locations')
		->row();
	}

	public function insert($data = array())
	{
		$this->db->insert('locations', $data);
	}

	public function update($data = array(),$where = array())
	{
		$this->db->where($where)->update('locations',$data);
		return $this->db->affected_rows();
	}

	public function delete($where = array())
	{
		$this->db->delete('locations',$where);
		return $this->db->affected_rows();
	}
}
