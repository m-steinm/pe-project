
	var app = document.querySelector("#app");
	var listOutlet = document.querySelector(".cocktail-grid");

// input search 
// listen for input event on the search input
// filtering the list of cocktails
// based on if the name includes teh search string
// render that filtered list

// string.includes( serach string)
	
// function getHouseCocktails(){
// 		var found = cocktails.filter( function(cocktail) {
// 			return cocktail.house == true; 
// 		});

// 		return found;
// 	}


function getClassicCocktails(){
		var found = cocktails.filter( function(cocktail) {
			return cocktail.house == false; 
		});

		return found;
	}

	// console.log(getHouseCocktails());

	function renderIngredients(ingredientsToRender){
		var template = "";
		ingredientsToRender.forEach( function(ingredient){
			template = template + `<li>${ingredient}</li>`;
		});

		return template
	}

	function renderCocktails(cocktailsToRender){
		var template = "";
		cocktailsToRender.forEach( function(cocktail){
			template = template + `
				<li>
					<h2> ${cocktail.name} </h2>
					${renderIngredients(cocktail.ingredients)}
				</li>`;
		});
		listOutlet.innerHTML = template;
	}

	// renderCocktails(cocktails);


app.addEventListener('click', function(event) {
	event.preventDefault();

	if (event.target.matches("[id='house']")) {
		var found = cocktails.filter( function(cocktail) {
			return cocktail.house == true; 
		});
		console.log(found);
		

		renderCocktails(found);
	}

	if (event.target.matches("[id='classic']")) {
		var found = cocktails.filter( function(cocktail) {
			return cocktail.house == false; 
		});
		console.log(found);
		

		renderCocktails(found);
	}

})
// watch for all input events in app
app.addEventListener('input', function(event) {
// if the input event happened in the search bar
	if (event.target.matches('[type="search"]')) {
		// filter based on stirng input
		var searchString = event.target.value;
		console.log(searchString);
		//render the outcome
		var searchResults = cocktails.filter( function(cocktail) {
			return cocktail.name.includes(searchString)

		})

		//if cocktail is found - if there are items in the array
		if (searchResults.length > 0){
			//render the cocktail
			renderCocktails(searchResults);
			//else if the cocktail isn't found - the array is empty

		} else { 
			renderCocktails(cocktails);
		}

		//render all of the cocktails

		
	}

})
