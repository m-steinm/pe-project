<!doctype html>

<html lang="en">
	
<?php
	$page = null; 
	if ( isset($_GET["page"]) ){
		$page = $_GET["page"];
	} else {
		$page = "home";
	}
	 
?>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Iron Gate Cocktails</title>
		<meta name="description" content="[[description goes here]]">
		<meta property="og:image" content="[[meta image source">
		
		<link rel="stylesheet" href="css/style.css">

		<!-- google font for homepage -->
		<link href="https://fonts.googleapis.com/css2?family=Eczar&display=swap" rel="stylesheet">


	</head> 

	<body>
	 	<header>
				<?php include("site-menu.php"); ?>
		</header>
		<main class="page-content">
			<?php 
			if ($page=="home") {
				include("home.php");
			}
			if($page=="house-list"){
				include("house-list.php");
			}
			if($page=="classic-list"){
				include("classic-list.php");
			}
			if($page=="detail"){
				include("detail.php");
			}
			if($page=="create"){
				include("create.php");
			}
		?>
		</main>
		
		<footer>
				<?php include("footer.php"); ?>
		</footer>
	</body>







</html>