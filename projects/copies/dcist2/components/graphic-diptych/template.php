	<?php

	$heading = $heading ?? "Default heading here";
	$content = $content ?? "Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.Hey, you need some content here.	 ";

	?>

<graphic-diptych>

	<div class="graphic">
		<picture>
			<img src="images/landscape.jpg" alt="$todo">
		</picture>
	</div>

	<div class="content">
		<h2 class='attention-voice'><?=$heading?></h2>

		<p><?=$content?></p>
	</div>

</graphic-diptych>