const inventoryApp = {

	winesOrder: [],
	wineIdMaker: 0,

	print: function(note = ""){
		console.log(`----${note}`);
		console.log('Bottles: ', this.winesOrder);
	},

	add: function(bottle){
		const wine = {
			id: `a${this.wineIdMaker++}`,
			wine: bottle,
		};
		this.winesOrder = [...this.winesOrder, wine];
		this.print(`Added ${bottle}`);
	},

	remove: function(id){
		this.print(`Removed ${this.winesOrder[id].wine}`);
		this.winesOrder.splice(2,1)
	},

	complete: function(id){
	this.print(`Ordered ${this.winesOrder[id].wine}`);
	this.winesOrder[id].complete = true;
},

	update: function(id, newBottle){
	var message = `Updated ${this.winesOrder[id].wine} to ${newBottle}`;
	this.winesOrder[id].wine = newBottle;
	this.print(message);
}

}

inventoryApp.add('Merlot');
inventoryApp.add('Cabernet');
inventoryApp.add('Pinot Noir');
inventoryApp.add('Grenache');
inventoryApp.add('Sauvignon Blanc');

inventoryApp.remove(2);

inventoryApp.complete(1);

inventoryApp.update(2, 'Garnacha');