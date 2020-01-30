<?php
 
 class User_model extends CI_Model {
  function return_users() {
   $this->load->database();
   //$query = $this->db->query("SELECT * FROM user");
   $query = $this->db->get('user'); //SELECT * FROM user
   $apo = $query->result_array();
   return $query->result_array();
  }
  function return_users2() {
   $this->load->database();
   $query2 = $this->db->query("SELECT * FROM user");
   //$apo = $query2->result_array();
   return $query2->result();
  }
 }
?>
