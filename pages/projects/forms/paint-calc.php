<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Paint Calculator</title>
</head>

<style>

	field {
		display: flex;
		flex-direction: column;
	}

	form{
		display: flex;
		flex-direction: column;
		max-width: 300px;
	}

	form label {
		margin-top: 20px;
	}
	
</style>

<body>
<section>
<inner-column>
	

	<field>
		<form action="" class="inputs">
			<label for="length">What is the length</label>
			<input type="number" id="length">

			<label for="width">What is the width</label>
			<input type="number" id="width">

			<button type="submit" id="submitted">Calculate</button>

			<output></output>
		</form>
	</field>

</inner-column>
</section>
</body>

<script>
	var form = document.querySelector('form');
	var $width = form.querySelector('#width');
	var $length = form.querySelector('#length');
	var $output = document.querySelector('output');

function cans(width, length){
	var sq = width.value * length.value;
	var total = sq / 350;
	console.log (Math.ceil(total));
}

function buildMessage(){




};

form.addEventListener('submit', function(event) {
	event.preventDefault();



})


</script>

</html>

//ask for the length of the room
//aks for the width of the room
//convert length and width to numbers
//calculate the square feet to cover
//divide by 350
//round up to a whole number
display the number