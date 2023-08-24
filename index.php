
<?php include("site-header.php");?> 

<?php

	if($page == "home"){
		include("pages/home.php");
	}

	if($page == "projects"){
		include("pages/projects.php");
	}

	if($page == "contact"){
		include("pages/contact.php");
	}

	if($page == "goals"){
		include("pages/goals/template.php");
	}

		if($page == "resume"){
		include("pages/resume/template.php");
	}
?>

<?php include('modules/site-footer.php'); ?>


