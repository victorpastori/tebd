<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recursos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Recursos_model");
		$this->load->library('Recurso');
	}

	public function index(){
		$this->load->view('recursos/cad_recurso');
	}

	public function cadRecurso(){
		$this->load->view('recursos/cad_recurso');
	}

	public function novoRecurso(){

		$recurso = new Recurso();
		$recurso->nome = $this->input->post('recursoName');
		$recurso->descricao = $this->input->post('descricao');
		$this->Recursos_model->salvarRecurso($recurso);
		$this->load->view("recursos/novo.php");
	}
}
