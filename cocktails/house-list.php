<?php include('cocktail-data.php'); ?>

<section>
	<inner-column>
		<h1>House Cocktails</h1>
		<ul>
			<?php foreach ($cocktailData as $cocktail) { ?>
			<li class="cocktail">
				<cocktail-card>
					<h2 class="name"> <a href="?page=detail&cocktail=<?=$cocktail["id"]?>"><?=$cocktail["name"]?></a></h2>
					<ul>
						<li class="base"><?=$cocktail["base"]?></li>
						<li class="ingredient-1"><?=$cocktail["ingredient-1"]?></li>
						<li class="ingredient-2"><?=$cocktail["ingredient-2"]?></li>
						<li class="ingredient-3"><?=$cocktail["ingredient-3"]?></li>
						<li class="garnish"><?=$cocktail["garnish"]?></li>
					</ul>
			
				</cocktail-card>
			</li>

			<?php } ?>
		</ul>
	</inner-column>
</section>


