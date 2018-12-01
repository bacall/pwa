<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fotos extends CI_Controller { 
	 public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index(){
        $this->login();
		$this->fotosPiso();
	}
	
	public function fotosPiso(){
		$ref=$_POST["ref"];
		$numFotos=$_POST["fotos"];
		$zona=$_POST["zona"];
		$tipus=$_POST["tipus"];
		$data['fotosPisos'] = array("ref"=>$ref, "numFotos"=>$numFotos, "zona"=>$zona, "tipo"=>$tipus, "scroll"=>0);
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
