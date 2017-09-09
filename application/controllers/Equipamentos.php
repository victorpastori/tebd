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
		$this->load->view('index.php');
	}

	public function cadEquipamento(){
		$recursos = $this->Recursos_model->buscaIdRecrusos();
		$labs = $this->Labs_model->buscaLabs();

		$dados = array('recursos' => $recursos, 'labs' => $labs);

		$this->load->view('equipamentos/cad_equipamento', $dados);
	}

	public function novoEquipamento(){

		$data = $this->input->post('businessType');
		var_dump($data);
		$equipamento = new Equipamento();
		$equipamento->modelo = $this->input->post('modelo');
		$equipamento->especificacoes = $this->input->post("especificacoes");
		$equipamento->recurso_idrecurso = $this->input->post("recurso");
		$equipamento->laboratorio_idlaboratorio = $this->input->post("laboratorio");

		$this->Equipamentos_model->salvarEquipamento($equipamento);
		$this->load->view("equipamentos/novo.php");
	}

}
