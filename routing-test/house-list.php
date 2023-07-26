<?php include('cocktail-data.php'); ?>

<h1>House Cocktail Specs</h1>

<ul>
	<?php foreach ($cocktailData as $cocktail) { ?>
	<li class="cocktail">
		<cocktail-card>
			<h2 class="name"><?=$cocktail["name"]?></h2>
			<ul>
				<li class="base"><?=$cocktail["base"]?></li>
				<li class="ingredient-1"><?=$cocktail["ingredient-1"]?></li>
				<li class="ingredient-2"><?=$cocktail["ingredient-2"]?></li>
				<li class="ingredient-3"><?=$cocktail["ingredient-3"]?></li>
				<li class="garnish"><?=$cocktail["garnish"]?></li>
			</ul>
			<a href="?page=detail&cocktail=<?=$cocktail["id"]?>">More Info</a>
		</cocktail-card>
	</li>

	<?php } ?>
</ul>

