<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendidas extends CI_Controller {

	public function __construct(){
    	parent::__construct();
		$this->load->library('session');
  	}
	
	public function index(){
		$this->login();
		$this->load->model('mant/Oper_model');
		$data['vendidas'] = $this->Oper_model->vendidas();
		$this->load->view('mant/header');
		$this->load->view('mant/vendidas', $data);
		$this->load->view('footer');
	}
 
 	public function recuperarvendida($ref){
		$ref=$_GET["ref"];
		$this->load->model('mant/Oper_model');
		$data['vendidas'] = $this->Oper_model->recuperarvendida($ref);
		redirect(base_url("mant/vendidas"));
	}
	
	public function eliminarvendida($ref){
		$ref=$_GET["ref"];
		$this->load->model('mant/Oper_model');
		$data['vendidas'] = $this->Oper_model->eliminarvendida($ref);
		redirect(base_url("mant/vendidas"));
	}
	
	public function login(){
		if(!isset($this->session->userdata['loginuser'])){
			$this->session->unset_userdata('loginuser');
			redirect("mant");
		}	
	}
	

}
?>