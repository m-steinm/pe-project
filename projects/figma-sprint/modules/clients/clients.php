<?php include('client-data.php'); ?>

<clients>
	
	<div class="header">
		<h1 class="loud-voice">What Our Clients Say</h1>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
	</div>
	<div class="client-card">
		<ol>
			<?php foreach ($clientCard as $client) {?>
				<li>
					<p><?=$client['review']?></p>
					<p><?=$client['name']?></p>
				</li>

				<li>
					<p><?=$client['review']?></p>
					<p><?=$client['name']?></p>
				</li>

			<?php } ?>
		</ol>
	</div>

</clients>