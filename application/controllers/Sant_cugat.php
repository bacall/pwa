<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sant_cugat extends CI_Controller { 
	 public function __construct(){
		parent::__construct();
		
	}
	public function index(){
		redirect('./');
	}
	public function pisos(){
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->pisos();
        $this->load->view('header');
		$this->load->view('sant_cugat', $data);
		$this->load->view('footer');

	}
	public function plantas(){
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->plantas();
        $this->load->view('header');
		$this->load->view('sant_cugat', $data);
		$this->load->view('footer');

	}
	public function aticos(){
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->aticos();
        $this->load->view('header');
		$this->load->view('sant_cugat', $data);
		$this->load->view('footer');

	}
	public function torres(){
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->torres();
        $this->load->view('header');
		$this->load->view('sant_cugat', $data);
		$this->load->view('footer');

	}
	public function terrenos(){
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->terrenos();
        $this->load->view('header');
		$this->load->view('sant_cugat', $data);
		$this->load->view('footer');

	}
	public function locales(){
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->locales();
        $this->load->view('header');
		$this->load->view('sant_cugat', $data);
		$this->load->view('footer');

	}
	public function alquileres(){
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->alquileres();
        $this->load->view('header');
		$this->load->view('sant_cugat', $data);
		$this->load->view('footer');

	}
	public function otras_ciudades($localidad){
		$this->load->model('Cugat_model');
		$data['viviendas'] = $this->Cugat_model->otras_ciudades($localidad);
        $this->load->view('header');
		$this->load->view('sant_cugat', $data);
		$this->load->view('footer');

	}
	
}
