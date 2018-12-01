<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datos extends CI_Controller {
	 
	 public function __construct(){
		parent::__construct();	
		session_start();			
	}
	
	public function index(){
		
		$resolucion=$_GET["resolucion"];
			if (!$_SESSION['visita']){
			 	$referr=$_SERVER ["HTTP_REFERER"];
			  	$_SESSION['referrer']=$referr;
			  	$_SESSION['visita']="si";
	
				  if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
					   $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
					}
					elseif (isset($_SERVER['HTTP_VIA'])) {
					   $ip = $_SERVER['HTTP_VIA'];
					}
					elseif (isset($_SERVER['REMOTE_ADDR'])) {
					   $ip = $_SERVER['REMOTE_ADDR'];
					}
					else {
					   $ip = "desconocida";
					}
			
					putenv("TZ=Europe/Madrid");
					$fecha=date("Y/m/d");
					$hora=date("H:i:s");
					$ahora=$fecha . " " . $hora;
					$this->load->model('mant/Oper_model');
					$contador = $this->Oper_model->maxnumvisitas();
                    $contador=(int)$contador[0]->contador;
					$contador++;
					$referrer=$_SESSION['referrer'];
					$sistema=getenv("HTTP_USER_AGENT");
					$this->load->model('mant/Oper_model');
					$contador = $this->Oper_model->insertvisitas($contador, $fecha, $referrer, $sistema, $ip, $resolucion);					
		}
	
	}
}