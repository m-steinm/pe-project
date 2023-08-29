<link rel="stylesheet" href="style.css">

<?php include('list-data.php'); ?>


<section class='heading'>
	<heading-card>
		<h2>Heading Level 2 small</h2>
		<p>this is some body text. this is some body text. this is some body text. this is some body text. 
		</p>
	</heading-card>
</section>

<section>
<ol class="list-grid">
	<li>
	<?php foreach ($listData as $list) { ?>
		<list-card>
			<h3><?=$list["heading"]?></h3>
			<p><?=$list['text']?></p>
		</list-card>
	<?php } ?>	
	</li>
</ol>
</section>