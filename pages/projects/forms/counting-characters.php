
<style>
	input {
		display: block;
		min-width: 400px;
		min-height: 200px;

	}

</style>


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

<form method="POST">
	<a href="?"><h1>Counting Characters</h1></a>
	
	<div class="field">
		<label>Enter a sentence (or any other characters) that you'd like to count</label>
		<input type="text"
			name="string"
			value="<?php echo $string ?>"
			required 
		>

	</div>

	<button type="submit" name="submitted">Submit</button>

</form>

<?php 
if (isset($_POST["submitted"]) ) {
echo $message; 
}
?>





