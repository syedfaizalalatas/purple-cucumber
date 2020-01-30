<?php
 
 class User_model extends CI_Model {
  function return_users() {
   $this->load->database();
   $query = $this->db->query("SELECT * FROM user");
   $apo = $query->result_array();
   return $query->result_array();
  }
 }
?>
