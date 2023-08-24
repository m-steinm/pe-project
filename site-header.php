
<!doctype html>

<?php

	$page = "home";
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	}

?>

<html lang="en">
	<?php include("head.php"); ?>
<body>
	
<header class="site-header">
<inner-column>
	
	<site-header> 
	
	<nav>
		<ul>
			<li> <a href="?page=home">Home</a></li>
			<li> <a href="?page=projects">Projects</a></li>
			<li> <a href="?page=contact">Contact</a></li>
			<li> <a href="?page=goals">Goals</a></li>
		</ul>
	</nav>	
	
	</site-header>
	
</inner-column>
</header>

<main>

