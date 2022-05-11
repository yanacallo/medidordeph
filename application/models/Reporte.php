<?php

class Reporte  extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    //BARRIOS
    public function obtenerDatosBarrios(){
        $query = $this->db->get('barrios');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
}


// href="<?php echo site_url('reportes/traerDatosBarrios');"

?>