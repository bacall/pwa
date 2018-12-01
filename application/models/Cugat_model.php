<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cugat_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	/* Si queremos que sea pR cualquier tipo de vivienda */
	function viviendas($tipo){
     $query = $this->db->query("SELECT * FROM vivienda WHERE Tipus='$tipo' ORDER BY PreuEuros ASC");
   	 return $query->result();
	}
	function pisos(){
     $query = $this->db->query("SELECT * FROM vivienda WHERE Tipus='Piso' AND OtraZona=1 ORDER BY PreuEuros ASC");
   	 return $query->result();
	}
	function plantas(){
     $query = $this->db->query("SELECT * FROM vivienda WHERE Tipus='Planta Baja' AND OtraZona=1 ORDER BY PreuEuros ASC");
   	 return $query->result();
	}
	function aticos(){
     $query = $this->db->query("SELECT * FROM vivienda WHERE Tipus='Atico' AND OtraZona=1 ORDER BY PreuEuros ASC");
   	 return $query->result();
	}
	function torres(){
     $query = $this->db->query("SELECT * FROM vivienda WHERE Tipus='Torre' AND OtraZona=1 ORDER BY PreuEuros ASC");
   	 return $query->result();
	}
	function terrenos(){
     $query = $this->db->query("SELECT * FROM vivienda WHERE Tipus='Terreno' AND OtraZona=1 ORDER BY PreuEuros ASC");
   	 return $query->result();
	}
	function locales(){
     $query = $this->db->query("SELECT * FROM vivienda WHERE Tipus='Local' AND OtraZona=1 ORDER BY PreuEuros ASC");
   	 return $query->result();
	}
	function alquileres(){
     $query = $this->db->query("SELECT * FROM vivienda WHERE Tipus='Alquiler' AND OtraZona=1 ORDER BY PreuEuros ASC");
   	 return $query->result();
	}
	/* Hay que poner en config/routes.php $route['otras-ciudades'] = "otras_ciudades" ; Para que la url sea con guion alto */
	function otras_ciudades($localidad){						
     $query = $this->db->query("SELECT * FROM vivienda WHERE OtraZona=0 AND Localidad='$localidad' ORDER BY PreuEuros ASC");
   	 return $query->result();
	}
	
	
			
}
