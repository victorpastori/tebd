<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamentos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("equipamentos/Equipamentos_model");
		$this->load->library('Equipamento');
		$this->load->library('Recurso');
	}

	public function index(){
		$this->load->view('equipamentos/index');
	}

	public function novo(){

		$recurso = new Recurso();
		$recurso->nome = "Impressora 3D";
		$recurso->descricao = "Impressora 3D é uma maquina para impressão de objetos tridimensionais.
		Exestem algumas tecnologias de impressão 3D, sendo a mais popular a FDM.";
		$this->Equipamentos_model->salvarRecurso($recurso);
		$idrecurso = $this->db->insert_id();

		$equipamento = new Equipamento();
		$equipamento->modelo = "Prusa i3";
		$equipamento->especificacoes = "Mesa 20x20x20, mesa aquecida, extrusora 5mm.";
		$equipamento->recurso_idrecurso = $idrecurso;
		$equipamento->laboratorio_idlaboratorio = 1;

		$this->Equipamentos_model->salvarEquipamento($equipamento);
		$this->load->view("equipamentos/novo.php");
	}
}
