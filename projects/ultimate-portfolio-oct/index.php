<?php include('header.php'); ?>



<header class='page-header'>
	<inner-column>
		<?php 
		$pageTitle='HOME page title';
		include('page-header.php');
		?>

	</inner-column>
</header> 

<section class='new-news'>
	<inner-column>

		<?php 
		$heading='New news';
		include('graphic-diptych.php');
		?>
	
	</inner-column>
</section>

<section class='new-newsss'>
	<inner-column>

		<?php 
		$heading='In other news';
		$content='Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.Here is a lot of content.';
		include('graphic-diptych.php');
		?>
	
	</inner-column>
</section>


<?php include('footer.php'); ?>