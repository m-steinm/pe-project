<?php include('cocktail-data.php');
	foreach ($cocktailData as $item) {
		if($item["house"] == true){
			// ?
		
		// }else{
		// 		echo "classic cocktail";
		}
	};



 ?>

<section id="app">
	<inner-column>
		<h1>Cocktails</h1>
			<button type="button" id="house">House Cocktails</button>
			<button type="button" id="classic">Classic Cocktails</button>
			<input type="search" >

		<ul class="cocktail-grid">
			<?php foreach ($cocktailData as $cocktail) { ?>
			<li class="cocktail">
				<cocktail-card>
					<h2 class="name"> <a href="?page=detail&cocktail=<?=$cocktail["id"]?>"><?=$cocktail["name"]?></a></h2>
					<ul>
						<li class="base"><?=$cocktail["base"]?></li>
						<?php foreach ($cocktail["ingredients"] as $ingredient) { ?>
							<li><?=$ingredient?></li>

						<?php } ?>
						<li class="garnish"><span class="garnish-color">Garnish: </span><?=$cocktail["garnish"]?></li>
					</ul>
			
				</cocktail-card>
			</li>

			<?php } ?>
		</ul>

	</inner-column>
</section>

<script>	var cocktails = <?php echo json_encode($cocktailData) ?>;
</script>

<script src="filter.js"></script>



