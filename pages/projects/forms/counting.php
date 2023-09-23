
<?php

	$string="";
	$stringCount=0;


	if (isset($_POST["submitted"]) ) {

		if (isset($_POST["string"]) ) {
			$string = $_POST["string"];
		}
		
	}

	$stringCount = strlen($string);
	
	$message = "<p> You entered "  . '"' . $string . '"' . " which contains " . $stringCount . " characters.</p>";


?>
<section>
<inner-column>
	

<form method="POST">
	<h1 class="attention-voice"><a href="?">Counting Characters</a></h1>
	<h2><em>How many characters in your string?</em></h2>
	
	<div class="field">
		<label>Enter a sentence (or any other characters) that you'd like to count</label>
		<input type="text"
			name="string"
			value="<?php echo $string ?>"
			required 
		>

	</div>

	<button type="submit" name="submitted">Submit</button>
<output>
<?php 
	if (isset($_POST["submitted"]) ) {
	echo $message; 
	} else
?>
</output>


</form>



</inner-column>
</section>





