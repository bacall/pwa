<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detalle extends CI_Controller { 
	 public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
		redirect('./');
	}
	
	public function piso($zona, $ref){
		$this->login();
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$data['ultimo'] = $this->Detalle_model->ultimo();
		$data['back'] = "pisos";
		$data['tipos'] = $this->Detalle_model->tipos();
		$data['tiposDetalles'] = $this->Detalle_model->tiposDetalles();
		$this->load->view('mant/header');
		$this->load->view('mant/detalle', $data);
		$this->load->view('footer');
	}
	public function planta_baja($zona, $ref){
		$this->login();
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$data['ultimo'] = $this->Detalle_model->ultimo();
		$data['back'] = "plantas";
		$data['tipos'] = $this->Detalle_model->tipos();
		$data['tiposDetalles'] = $this->Detalle_model->tiposDetalles();
		$this->load->view('mant/header');
		$this->load->view('mant/detalle', $data);
		$this->load->view('footer');
	}
	public function atico($zona, $ref){
		$this->login();
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$data['ultimo'] = $this->Detalle_model->ultimo();
		$data['back'] = "aticos";
		$data['tipos'] = $this->Detalle_model->tipos();
		$data['tiposDetalles'] = $this->Detalle_model->tiposDetalles();
		$this->load->view('mant/header');
		$this->load->view('mant/detalle', $data);
		$this->load->view('footer');
	}
	public function torre($zona, $ref){
		$this->login();
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$data['ultimo'] = $this->Detalle_model->ultimo();
		$data['back'] = $zona;
		$data['tipos'] = $this->Detalle_model->tipos();
		$data['tiposDetalles'] = $this->Detalle_model->tiposDetalles();
		$this->load->view('mant/header');
		$this->load->view('mant/detalle', $data);
		$this->load->view('footer');
	}
	public function terreno($zona, $ref){
		$this->login();
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$data['ultimo'] = $this->Detalle_model->ultimo();
		$data['back'] = "terrenos";
		$data['tipos'] = $this->Detalle_model->tipos();
		$data['tiposDetalles'] = $this->Detalle_model->tiposDetalles();
		$this->load->view('mant/header');
		$this->load->view('mant/detalle', $data);
		$this->load->view('footer');
	}
	public function local($zona, $ref){
		$this->login();
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$data['ultimo'] = $this->Detalle_model->ultimo();
		$data['back'] = "locales";
		$data['tipos'] = $this->Detalle_model->tipos();
		$data['tiposDetalles'] = $this->Detalle_model->tiposDetalles();
		$this->load->view('mant/header');
		$this->load->view('mant/detalle', $data);
		$this->load->view('footer');
	}
	public function alquiler($zona, $ref){
		$this->login();
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$data['ultimo'] = $this->Detalle_model->ultimo();
		$data['back'] = "alquileres";
		$data['tipos'] = $this->Detalle_model->tipos();
		$data['tiposDetalles'] = $this->Detalle_model->tiposDetalles();
		$this->load->view('mant/header');
		$this->load->view('mant/detalle', $data);
		$this->load->view('footer');
	}
	
	public function login(){
		if(!isset($this->session->userdata['loginuser'])){
			$this->session->unset_userdata('loginuser');
			redirect("mant");
		}	
	}
	
	public function unlogin(){
		if(isset($this->session->userdata['loginuser'])){
			$this->session->unset_userdata('loginuser');
			redirect("mant");
		}else{
			redirect("mant");
		}
	}
	
}
