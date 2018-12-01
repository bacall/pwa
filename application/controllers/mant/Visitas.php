<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visitas extends CI_Controller {
	 
	 public function __construct(){
		parent::__construct();	
		$this->load->library('session');			
	}
	
	public function index(){
		$this->login();
	    $this->load->model('mant/Oper_model');
		$data['visitas'] = $this->Oper_model->vervisitas();
		$this->load->view('mant/header');
		$this->load->view('mant/visitas', $data);
		$this->load->view('footer');
	}
	
	public function eliminarvisitas(){
		$this->load->model('mant/Oper_model');
		$data['fecha'] = $this->Oper_model->eliminarvisitas();
		redirect("mant");
	}
	
	
	public function login(){
		if(!isset($this->session->userdata['loginuser'])){
			$this->session->unset_userdata('loginuser');
			redirect("mant");
		}	
	}
	
}