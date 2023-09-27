<section>
<inner-column>
	<form>
		
		<h1 class="attention-voice"><a href="?">Counting Characters</a></h1>
		<h2><em>How many characters in your string?</em></h2>

		<div class="field">

			<label for="">What is the input string that you would like to count?</label>
			<input id="string" type="text">

		</div>

		<button type="submit">Count</button>

		<output></output>
		
		</div>
	
	</form>
</inner-column>
</section>


<script>

	var form = document.querySelector('form');
	var input = form.querySelector('input');
	var output = document.querySelector('output');

	form.addEventListener('input', function(event){
		event.preventDefault();

		var wordArray = input.value.split(" ")
		

		if (input.value) {
			var message = `"${input.value}" has ${wordArray.length} characters (including spaces)`;
			output.innerHTML = `<p>${message}</p>`;
			} else {
			output.innerHTML = `<p>Please enter a string to count</p>`;
		}

	})


</script>



<!-- 
//ask for a string of characters 
//count the characters
//display the original string and the number of characters



-->


