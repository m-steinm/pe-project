
<?php include('goals-data.php'); ?>

<section class='goals'>
<inner-column>

	<h1 class="loud-voice">Goals</h1>
	<ul class="goals-list">
		<?php foreach ($goals as $goal) { ?>
			<li class="goal">

				<goals-card>

					<h2 class="heading"> <?=$goal["heading"]?></h2>
						<ul>
							<?php foreach ($goal["bullet"] as $bullet) { ?>
							<li><?=$bullet?></li>

							<?php } ?>
						</ul>

				</goals-card>
			</li>

		<?php } ?>
	</ul>

</inner-column>
</section>
