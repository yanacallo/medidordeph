<?php

class Terreno  extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function obtenerDatos()
    {
        $query = $this->db->get('terrenos');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function insertarTerreno($dataTerreno)
    {
        return $this->db->insert("terrenos", $dataTerreno);
    }

    public function eliminar($id)
    {
        $this->db->where("id_ter", $id);
        return $this->db->delete("terrenos");
    }

    public function obtenerPorCodigo($id_ter)
    {
        $this->db->where("id_ter", $id_ter);
        $query = $this->db->get('terrenos');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function actualizar($data, $id_ter)
    {
        $this->db->where("id_ter", $id_ter);
        return $this->db->update("terrenos", $data);
    }
}
