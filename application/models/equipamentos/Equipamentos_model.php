<?php
class Equipamentos_model extends CI_Model {

  public function buscaEquipamentos(){
    return $this->db->get("equipamentos")->result_array();
  }

  public function salvarEquipamento($equipamento){
    $this->db->insert("equipamento", $equipamento);
  }

  public function salvarRecurso($recurso){
    $this->db->insert("recurso", $recurso);
  }
}

 ?>
