

<style>
	
	.field {
		display: flex;
		flex-direction: column;
		margin-top: 20px;
	}

	input {
		margin-top: 4px;
	}

	form {
		max-width: 400px;
		padding: 20px;
	}

	button {
		margin-top: 20px;
	}

	}

</style>



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
			if ($retirementAge <= $currentAge){
				echo $retireAlready;
			} else {
				echo $message;
		}
	}




	$total = floatval($retirementAge) - floatval($currentAge);
		
	$when = floatval($year) + floatval($total);

	$message = "
		<p> What is your current age? $currentAge </p>
		<p> At what age would you like to retire? $retirementAge </p>
		<p> You have $total years left until you can retire.</p>
		<p> It's $year so you can retire in $when </p>";

	$retireAlready = "<p>Hooray, you're ready to retire!</p>";

// if (isset($_POST["submitted"])) {

?>

<form method="POST">
	<a href="?"><h1>Retirement Caculator</h1></a>

	<div class="field">
		<label>Current Age?</label>
		<input type="number" 
			name="currentAge" 
			value="<?php echo $currentAge;?>" 
			min="0" 
			required >

	</div>

	<div class="field">
		<label>Desired Retirement Age?</label>
		<input type="number" 
			name="retirementAge" 
			value="<?=$retirementAge?>" 
			min="0" 
			required >
	</div>

	<button type="submit" name="submitted">Submit</button>

	<?php echo $message ?>
	
</form>






