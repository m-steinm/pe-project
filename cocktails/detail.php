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
<section class="detail">
<inner-column>
	<h1><?=$detail["name"]?></h1>

	<picture>
		<img src="https://peprojects.dev/images/landscape.jpg" alt="">
	</picture>

	<p><?=$detail["notes"]?></p>
</inner-column>
</section>

<?php } else { ?> 
	<h1>No cocktail found.</h1>

<?php } ?>