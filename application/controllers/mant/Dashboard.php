<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	 
	 public function __construct(){
		parent::__construct();
		$this->load->library('session');	
        $this->load->helper('form');
        $this->load->model('mant/Mant_login_model');
	}
	
	
	public function index(){
		if(isset($this->session->userdata['loginuser'])){
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
			$this->load->view('mant/header');
			$this->load->view('mant/inicio', $data);
			$this->load->view('footer');
		}else{
			$this->login();
		}
	}
	public function cambiarfecha(){
		$fecha=$_GET["fecha"];
        $this->load->model('mant/Oper_model');
		$data['fecha'] = $this->Oper_model->cambiarfecha($fecha);
		redirect("mant");
		
	}
	public function login(){
		$this->load->view('header');
		$this->load->view('mant/login');
		$this->load->view('footer');
	}
	
	public function validate(){
			 //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

         $usr_result = $this->Mant_login_model->get_user($username, $password);
         	if ($usr_result > 0){ //active user record is present
                $sessiondata = array(
                    'loginuser' => TRUE
                );
                $this->session->set_userdata($sessiondata);
				setcookie('loginuser', '1', time() + (86400 * 365), "/");
                redirect("mant");
           }else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Usuario desconocido!</div>');
                redirect('mant');
          }                
	}
	
	public function unlogin(){
		$this->session->unset_userdata('loginuser');
		redirect("mant");
	}
	
}