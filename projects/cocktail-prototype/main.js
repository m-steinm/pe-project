

import { setScreen, setDetailPage } from "./set-screen.js";

window.addEventListener("click", function (event) {
	console.log("...");
	//when you click a button that is meant to change screens
	if (event.target.matches("[data-screen")){
		setScreen(event.target.dataset.screen);

	}
})

window.addEventListener("click", function (event) {
	console.log("...");
	//when you click a button that is meant to change screens
	if (event.target.matches("[data-cocktail]")){
		setDetailPage(event.target.dataset.cocktail);

	}
})