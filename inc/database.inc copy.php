<?php

////////////////////////////////////////////////
// This class handles all the Database Queries//
//      DO NOT CHANGE ANYTHING HERE!!!!!      //
////////////////////////////////////////////////

  require_once("config.ini");
  
  class database {
    	private $host = HOST;
     	private $user = USER;
      private $pass = PASS;
      private $database = DATA;
     	private $db = NULL;
      public $result = NULL;
      public $query = NULL;

     	public function __construct() {
        $this->db = mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->database, $this->db);
      }

      public function do_query(){
        if($this->db) {
          $this->result = mysql_query($this->query);
          if(!$this->result) {
            return false;
          }
          return true;
        }
        return false;
      }
      
      public function numrow($value, $table, $row) {
        $this->query = "SELECT * FROM ".$table." WHERE ".$row." = '".$value."'";
        if(!$this->do_query()) {
          return false;
        }
        elseif($value = mysql_num_rows($this->result) > 0) {
        return true;
        }
      }

      public function __destruct(){
          $this->result = NULL;
          $this->db = NULL;
      }
  }
?>