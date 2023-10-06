// list of wine bottles that have price and name and in stock and how many
// add bottle with name, price, in stock, count
// update stock and/or count
// display/ filter? 
// remove from inventory

//create constructor to fill out inventory app
function Wine(name, price, inStock, count) {
	this.name = name;
	this.price = price;
	this.inStock = inStock;
	this.count = count;
}

function InventoryListApp(month){
	this.month = month;
	this.stockList = [];


	this.add = function(name, price, inStock, count){
		const bottle = new Wine(name, price, inStock, count);
		this.stockList.push(bottle);
		//this.show();
	};

	this.discount = function(index,percent){
		//find the bottle
		var oldPrice = this.stockList[index].price;
		//update the price
		var dollarsOff = oldPrice * (percent/100);
		var newPrice = oldPrice - dollarsOff;

		//show the new price

		
	
		console.log(`The price was reduced from ${oldPrice} by ${percent} percent to ${newPrice}`);
	}

	this.show = function() {
		console.log('Inventory: ', this.stockList)
	};

}
// const cava = new Wine ("Paul Cheneu", 11 , true, 10);
// const xinomavro = new Wine("Karanika", 88, true, 12);

const inventory = new InventoryListApp("October");
inventory.add("Paul Cheneu", 11 , true, 10);
inventory.add("Karanika", 88, true, 12);
inventory.discount(1, 20);