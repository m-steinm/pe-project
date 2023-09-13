<?php
	$heading = $section['heading'] ?? "Default section heading";
	$intro = $section['intro'] ?? "Default section intro";
?>


<hero-module>

	<h1><?=$heading?></h1>

	<p><?=$intro?></p>

	<?php foreach ($section['actions'] as $action) { ?>
		<?php if ($action['type'] == 'link') { ?>
			link
		<?php } ?>

		<?php if ($action['type'] == 'signup') { ?>
			<?php include('components/signup-form.php'); ?>
		<?php } ?>
	<?php } ?>

</hero-module>

<style>
	hero-module {
		display: grid;
		text-align: center;
		border: 1px solid red;
	}
</style>