<?php include('cocktail-data.php'); ?>

<?php 
	if ( isset($_GET["cocktail"])){
			$this_cocktail_id = $_GET["cocktail"];
	}

	echo $this_cocktail_id;

	foreach ($cocktailData as $cocktail) {
		if ( $this_cocktail_id == $cocktail["id"] ) {
				$detail = $cocktail;
		} 
	
	}
?>

<?php if ( isset($detail) ) { ?> 

<h1><?=$detail["name"]?></h1>

<picture>
	<img src="https://peprojects.dev/images/landscape.jpg" alt="">
</picture>

<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Tempore ad, culpa non deserunt cupiditate omnis libero voluptatibus doloribus consequuntur, quidem ipsa quia, minima consequatur architecto atque adipisci ut recusandae. Eligendi?</p>

<?php } else { ?> 
	<h1>No cocktail found.</h1>

<?php } ?>