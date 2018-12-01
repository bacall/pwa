<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detalle extends CI_Controller {

	public function __construct(){
    	parent::__construct();
  	}
	
	public function index(){
		
	}	
 
 	public function piso($zona, $ref){
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$this->load->model('Ismobile_model');
		$data['ismobile'] = $this->Ismobile_model->ismobile();
		$this->load->view('header', $data);
		$this->load->view('detalle', $data);
		$this->load->view('footer');
	}
	public function planta_baja($zona, $ref){
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$this->load->model('Ismobile_model');
		$data['ismobile'] = $this->Ismobile_model->ismobile();
		$this->load->view('header', $data);
		$this->load->view('detalle', $data);
		$this->load->view('footer');
	}
	public function atico($zona, $ref){
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$this->load->model('Ismobile_model');
		$data['ismobile'] = $this->Ismobile_model->ismobile();
		$this->load->view('header', $data);
		$this->load->view('detalle', $data);
		$this->load->view('footer');
	}
	public function torre($zona, $ref){
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$this->load->model('Ismobile_model');
		$data['ismobile'] = $this->Ismobile_model->ismobile();
		$this->load->view('header', $data);
		$this->load->view('detalle', $data);
		$this->load->view('footer');
	}
	public function terreno($zona, $ref){
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$this->load->model('Ismobile_model');
		$data['ismobile'] = $this->Ismobile_model->ismobile();
		$this->load->view('header', $data);
		$this->load->view('detalle', $data);
		$this->load->view('footer');
	}
	public function local($zona, $ref){
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$this->load->model('Ismobile_model');
		$data['ismobile'] = $this->Ismobile_model->ismobile();
		$this->load->view('header', $data);
		$this->load->view('detalle', $data);
		$this->load->view('footer');
	}
	public function alquiler($zona, $ref){
		$this->load->model('Detalle_model');
		$this->Detalle_model->set_ref( $ref );
		$data['viviendas'] = $this->Detalle_model->pisos();
		$this->load->model('Ismobile_model');
		$data['ismobile'] = $this->Ismobile_model->ismobile();
		$this->load->view('header', $data);
		$this->load->view('detalle', $data);
		$this->load->view('footer');
	}

}
?>