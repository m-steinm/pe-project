
<body>
	
<section class="site-header">
<inner-column>
	
	<site-header> 
	
	<nav>
		<ul>
			<li> <a href="?page=home">Home</a></li>
			<li> <a href="?page=projects">Projects</a></li>
			<li> <a href="?page=contact">Contact</a></li>
			<li> <a href="?page=goals">Goals</a></li>
		</ul>
	</nav>	
	
	</site-header>
	
</inner-column>
</section>

<main>

<?php

	if($page == "projects"){
		include("projects.php");
	}
?>
