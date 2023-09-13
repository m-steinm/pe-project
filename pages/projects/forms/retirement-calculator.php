

<?php 

	$currentAge = 0;
	$retirementAge = 0;
	$year = date('Y');



	if (isset($_POST["submitted"]) ) {

		if ( isset ($_POST["currentAge"]) ) {
			$currentAge = $_POST["currentAge"];
		
		}

		if ( isset ($_POST["retirementAge"]) ) {
			$retirementAge = $_POST["retirementAge"];	
		}
			
	}

	$total = floatval($retirementAge) - floatval($currentAge);
		
	$when = floatval($year) + floatval($total);
	
	if (isset($_POST["submitted"]) ) {
		$message = "
		<p> What is your current age? $currentAge </p>
		<p> At what age would you like to retire? $retirementAge </p>
		<p> You have $total years left until you can retire.</p>
		<p> It's $year so you can retire in $when </p>";

	$retireAlready = "<p>Hooray, you're ready to retire!</p>";
}



// if (isset($_POST["submitted"])) {

?>
<section>
<inner-column>

<form method="POST">
	<h1 class="attention-voice"><a href="?page=form&id=retirement-calculator">Retirement Caculator</a></h1>

	<h2 class="calm-voice"><em>How many more years until you're ready to retire?</em></h2>

	<div class="field">
		<label>What is your current Age?</label>
		<input type="number" 
			name="currentAge" 
			value="<?php echo $currentAge;?>" 
			min="0" 
			required >

	</div>

	<div class="field">
		<label>What is your desired Retirement Age?</label>
		<input type="number" 
			name="retirementAge" 
			value="<?=$retirementAge?>" 
			min="0" 
			required >
	</div>

	<button type="submit" name="submitted">Submit</button>

<output>

<?php
	if ( isset($_POST["submitted"] ) ){

		if ($retirementAge <= $currentAge){
			echo $retireAlready;
			} else {
			echo $message;
		}

}

?>

</output>

</form>

</inner-column>
</section>






