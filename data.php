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
    
    if(isset($_GET["new_interest"])){
        $InterestManager->addInterest($_GET["new_interest"]);
    }
?>

<p>
	Tere, <?=$_SESSION["user_email"];?>
	<a href="?logout=1"> Logi välja</a>
</p>

</h2>Lisa huviala</h2>
<form> 
    <input name="new_interest"> <br>
    <input type="submit">
</form>