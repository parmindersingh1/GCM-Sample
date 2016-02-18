<?php
if (isset($_GET["regId"]) && isset($_GET["message"])) {
    $regId = $_GET["regId"];
    $message = $_GET["message"];
     
    include_once './gcm_sendmsg.php';
     
    $gcm = new GCM_SendMsg();
 
    $registatoin_ids = array($regId);
    $message = array("message" => $message);
 
    $result = $gcm->send_notification($registatoin_ids, $message);
 
    echo $result;
}
?>

		<!-- Parminder Singh

		H No 1960, Sec 45(B), Burail, Near Saini Gurdwara

		Chandigarh

		160047

		9464120510 

		ballysingh07@yahoo.co.in   -->