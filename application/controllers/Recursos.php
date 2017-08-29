<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recursos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("equipamentos/Equipamentos_model");
		$this->load->library('Recurso');
	}

	public function index(){
		$this->load->view('welcome_message');
	}

	public function novoRecruso(){

		$recurso = new Recurso();
		$recurso->nome = "Impressora 3D";
		$recurso->descricao = "Impressora 3D é uma maquina para impressão de objetos tridimensionais.
		Exestem algumas tecnologias de impressão 3D, sendo a mais popular a FDM.";
		$this->Equipamentos_model->salvarRecurso($recurso);
		$idrecurso = $this->db->insert_id();

		$this->Recursos_model->salvarRecruso($recurso);
		$this->load->view("recursos/novo.php");
	}
}
