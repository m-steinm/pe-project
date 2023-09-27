

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
			
			<field>
				<label>Base Spirit</label>
				<input type="text" name="base" >
				<label for="baseSpirit"></label>
				<input id="baseSpirit" type="range" min="0" max="6" value="0" step=".25" />
				<p><output id="value"></output> oz</p>
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
		
			<button type="submit" name="add">
				Submit
			</button>

			<field class="cocktailType">
				<legend>Cocktail Type</legend>

				<div>
				<input type="radio" id="House" name="cocktail" value="House" checked />
				<label for="House">House</label>
				</div>

				<div>
				<input type="radio" id="Classic" name="cocktail" value="Classic" />
				<label for="Classic">Clasic</label>
				</div>

				<div>
				<input type="radio" id="Retired" name="cocktail" value="Retired" />
				<label for="Retired">Retired</label>
				</div>
			</field>

		</form>
	</inner-column>
</section>

<script>

	const value = document.querySelector("#value");
	const input = document.querySelector("#baseSpirit");
	value.textContent = input.value;
	input.addEventListener("input", (event) => {
	  value.textContent = event.target.value;
	});

</script>
