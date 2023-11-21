
<?php 
	 $stories = [1,2,3,4,5,6,7,8,10];

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