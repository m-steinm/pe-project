<?php 
	$projects = [
		[
			"title" => "Project title apple",
			"teaser" => "Example teaser",
			"linkText" => "Visit me",
			"url" => "#",
		],
		[
			"title" => "Project title banana",
			"teaser" => "Example teaser",
			"linkText" => "Visit me",
			"url" => "#",
		],
		[
			"title" => "Project title carrot",
			"teaser" => "Example teaser",
			"linkText" => "Visit me",
			"url" => "#",
		],

	];
?>

<projects-spotlight>

	<h2 class='attention-voice'>My latest projects</h2>
	
	<ul class="project-list">
			<?php 
				foreach ($projects as $project){ ?>
					<li class="project">
						<?php include('templates/components/project-card/project-card.php');?>
					</li>
			<?php	} ?>
	</ul>
</projects-spotlight>
