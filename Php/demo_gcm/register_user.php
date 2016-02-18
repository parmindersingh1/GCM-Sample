<?php 
// response json
$json = array();
 
/**
 * Registering a user device
 * Store reg id in users table
 */
if (isset($_POST["regId"])) {
    $gcm_regid = $_POST["regId"]; 
    
    include_once './db_functions.php';
    include_once './gcm_sendmsg.php';
 
    $db = new DB_Functions();
    $gcm = new GCM_SendMsg();
 
    $res = $db->storeUser($gcm_regid);
 
    $registatoin_ids = array($gcm_regid);
    $message = array("Hello" => "Zelda");
 
    $result = $gcm->send_notification($registatoin_ids, $message);
 
    echo $result;
} else {
    // required user details are not received 
}
?>