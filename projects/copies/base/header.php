<!doctype html>

<?php
	
	$page = "home";
	if ( isset($_GET["page"]) ){
		$page = $_GET["page"];
	}
?>

<html lang='en'>
	<head>
		<meta charset='utf-8'> 
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>copy base</title>

		<link rel="stylesheet" href="styles/site.css">

	</head>

	<body>

		<header class='site-header'>
			<inner-column>
				<?php include('mast-head.php');?>
			</inner-column>
		</header>

		<main class='page-content'>