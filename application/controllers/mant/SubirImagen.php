<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SubirImagen extends CI_Controller { 
	 public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
        $this->login();
		$this->subirImagen();
	}
	
	
	
	public function subirImagen(){
		$ref=$_POST["ref"];
		$numFotos=$_POST["numFotos"];
		$zona=$_POST["zona"];
		$tipo=$_POST["tipo"];
		$posicion=$_POST["num"];
		$scroll=$_POST["scroll"];
		$filex="filex" . $posicion;
		$fileName = $_FILES[$filex]['name']; 
		$tmpName  = $_FILES[$filex]['tmp_name']; 
		$fileSize = $_FILES[$filex]['size']; 
		$fileType = $_FILES[$filex]['type'];
        $ruta="./img/fotos/fotosg/" . $ref . "-" . $posicion . ".jpg";
		$fileSize=(int)$fileSize;
        	if($fileSize !=0 ){
				copy($tmpName, $ruta);
			}
		$data['fotosPisos'] = array("ref"=>$ref, "numFotos"=>$numFotos, "zona"=>$zona, "tipo"=>$tipo, "scroll"=>$scroll);
		$this->load->view('mant/header');
		$this->load->view('mant/fotos', $data);
		$this->load->view('footer');
	}
	
	public function login(){
		if(!isset($this->session->userdata['loginuser'])){
			$this->session->unset_userdata('loginuser');
			redirect("mant");
		}
	
	}
	
}
