<?php
class Recursos_model extends CI_Model {

  public function buscaIdRecrusos(){
    $this->db->select('idRecurso, nome');
    return $this->db->get("recurso")->result_array();
  }

  public function salvarRecurso($recurso){
    $this->db->insert("recurso", $recurso);
  }
}

 ?>
