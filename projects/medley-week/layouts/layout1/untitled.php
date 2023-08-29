<?php include('list-data.php'); ?>
<style>@import "style.css"</style>


<section class='heading'>
	<heading-card>
		<h2>Heading Level 2 small</h2>
		<p>this is some body text. this is some body text. this is some body text. this is some body text. 
		</p>
	</heading-card>
</section>

<section class="card-list">
	<ul class="list-grid">
	<?php foreach ($listData as $list) { ?>
		<li>
			<list-card>
				<h3><?=$list["heading"]?></h3>
				<p><?=$list["text"]?></p> 
			</list-card>
		</li>
	<?php } ?>
	</ul>
</section>
<!-- 
<section class="picture-list">
	<ul class="picture-grid">
		<li>
			<picture-card>
				<picture>
					<img src="https://peprojects.dev/images/landscape.jpg">
				</picture>
				
			</picture-card>
		</li>
		
		
	</ul>
</section> -->
	

	<section class='articles'>
   <ol class='article-list'>
      <li class='article'>
         <article class='article-card'>
             <h3 class='title'>heading
             <p class='description'>Description... 