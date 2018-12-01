<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seo_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	function set_ref($ref){
    	$this->ref= $ref;
	}
	
	function seo(){
     $query = $this->db->query("SELECT DescLarga FROM vivienda WHERE Ref=$this->ref");
   	 return $query->result();
	}	
}
