

<?php 
	$json = file_get_contents("data/stories.json");
	$stories = json_decode($json, true);
	$top = array_splice($stories,0,1);
	$grid = array_splice($stories,1,4)
	// print_r($top);
?>


<div class="top-stories">
	<div class="top-story">
		<?php $article = $top[0]?>
		<?php include('modules/graphic-diptych/graphic-diptych.php') ?>

	</div>
	
	<div class="top-grid">
	<?php foreach($grid as $article){?>

		<?php include('modules/graphic-diptych/graphic-diptych.php') ?>
		
	<?php } ?>


	</div>

	
</div>