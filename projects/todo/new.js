class Wine {
	constructor(name, price){
		this.name = name;
		this.price = price;
	}
}

// var merlot = new Wine("karanika", 88)
// console.log(merlot)

//create a list of wine in inventory
class Inventory {
	constructor(){
		this.idCounter = 0;
		this.inventoryList =[];
	}
	
//be able to add to the inventory list
	add(bottle){
		var bottle = bottle;
		bottle.id = this.idCounter++;
		this.inventoryList = [...this.inventoryList, bottle];
		
	}
	show(){
		var wineList = "<ul>"
		this.inventoryList.forEach(function(bottle){
			wineList = wineList + `<li>Name: ${bottle.name}, Price: ${bottle.price}</li>` 
		});
		wineList = wineList + "</ul>";
		document.querySelector("output").innerHTML = wineList
	}

}



var merlot = new Wine("karanika", 88)
var cava = new Wine("sparkling", 48)
var list = new Inventory()
list.add(merlot)
list.add(cava)

list.show();

//be able to show the list

