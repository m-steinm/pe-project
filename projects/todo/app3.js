//empty array



//update an item
//complete and item

//each itemn eeds and id
//each itme should have a description of what is happening in the log
function print(note = ""){
	console.log(`----${note}`);
	console.log('Bottles: ', winesOrder);
};

var winesOrder = [];
var count = 0;

//add and item
function add(bottle){
	const wine = {
		id: `a${count++}`,
		wine: bottle,
	};
	winesOrder.push(wine);
	print(`Added ${bottle}`);
};

//remove and item
function remove(id){
	print(`Removed ${winesOrder[id].wine}`);
	winesOrder.splice(2, 1);
};

//complete and item
function complete(id){
	winesOrder[id].complete = true;
	print(`Ordered ${winesOrder[id].wine}`);
};

function update(id, newBottle){
	var message = `Updated ${winesOrder[id].wine} to ${newBottle}`;
	winesOrder[id].wine = newBottle;
	print(message);
}


add('Merlot');
add('Cabernet');
add('Pinot Noir');

update(0, 'Agiortiko');
remove(1);

complete(1);

