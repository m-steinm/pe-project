
<header class="forms-header">
<inner-column>
	
	<forms-header> 
	
		<nav>
			<ul>
			<li><a href="?page=form&id=retirement-calculator">Retirment Calculator</a></li>
			<li><a href="?page=form&id=counting">Counting Characters</a></li>
			<li><a href="?page=form&id=rectangular-room">Area of a Rectangular Room</a></li>
			</ul>
		</nav>	
		
	</forms-header>
	
</inner-column>
</header>

<?php if ($_GET['id']) {
	include($_GET['id'] . ".php");
}

?>
