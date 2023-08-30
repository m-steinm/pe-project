


<?php 

	$length = 0;
	$width = 0;

	if ( isset($_POST["submitted"]) ) {

		if ( isset($_POST["length"]) ) {
			if ( ($_POST["length"] >= 0) ){
				$length = $_POST["length"];
			}	
		}
		if( isset($_POST["width"]) ){
			if( ($_POST["width"] >= 0) ){
				$width = $_POST["width"];
			}
			}	
		}

	// caculate the area of the room in feet 
		$totalFeet = floatval($length) * floatval($width);
	
	// convert the area of the room to meters 
		$totalMeters = floatval($totalFeet) * 0.09290304;
	
	// display the area of the room 
		$message = "<p> The area of the room is $totalFeet feet, which converts to $totalMeters meters.</p>";

?>
<section>
<inner-column>

	<form method='POST'>
	<a href=""><h1 class="attention-voice">Convert the Area of a Rectangular Room</h1></a>
	<h2 class="calm-voice">From feet to meters</h2>

	<div class="field">
		<!-- //prompt for length in feet -->
		<label>What is the lenght of the room in feet</label>
		<input 
			type="number" 
			name="length" 
			value='<?=$length?>' 
			min=0 
			required>
	</div>

	<div class="field">
		<!-- //prompt for width in feet -->
		<label>What is the width of the room in feet</label>
		<input 
			type="number" 
			name="width" 
			value='<?=$width?>'
			min=0 
			required
			>
	</div>

	<button type="submit" name="submitted">
		Submit
	</button>
	</form>

</inner-column>
</section>


<inner-column>
<output>
<?php 
if (isset($_POST["submitted"]) ) {
echo $message; 
}
?>
</output>
</inner-column>


