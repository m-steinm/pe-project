
<?php

$lengthFeet=0;
$widthFeet=0;

if (isset($_POST["submitted"]) ) {
	if (isset($_POST["lengthFeet"]) ){
		$lengthFeet = $_POST["lengthFeet"];
	}
	if (isset($_POST["widthFeet"]) ){
		$widthFeet = $_POST["widthFeet"];
	}
}

$totalFeet = floatval($lengthFeet) * floatval($widthFeet);
$totalMeters = floatval($totalFeet) * 0.09290304;
$message = "<p> The area of the room can be measured as $totalFeet feet, or $totalMeters meters.</p>";
?>

<form method="POST">
	<a href="?"><h1>Caculating the Area of a Rectangular Room - in feet and meters</h1></a>

	<div class="field">
		<label>Lenght in Feet</label>
		<input type="number"
			name="lengthFeet"
			value="<?php echo $lengthFeet ?>"
			required="required"
			min=0
		>
	</div>

	<div class="field">
		<label>Width in Feet</label>
		<input type="number"
			name="widthFeet"
			value="<?php echo $widthFeet ?>"
			required="required"
			min=0
		>
	</div>
	
	<button type="submit" name="submitted">Submit</button>
	

</form>


<?php 
if (isset($_POST["submitted"]) ) {
echo $message; 
}
?>
