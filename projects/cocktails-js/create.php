<inner-column>
<?php
	
	$formSubmitted = isset($_POST["add"]); 

	if ($formSubmitted) {
			if( isset($_POST["name"]) ) {
				$name = $_POST["name"];

				//create cocktail
				$newCocktail = [
					"name" => $name
				];
				var_dump($newCocktail);

			}
	}


	//tranform it to json file
	// save cocktail and return it

?>
</inner-column>



<section>
	<inner-column>
		<h1>Add Cocktails</h1>

		<form method="POST">
			<field>
				<label>Name</label>
				<input type="text" name="cocktail-name">
			</field> 
			
<!-- 			<field>
				<label>Base Spirit</label>
				<input type="text" name="base" >

			<field>
				<label>First Ingredient</label>
				<input type="text" name="first">
			</field>

			<field>
				<label>Second Ingredient</label>
				<input type="text" name="second">
			</field>	

			<field>
				<label>Third Ingredient</label>
				<input type="text" name="third">
			</field>

			<field>
				<label>Fourth Ingredient</label>
				<input type="text" name="fourth">
			</field>

			<field>
				<label>Garnish</label>
				<input type="text" name="fourth">
			</field>
		 -->
			<button type="submit" name="add">
				Submit
			</button>
		</form>
	</inner-column>
</section>
