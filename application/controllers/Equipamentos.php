<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamentos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Equipamentos_model");
		$this->load->model("Recursos_model");
		$this->load->model("Labs_model");
		$this->load->library('Equipamento');
		$this->load->library('Recurso');
	}

	public function index(){
		$recursos = $this->Recursos_model->buscaIdRecrusos();
		$labs = $this->Labs_model->buscaLabs();

		$dados = array('recursos' => $recursos, 'labs' => $labs);

		$this->load->view('equipamentos/index', $dados);
	}

	public function novoEquipamento(){

		$equipamento = new Equipamento();
		$equipamento->modelo = $this->input->get('modelo');
		$equipamento->especificacoes = $this->input->get("especificacoes");
		$equipamento->recurso_idrecurso = $this->input->get("recurso");
		$equipamento->laboratorio_idlaboratorio = $this->input->get("laboratorio");

		$this->Equipamentos_model->salvarEquipamento($equipamento);
		$this->load->view("equipamentos/novo.php");
	}

}
