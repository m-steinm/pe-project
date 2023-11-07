<?php include('header.php'); ?>



<header class='page-header'>
	<inner-column>
		<?php 
		$pageTitle='HOME page title';
		include('templates/modules/page-header/page-header.php');
		?>

	</inner-column>
</header> 

<section>
	<inner-column>
		<?php include('templates/modules/projects-spotlight/projects-spotlight.php'); ?>
	</inner-column>

</section>
<section class='new-news'>
	<inner-column>

		<?php 
		$heading='New news';
		include('templates/modules/graphic-diptych/graphic-diptych.php');
		?>
	
	</inner-column>
</section>

<section class='other-news'>
	<inner-column>

		<?php 
		$heading='In other news';
		$content='Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.';
		include('templates/modules/graphic-diptych/graphic-diptych.php');
		?>
	
	</inner-column>
</section>


<?php include('footer.php'); ?>