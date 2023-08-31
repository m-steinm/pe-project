
<!-- print out the new amount in us dollars -->

<?php
	//set euros to zero
	$euro = 0;
	//set exchange rate to zero
	$rate = 0;

if ( isset($_POST["submitted"]) ) {

	if( isset($_POST["euros"]) ) {
		if ( ($_POST["euros"] >= 0) ) {
			$euros = $_POST["euros"];
		}
	}
};

	//multiply euros by exchange rate
	//divide by the current exhange rate in dollars
?>

<section>
<inner-column>


<form method='POST'>

	<a href=""><h2 class="attention-voice">Currency Conversion</h2></a>

	<!-- prompt for the amoutn of money in euros -->
	<div class="field">
		<label for="">How many euros are you exchanging</label>
		<input 
			type="number"
			name="euros"
			value=<?$euros?>
			min=0
			required
			>
	</div>

	<!-- prompt for the current exchange rate -->
	<div class="field">
		<label>What is the current exchange rate?</label>
		<input 
			type="number"
			name="rate"
			value=<?$rate?>
			min=0
			required
			>
	</div>

	<!-- calculate the amount in dollars -->


	</div>

	<button type="submit" name="submitted">
		Submit
	</button>



</form>

</inner-column>
</section>