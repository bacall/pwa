<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sant_cugat extends CI_Controller { 
	 public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
		redirect('./');
	}
	
	public function pisos(){
		$this->login();
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->pisos();
        $this->load->view('mant/header');
		$this->load->view('mant/sant_cugat', $data);
		$this->load->view('footer');

	}
	/* Si queremos que sea pR cualquier tipo de vivienda */
	public function viviendas($tipo){
		$this->login();
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->viviendas($tipo);
        $this->load->view('mant/header');
		$this->load->view('mant/sant_cugat', $data);
		$this->load->view('footer');

	}
	public function plantas(){
		$this->login();
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->plantas();
        $this->load->view('mant/header');
		$this->load->view('mant/sant_cugat', $data);
		$this->load->view('footer');

	}
	public function aticos(){
		$this->login();
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->aticos();
        $this->load->view('mant/header');
		$this->load->view('mant/sant_cugat', $data);
		$this->load->view('footer');

	}
	public function torres(){
		$this->login();
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->torres();
        $this->load->view('mant/header');
		$this->load->view('mant/sant_cugat', $data);
		$this->load->view('footer');

	}
	public function terrenos(){
		$this->login();
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->terrenos();
        $this->load->view('mant/header');
		$this->load->view('mant/sant_cugat', $data);
		$this->load->view('footer');

	}
	public function locales(){
		$this->login();
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->locales();
        $this->load->view('mant/header');
		$this->load->view('mant/sant_cugat', $data);
		$this->load->view('footer');

	}
	public function alquileres(){
		$this->login();
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->alquileres();
        $this->load->view('mant/header');
		$this->load->view('mant/sant_cugat', $data);
		$this->load->view('footer');

	}
	
	public function otras_ciudades($localidad){
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->otras_ciudades($localidad);
        $this->load->view('mant/header');
		$this->load->view('mant/sant_cugat', $data);
		$this->load->view('footer');

	}
	public function login(){
		if(!isset($this->session->userdata['loginuser'])){
			$this->session->unset_userdata('loginuser');
			redirect("mant");
		}
	
	}
	
}
