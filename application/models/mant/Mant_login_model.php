<?
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mant_login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
         /* $sql = "SELECT * FROM usuas where usua = '" . mysql_real_escape_string($usr) . "' and contra = '" .mysql_real_escape_string($pwd) . "'";
          $query = $this->db->query($sql);*/
         $sql = "SELECT * FROM usuas WHERE usua = ? AND contra= ?";
         $query = $this->db->query($sql, array($usr, $pwd));
         return $query->num_rows();		  
     }
}?>