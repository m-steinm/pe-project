
<?php 
	 $stories = [1,2,3];

?>

<latest-stories>

	<ul class="latest">
			<?php 
				foreach ($stories as $story){ ?>
					<li class="story">
						<?php include('components/graphic-diptych/template.php');?>
					</li>
			<?php	} ?>

	</ul>

</latest-stories>