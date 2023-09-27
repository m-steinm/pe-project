<!-- //ask for principal amaount
//ask for percentage rate
//ask for time
//display amount accrued -->

<style>
	form {
		display: flex;
		flex-direction:column;
	
	}

	field{
		display: flex;
		flex-direction:column;

	}

	field input { 
		margin-top: 5px;
		max-width:100px;
	}

	field  label {
		margin-top: 20px;
	}

	button {
		display: block;
		max-width: 100px;
	}



</style>


<section>
<inner-column>

	<form action="">

		<h1 class="attention-voice"><a href="?">Calculating Simple Interest</a></h1>
		<h2><em>How valuable is that investment?</em></h2>

		<field>
			<label for="input-principal">What is the principal amount?</label>
			<input id="input-principal" type="number" placeholder="$" min="0">
			<label for="input-interest">What is the interest rate?</label>
			<input id="input-interest" type="number" placeholder="%" min="0" step=".01">
			<label for="input-years">Enter the number of years</label>
			<input id="input-years" type="number" min="0">
		</field>

			<button type="submit">Calculate</button>

			<output></output>

	</form>
</inner-column>
</section>

<script>
	var form = document.querySelector('form');
	var input = form.querySelector('input');
	var output = document.querySelector('output');


	var principal = form.querySelector('#input-principal');
	var interest = form.querySelector('#input-interest');
	var years = form.querySelector('#input-years');

	form.addEventListener('submit', function(event){
		event.preventDefault();
	});

function annualRate(principal, interest){
	var percent = interest * .01; 
	var i = parseInt(percent);



	console.log(percent); 

}

annualRate(1,2,3);


// convert interest to decimal
// convert principal and years to numbers 
// calculate annual rate

	// var annualRate = principal * (1+(interest*years));

	// 	console.log(annualRate);



</script>

