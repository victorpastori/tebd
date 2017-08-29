<?php
class Labs_model extends CI_Model {

  public function buscaLabs(){
    $this->db->select('idlaboratorio, nome');
    return $this->db->get("laboratorio")->result_array();
  }

  public function salvarLab($laboratorio){
    $this->db->insert("laboratorio", $laboratorio);
  }
}

 ?>
