<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	function Todas_las_viviendas(){
     $query = $this->db->query("SELECT * from vivienda");
   	 return $query->result();
	}
	function portada(){
     $query = $this->db->query("SELECT Ref,Zona,Tipus,DescLarga, MAX(PreuEuros) FROM vivienda GROUP BY Tipus ORDER BY RAND()");
   	 return $query->result();
	
	}
	
	
	function Num_pisos(){
     $query = $this->db->query("SELECT COUNT(Tipus) as numpisos FROM vivienda WHERE Tipus='Piso' AND OtraZona=1");
   	 return $query->result();
	}
	function Num_aticos(){
     $query = $this->db->query("SELECT COUNT(Tipus) as numaticos FROM vivienda WHERE Tipus='Atico' AND OtraZona=1");
   	 return $query->result();
	}
	
	function Num_plantas(){
     $query = $this->db->query("SELECT COUNT(Tipus) as numplantas FROM vivienda WHERE Tipus='Planta Baja' AND OtraZona=1");
   	 return $query->result();
	}
	function Num_torres(){
     $query = $this->db->query("SELECT COUNT(Tipus) as numtorres FROM vivienda WHERE Tipus='Torre' AND OtraZona=1");
   	 return $query->result();
	}
	function Num_obranueva(){
     $query = $this->db->query("SELECT COUNT(Nova) as numobranueva FROM vivienda WHERE Nova=1");
   	 return $query->result();
	}
	function Num_otrazona(){
     $query = $this->db->query("SELECT DISTINCT Localidad FROM vivienda WHERE Localidad!='' AND OtraZona=0 ORDER BY Localidad");
   	 return $query->result();
	}
	
	function Num_terrenos(){
     $query = $this->db->query("SELECT COUNT(Tipus) as numterrenos FROM vivienda WHERE Tipus='Terreno' AND OtraZona=1");
   	 return $query->result();
	}
	
	function Num_Locales(){
     $query = $this->db->query("SELECT COUNT(Tipus) as numlocales FROM vivienda WHERE Tipus='Local'");
   	 return $query->result();
	}
	
	function Num_alquileres(){
     $query = $this->db->query("SELECT COUNT(Tipus) as numalquileres FROM vivienda WHERE Tipus='Alquiler'");
   	 return $query->result();
	}
	function Fecha(){
     $query = $this->db->query("SELECT fecha  FROM fecha");
   	 return $query->result();
	}
	function cuantas($localidad){
     $query = $this->db->query("SELECT count(Ref) as contador FROM vivienda WHERE OtraZona=0 AND Localidad='$localidad'");
        return $query->result();
    }
	
}
