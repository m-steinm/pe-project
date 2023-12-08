	<?php

	$heading = $article["heading"] ?? "Default heading here";
	$content = $article["content"] ?? "Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.	 ";
	$category = $category ?? "category tbd"
	?>

<graphic-diptych>

	<div class="graphic">
		<picture>
			<img src="images/landscape.jpg" alt="$todo">
		</picture>
	</div>
	
	<div class="content">

		<h3 class="category"><?=$category?></h3>
		
		<h2 class="content-heading"><?=$heading?></h2>

		<p><?=$content?></p>
	</div>

</graphic-diptych>


<?php $article = null ?>