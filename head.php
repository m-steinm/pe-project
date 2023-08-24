
<!doctype html>

<?php

	$page = null;
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	}else{
		$page = "home";
	}

?>

<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Max Steinmetz</title>
		<meta name="description" content="[[description goes here]]">
		<meta property="og:image" content="[[meta image source">


		<link rel="stylesheet" href="css/style.css">

<!-- font -->
		<link href="https://fonts.googleapis.com/css2?family=Eczar&display=swap" rel="stylesheet">

	</head>