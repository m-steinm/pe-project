var $outlet = document.querySelector('[data-outlet="main"]');

function setScreen(name) {
	console.log("set screen: ", name);

	$outlet.innerHTML = pages[name];
}



var categoriesData = [
	{
		id: "house",
		name: "House"
	},	
	{
		id: "classic",
		name: "Classic"
	},	
	{
		id: "na",
		name: "Non Alcoholic"
	}	
]

var cocktailsData = [
	{
		id: "1",
		name: "Old Fashioned",
		category: "classic",
		base: "2 oz bourbon",
		ingredients: [
			 ".5 oz simple",
			 "2 dashes agnostura bitter"
			],
		garnish: "orange peel",
		notes: "it is a classic"

	},	
	{
		id: 2,
		name: "Nectar",
		category: "house"

	},	
	{
		id: 3,
		name: "Eden",
		category: "na"
	}	
]


function categoryMenu(categories) {
	var template = ""
	categories.forEach( function(category){
		template += `<button data-screen="${category.id}">${category.name}</button>`
	})

	return template

}

function setDetailPage(id) {
	//get the cocktail data based on id
	//look at teh data
	//find the onee that matches the id
	var found = cocktailsData.find( function(cocktail){
		return cocktail.id == id
	})
	//build out a template that uses that data
	var template = `<h1>${found.name}</h1>
		<h2>${found.base}</h2>
	`

	//put template in the outlet
	$outlet.innerHTML = template
}

function renderCocktails(cocktails, category = null) {
	if(category){
		cocktails = cocktails.filter( function(cocktail){
			return cocktail.category == category
		})
	}

	var template = "";
	cocktails.forEach( function(cocktail){
		template += `
		<li>
		<button data-cocktail="${cocktail.id}"<h2>${cocktail.name}</h2></button>
		</li>
		`;
	})

	return template;

};


var pages = {};

pages.home = `
	<h1>Bar Book</h1>
`;

pages.cocktails =  `
	<h1>Cocktails</h1>

	${categoryMenu(categoriesData)}

	<button data-screen="addNew">Add New Cocktail</button>
`;

pages.report = `
	<h1>Closing Report</h1>
	`;


pages.house = `
	<h1>House Cocktails</h1>
	${categoryMenu(categoriesData)}

	 ${renderCocktails(cocktailsData, "house")} 

`
//array.filter to pull out only the house cocktails?

//unordered list to hold the cocktail cards
//cocktail card with recipe
//link to details page

pages.classic = `
	<h1>Classic Cocktails</h1>
	${categoryMenu(categoriesData)}

	${renderCocktails(cocktailsData, "classic")}
`
//unordered list to hold the cocktail cards
//cocktail card with recipe
//link to details page
;	

pages.na = `
	<h1>Non Alcoholic Cocktails</h1>

	${categoryMenu(categoriesData)}

	${renderCocktails(cocktailsData, "na")}
`
//unordered list to hold the cocktail cards
//cocktail card with recipe
//link to details page;	

pages.addNew = `
	<h1>Add A New Cocktail</h1>
`
//login screen
;	

pages.detail = `
	<h1>Detail Page</h1>
`
//image for cocktail
//recipe for cocktail
//notes for cocktail

// needs access to cocktail id to display the right one
;	

setScreen("home");


export {
	setScreen, setDetailPage
};
