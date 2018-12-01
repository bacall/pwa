<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oper extends CI_Controller { 
	 public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
        $this->login();
		$accion=$_POST["accion"];		
        if($accion=="nou"){ 
            $this->insertPiso();
        }
		 if($accion=="salvar"){
            $this->updatePiso();
			
        }
       
		if($accion=="eliminar"){
           $this->deletePiso();
        }
	}
	
	public function insertPiso(){
		$ref=$_POST["num"];
		$tipus=$_POST["tipus"];
		$localidad=$_POST["localidad"];
		$descTipus =$_POST["DescTipus"];
        if(trim($_POST["nuevoTipo+"]))
          $descTipus =$_POST["nuevoTipo+"];
		$video=$_POST["video"];
		$otrazona=$_POST["otrazona"];
		$zona=$_POST["zona"];
		$fotos=$_POST["fotos"];
		$descc=$_POST["descc"];
		$descllarga=$_POST["descllarga2"];
		$euros=$_POST["euros"];
		$nova=$_POST["nova"];
		$diseny=$_POST["diseny"];
		$this->load->model('mant/Oper_model');
		$result = $this->Oper_model->insertPiso($ref, $tipus, $localidad, $descTipus, $video, $otrazona, $zona, $fotos, $descc, $descllarga, $euros, $nova, $diseny);
		$zona=str_replace("-+","-",$zona);
		$zona=str_replace("-"," ",$zona);
		$zona=str_replace(" - "," ",$zona);
		$href=str_replace("---","-",$tipus . "/" . str_replace(" ","-",$zona) . "/" . $ref);
		$href=str_replace(" ","_",$href);
		redirect(base_url('mant/detalle/') . $href);
	}
	public function updatePiso(){
		$ref=$_POST["num"];
		$tipus=$_POST["tipus"];
		$localidad=$_POST["localidad"];
		$descTipus =$_POST["DescTipus"];
        if(trim($_POST["nuevoTipo+"]))
          $descTipus =$_POST["nuevoTipo+"]; 
		$video=$_POST["video"];
		$otrazona=$_POST["otrazona"];
		$zona=$_POST["zona"];
		$fotos=$_POST["fotos"];
		$descc=$_POST["descc"];
		$descllarga=$_POST["descllarga2"];
		$euros=$_POST["euros"];
		$nova=$_POST["nova"];
		$diseny=$_POST["diseny"];
        $this->load->model('mant/Oper_model');
		$result = $this->Oper_model->updatePiso($ref, $tipus, $localidad, $descTipus, $video, $otrazona, $zona, $fotos, $descc, $descllarga, $euros, $nova, $diseny);
		//header("Location: " . $_SERVER['HTTP_REFERER']);
		$zona=str_replace("-+","-",$zona);
        $zona=str_replace("-"," ",$zona);
        $zona=str_replace(" - "," ",$zona);
        $href=str_replace("---","-",$tipus . "/" . str_replace(" ","-",$zona) . "/" . $ref);
        $href=str_replace(" ","_",$href);
        redirect(base_url('mant/detalle/') . $href);
	}
	public function deletePiso(){
		$ref=$_POST["num"];
		$this->load->model('mant/Oper_model');
		$result = $this->Oper_model->deletePiso($ref);
        header("Location: " . base_url('mant'));
	}
	
	public function login(){
		if(!isset($this->session->userdata['loginuser'])){
			$this->session->unset_userdata('loginuser');
			redirect("mant");
		}
	
	}
	
}
