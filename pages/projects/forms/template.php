
<?php

	$formsPage = "forms";
	if ( isset($_GET["formsPage"]) ) {
		$formsPage = $_GET["formsPage"];
	}

?>

<!-- <section>
<inner-colum>
	<nav>
		<ul>
			<li> <a href="?formsPage=forms">Home</a></li>
			<li> <a href="?formsPage=projects">Projects</a></li>
			<li> <a href="?formsPage=contact">Contact</a></li>
			<li> <a href="?formsPage=goals">Goals</a></li>
			<li> <a href="?formsPage=resume">Resume</a></li>
			<li> <a href="?formsPage=layout-garden">Layout Garden</a></li>
		</ul>
	</nav>	
</inner-colum>
</section>
 -->
<?php

	if($formsPage == "forms"){
		include("pages/projects/forms/template.php");
	}
?>