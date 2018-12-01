<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detalle_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	function set_ref($ref){
    	$this->ref= $ref;
	}
	
	function ultimo(){
		 $query = $this->db->query("SELECT Ref FROM vivienda ORDER BY Ref Desc LIMIT 1");
		 $query2 = $this->db->query("SELECT Ref FROM vendidas ORDER BY Ref Desc LIMIT 1");
   	     //return $query->result();	
         $ultimo1=$query->result();
         $ultimo2=$query2->result();
			 if($ultimo1>=$ultimo2){
			    return $query->result();	
			 }else{
			    return $query2->result();	
			}
	}
	
	function tipos(){
		 $query = $this->db->query("SELECT Tipus FROM vivienda GROUP BY Tipus");
   	     return $query->result();	
	}
	
	function tiposDetalles(){
		 $query = $this->db->query("SELECT DescTipus FROM vivienda GROUP BY DescTipus");
   	     return $query->result();	
	}

	
	function pisos(){
     $query = $this->db->query("SELECT * FROM vivienda WHERE Ref=$this->ref");
   	 return $query->result();
	}	
}
