<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	 
	 public function __construct(){
		parent::__construct();
		
		
	}
	public function index(){
		//require_once('vendor/phpmailer/phpmailer/PHPMailerAutoload.php');
		//$a= new PHPMailer();
		$this->load->model('Inicio_model');
		$data['pisos'] = $this->Inicio_model->Num_pisos();
		$data['aticos'] = $this->Inicio_model->Num_aticos();
		$data['plantas'] = $this->Inicio_model->Num_plantas();
		$data['torres'] = $this->Inicio_model->Num_torres();
		$data['obranueva'] = $this->Inicio_model->Num_obranueva();
		$data['otrazona'] = $this->Inicio_model->Num_otrazona();
        foreach($data['otrazona'] as $otrazona){ 
          $cuantas[] = $this->Inicio_model->cuantas($otrazona->Localidad);
        }
        $data['cuantas']=$cuantas;
		$data['terrenos'] = $this->Inicio_model->Num_terrenos();
		$data['locales'] = $this->Inicio_model->Num_locales();
		$data['alquileres'] = $this->Inicio_model->Num_alquileres();
		$data['fecha'] = $this->Inicio_model->Fecha();
		$data['portadas'] = $this->Inicio_model->portada();
        $this->load->view('header');
		$this->load->view('inicio', $data);
		$this->load->view('footer');
	}	
}