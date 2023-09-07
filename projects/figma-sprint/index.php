<?php

	$page = "home";
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	}

?>

<?php include("modules/site-header/site-header.php");?> 

<?php

	if($page == "home"){
		include("home.php");
	}

?>

<?php include('modules/site-footer.php'); ?>

