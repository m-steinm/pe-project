
<?php include("site-header.php");?> 

<?php

	if($page == "home"){
		include("pages/home.php");
	}

	if($page == "projects"){
		include("projects.php");
	}

	if($page == "contact"){
		include("pages/contact.php");
	}

	if($page == "goals"){
		include("pages/goals/template.php");
	}
?>



<?php include('modules/site-footer.php'); ?>


