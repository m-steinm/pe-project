
var simplDeskItems = [
	"Sponge Bob", 
	"Print", 
	"Coffee", 
	"Timer", 
	"Water glass", 
	"Phone", 
	"Other keyboard", 
	"Hat"
	];

var deskItems = [
	{
		name: "Sponge Bob",
		type: "picture",

	},	

	{
		name: "Print",
		type: "picture",

	},

	{
		name: "Coffee",
		type: "drink",

	},

	{
		name: "Timer",
		type: "clock",

	},

	{
		name: "Water glass",
		type: "drink",

	},

	{
		name: "Phone",
		type: "technology",

	},

	{
		name: "Other keyboard",
		type: "technology",

	},

	{
		name: "Hat",
		type: "clothing",

	},
];




var drinks = deskItems.filter( function(item) {
	return item.type == "drink";
});

var picture = deskItems.filter( function(item) {
	return item.type == "picture";
});

//create function that accepts an arrya and generate markup
//must have heading -- and create a list of the items

function arrayTest(array){
	document.body.appendChild('h1');
	h1.textContent = array.name;
}

console.log(arrayTest(drinks));



// deskItems.forEach( function(item){
// 	if(item.type == "drink"){
// 		console.log(item.name);
// 		console.log("it's time to drink these") 
// }} );






// function printItem(item, index) { 
// 	var number = index + 1;
// 	console.log(number, item);
// }

// deskItems.forEach(printItem);