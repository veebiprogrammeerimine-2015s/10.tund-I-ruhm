<?php
	require_once("functions.php");
	require_once("InterestManager.class.php");
	
	if(!isset($_SESSION["id_from_db"])){
		header("Location: login.php");
        exit();
	}
	
	if(isset($_GET["logout"])){
		session_destroy();
		
		header("Location: login.php");
        exit();
	}
    
    //***************
    //** HALDUS *****
    //***************
	
    $InterestManager = new InterestManager($mysqli, $_SESSION["id_from_db"]);
?>

<p>
	Tere, <?=$_SESSION["user_email"];?>
	<a href="?logout=1"> Logi välja</a>
</p>