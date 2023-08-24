<?php include('resume-data.php'); ?>

<section class="resume">
<inner-column>

	<h1 class="loud-voice">Resume</h1>
		<ul class="resume-list">
			<?php foreach ($resumeData as $resumeItem) { ?>
				<li class="resume-item">

			<resume-card>
				<h2 class="time"> <?=$resumeItem["time"]?></h2>
					<div class="oneLine">
						<h2 class="employer"><?=$resumeItem["employer"]?></h2>
						<h2 class="location"><?=$resumeItem["location"]?></h2>
					</div>
				<h2 class="title"> <?=$resumeItem["title"]?></h2>
				<ul>
					<?php foreach ($resumeItem["jobDescription"] as $job) { ?>
						<li><?=$job?></li>

					<?php } ?>
				</ul>
		
			</resume-card>
		</li>

		<?php } ?>
	</ul>
			

			
		</ul>


	
</inner-column>
</section>