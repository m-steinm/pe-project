<?php include('header.php'); ?>


<?php 
	if($page == "home"){
		include("pages/home/home.php");
	}

	if($page == "about"){
		include("pages/about/about.php");
	}

		if($page == "personal-canon"){
		include("pages/personal-canon/personal-canon.php");
	}
?>

<?php include('footer.php'); ?>
