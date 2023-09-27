<?php include('cocktail-data.php');
	foreach ($cocktailData as $item) {
		if($item["house"] == true){
			// ?
		
		}else{
				echo "classic cocktail";
		}
	};



 ?>

<section>
	<inner-column>
		<h1>House Cocktails</h1>
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

<script>
	var cocktails = <?php echo json_encode($cocktailData) ?>;
	var cocktailGrid = document.querySelector(".cocktail-grid");
	function getHouseCocktails(){
		var found = cocktails.filter( function(cocktail) {
			return cocktail.house == true; 

		});
		return found;
	}
	console.log(getHouseCocktails());

	function renderIngredients(ingredientsToRender){
		var template = "";
		ingredientsToRender.forEach( function(ingredient){
			template = template + `<li>${ingredient}</li>`;
		});

		return template
	}

	function renderCocktails(cocktailsToRender){
		var template = "";
		cocktailsToRender.forEach( function(cocktail){
			template = template + `
				<li>
					<h2 class="attention-voice"> ${cocktail.name} </h2>
					${renderIngredients(cocktail.ingredients)}
				</li>`;
		});
		cocktailGrid.innerHTML = template;
	}

	renderCocktails(cocktails);

</script>


