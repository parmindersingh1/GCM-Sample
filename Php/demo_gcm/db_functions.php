<?php
 
class DB_Functions {
 
    private $db;
 
    function __construct() {
        include_once './db_connect.php';
        // connect to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }
 
    function __destruct() {
         
    }
 
    /**
     * Store user and returning user details
     */
    public function storeUser($gcm_regid) {
        // insert user into database
        $result = mysql_query("INSERT INTO reg_users(gcm_regid, created_at) VALUES('$gcm_regid', NOW())");
        // check for successful store
        if ($result) {
            // get user details
            $id = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM users WHERE id = $id") or die(mysql_error());
            // return user details
            if (mysql_num_rows($result) > 0) {
                return mysql_fetch_array($result);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
 
    /**
     * list all users
     */
    public function getAllUsers() {
        $result = mysql_query("select * FROM reg_users");
        return $result;
    }
 
}
 
?>