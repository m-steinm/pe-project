<?php include('feature-data.php'); ?>

<feature>
	<div class="heading">
		<h1 class="loud-voice">Lorem ipsum dolor sit fice bers.</h1>
		<p>Lorem ipsum dolor sit, amet</p>
	

		<picture>
			<img src="https://peprojects.dev/images/square.jpg" alt="">
		</picture>
	</div>

	<div class="list">
		<ol>
			<?php foreach ($featureItem as $item) { ?>

				<li>
					
					<h2><?=$item['heading']?></h2>
					<p><?=$item['text']?></p>

				</li>

			<?php } ?>

		</ol>

	</div>

</feature>