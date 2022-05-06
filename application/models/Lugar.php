<?php

class Lugar  extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function obtenerDatos()
    {
        $query = $this->db->get('localidades');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function insertarTerreno($dataTerreno)
    {
        return $this->db->insert("localidades", $dataTerreno);
    }

    public function eliminar($id)
    {
        $this->db->where("id_loc", $id);
        return $this->db->delete("localidades");
    }

    public function obtenerPorCodigo($id_loc)
    {
        $this->db->where("id_loc", $id_loc);
        $query = $this->db->get('localidades');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function actualizar($data, $id_loc)
    {
        $this->db->where("id_loc", $id_loc);
        return $this->db->update("localidades", $data);
    }
}
