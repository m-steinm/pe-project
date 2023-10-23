var $outlet = document.querySelector('[data-outlet="main"]');

function setScreen(name) {
	console.log("set screen: ", name);

	$outlet.innerHTML = pages[name];
}


var pages = [];

//set home page
//set cocktail menu page
//set list of cocktails page
//set cocktails details page
//set closing report page

function setPage(page) {
	return `
		<h1>${dataset.screen}</h1>
	`;
}

export {
	setScreen
};