<?php
include("../res/x5engine.php");
$nameList = array("2mc","8he","376","8tj","a8y","4ck","2fe","xmt","3nd","525");
$charList = array("D","3","6","H","F","3","4","8","F","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
