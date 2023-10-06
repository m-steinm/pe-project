function InventoryApp(bottle) {

	this.winesOrder = [];
	this.wineIdMaker = 0;

	this.print = function(note = ""){
		console.log(`----${note}`);
		console.log('Bottles: ', this.winesOrder);
	}

	this.add = function(bottle){
		const wine = {
			id: `a${this.wineIdMaker++}`,
			wine: bottle,
		};
		this.winesOrder = [...this.winesOrder, wine];
		this.alert(`Added ${bottle}`);
	},

	this.remove = function(id){
		this.print(`Removed ${this.winesOrder[id].wine}`);
		this.winesOrder.splice(2,1)
	},

	this.complete = function(id){
	this.print(`Ordered ${this.winesOrder[id].wine}`);
	this.winesOrder[id].complete = true;
},

	this.update = function(id, newBottle){
	var message = `Updated ${this.winesOrder[id].wine} to ${newBottle}`;
	this.winesOrder[id].wine = newBottle;
	this.print(message);
}

}

const merlot = new InventoryApp('merlot');
console.log(merlot);
// inventoryApp.add('Cabernet');
// inventoryApp.add('Pinot Noir');
// inventoryApp.add('Grenache');
// inventoryApp.add('Sauvignon Blanc');

// inventoryApp.remove(2);

// inventoryApp.complete(1);

// inventoryApp.update(2, 'Garnacha');