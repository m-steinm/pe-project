<?php
 	$json = file_get_contents('data/index-card.json');
	$cardData = json_decode($json, true);

?>


<ul class="my-grid">
	<?php forEach($cardData as $card) { ?>
	<li>
		<index-card>
		<h1 class="attention-voice"><?=$card["title"]?></h1>
		<p class="calm-voice"><?=$card["blurb"]?></p>
	</index-card>
	</li>
	<?php } ?>
</ul>




