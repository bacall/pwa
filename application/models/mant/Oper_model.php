<?
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Oper_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function insertPiso($ref, $tipus, $localidad, $DescTipus, $video, $otrazona, $zona, $fotos, $descc, $descllarga, $euros, $nova, $diseny)
     {
         $sql="INSERT INTO vivienda (Ref, Tipus, DescTipus, localidad, Zona, PreuEuros, PreuPesetas, Pesetas, DescCorta, DescLarga, NumFotos , OtraZona, Video, Nova, Diseny) VALUES ($ref, '$tipus', '$DescTipus', '$localidad', '$zona', $euros, '', '', '$descc', '$descllarga', $fotos , $otrazona, $video, $nova, '$diseny')";
	     $query = $this->db->query($sql);
		 $lastInsert = $this->db->insert_id();
         return $lastInsert;	  
     }
	 function updatePiso($ref, $tipus, $localidad, $DescTipus, $video, $otrazona, $zona, $fotos, $descc, $descllarga, $euros, $nova, $diseny)
     {
         $sql="DELETE FROM vivienda WHERE Ref=$ref";
		 $query = $this->db->query($sql);
		 $sql="INSERT INTO vivienda (Ref, Tipus, DescTipus, localidad, Zona, PreuEuros, PreuPesetas, Pesetas, DescCorta, DescLarga, NumFotos , OtraZona, Video, Nova, Diseny) VALUES ($ref, '$tipus', '$DescTipus', '$localidad', '$zona', $euros, '', '', '$descc', '$descllarga', $fotos , $otrazona, $video, $nova, '$diseny')";
	     $query = $this->db->query($sql);
		 $lastInsert = $this->db->insert_id();
         return $lastInsert;	  
     }
	 
	  function deletePiso($ref)
     {
        
		 $sql="INSERT INTO vendidas SELECT * FROM vivienda WHERE Ref = $ref";
	     $query = $this->db->query($sql);
		 $sql="DELETE FROM vivienda WHERE Ref=$ref";
		 $query = $this->db->query($sql);
     }
	 
	  function vendidas()
     {       
		 $sql="SELECT * FROM vendidas ORDER BY Ref DESC";
	     $query = $this->db->query($sql);
         return $query->result();	  
     }
	 
	  function maxnumvisitas()
     {       
		 $sql="SELECT max(Num) as contador FROM visitas";
	     $query = $this->db->query($sql);
         return $query->result();	  
     }
	 
	 function insertvisitas($contador, $fecha, $referrer, $sistema, $ip, $resolucion)
     {       
		 $sql="INSERT INTO visitas VALUES ('$contador','$fecha','$referrer','$sistema','$ip','$resolucion')";
	     $query = $this->db->query($sql);       
     }
	 
	  function vervisitas()
     {       
		 $sql="SELECT * FROM visitas ORDER BY Fecha DESC";
	     $query = $this->db->query($sql);
         return $query->result();	     
     }
	 
	 function eliminarvisitas()
     {       		
		 $sql="SELECT max(Num) as contador FROM visitas";
		 $query = $this->db->query($sql);
		 $contador =$query->result(); 
         $contador=$contador[0]->contador;
		 $sql="DELETE FROM visitas WHERE Num < $contador";
	     $query = $this->db->query($sql);	     
     }
	 
	 function cambiarfecha($fecha)
     {       
		 $sql="UPDATE fecha SET fecha= '$fecha'";
	     $query = $this->db->query($sql);     
     }
	 
	  function recuperarvendida($ref)
     {        
		 $sql="INSERT INTO vivienda SELECT * FROM vendidas WHERE Ref = $ref";
	     $query = $this->db->query($sql);
		 $sql="DELETE FROM vendidas WHERE Ref=$ref";
		 $query = $this->db->query($sql);	  
     }
	 
	  function eliminarvendida($ref)
     {        
		 $sql="DELETE FROM vendidas WHERE Ref = $ref";
	     $query = $this->db->query($sql);  
     }
	
}
?>