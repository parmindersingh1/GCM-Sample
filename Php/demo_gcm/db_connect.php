<?php  
class DB_Connect {
  
    function __construct() {
  
    }
  
    function __destruct() {
        
    }
  
    //create database conn
    public function connect() {
        require_once 'config.php';
        
        $conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);        
        mysql_select_db(DB_DATABASE); 
        
        return $conn;
    }
  
    // close database conn
    public function close() {
        mysql_close();
    }
  
} 
?>