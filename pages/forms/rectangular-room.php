<style>@import "forms.css";</style>

<?php 

	$length = 0;
	$width = 0;

	if( isset($_POST["submitted"]) ){
		if( isset($_POST["length"]) ){
			if( isset($_POST["length"] >= 0) ){
				$length = $_POST["length"];
			}	
		}
		if( isset($_POST["width"]) ){
			if( isset($_POST["width"] >= 0) ){
				$width = $_POST["width"];
			}
			}	
		}


		$totalFeet = floatval($length) * floatval($width);
		echo $totalFeet;
	

?>


<form method='POST'>

<a href="#"><p>Convert the Area of Rectangular Room</p></a>
<p>From feet to meters</p>

<div class="field">
	<!-- //prompt for length in feet -->
	<label>What is the lenght of the room in feet</label>
	<input type="number" name="length">
</div>

<div class="field">
	<!-- //prompt for width in feet -->
	<label>What is the width of the room in feet</label>
	<input type="number" name="width">
</div>

<button type="submit" name="submitted">
	Submit
</button>



<!-- //caculate the area of the room in feet -->

<!-- //convert the area of the room to meters -->

<!-- //display the area of the room in feet -->

<!-- //display the area of the room in meters -->



</form>