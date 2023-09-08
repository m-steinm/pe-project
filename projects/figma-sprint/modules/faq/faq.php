<?php include('faq-data.php'); ?>

<faq>	
	<div class="header">
	<h1 class="loud-voice">Frequently Asked Questions</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non in saepe dolore excepturi magnam.  </p>
</div>

	<ul class="faq-list">
		<?php foreach ($questions as $question) { ?>
			<li class=question>
				<details>
				<summary><?=$question["question"]?></summary>
				<p><?=$question["answer"]?></p>
				</details>
			</li>


		<?php } ?>
	</ul>

</faq>