

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

<!-- <script src='retirement.js'></script> -->

<script>
	

var form = document.querySelector('form');
var input = form.querySelector('input');
var output = document.querySelector('output');

var currentAge = form.querySelector("[name='currentAge']")
var retirementAge = form.querySelector("[name='retirementAge']")

// form.addEventListener('submit', function (event) {
// 	if (input.value) {
// 		var messages = `you're current age is ${currentAge.value}`;
// 		console.log(messages);
// }

// })


function years(currentAge, retirementAge){
	return (parseInt(retirementAge) - parseInt(currentAge) );
		
}

function buildMessage(){
	var yearsLeft = years(currentAge.value, retirementAge.value);

	if (yearsLeft == 1) {
		return `you're current age is ${currentAge.value} and your desired retirment age is ${retirementAge.value}. You have ${yearsLeft} year left until you can retire`;
	} else if (yearsLeft >= 2) {
		return `you're current age is ${currentAge.value} and your desired retirment age is ${retirementAge.value}. You have ${yearsLeft} years left until you can retire`;
	} else { 
		return " Something is wrong. Maybe you should have retired already."
	}
	}

function renderMessage(){
	output.innerHTML = buildMessage();
}

function clearMessage(){
	output.innerHTML = "";
}

form.addEventListener('submit', function(event) {
	event.preventDefault();

	renderMessage();

})

form.addEventListener('input', function(event) {

	clearMessage();

})

</script>
</inner-column>
</section>

<!-- 
	ask for current age
	ask for desired retirement age
	display how mnay years until retirement
	display what year it is now and what year it will be when you can retire

 -->




