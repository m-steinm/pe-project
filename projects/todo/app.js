
function print(note = "") {
	console.log(`------- ${note}`);
	console.log('to do: ', todos);
}

const todos = [];
var count = 0


function add(content) {
	var todo = {
		id: `a${count++}`,
		content: content,
	};

	todos.push(todo);
	update(`Added ${content}`);
}

function remove(id) {
	todos.splice(id,1);
	update(`Removed ${todos[id].content}`);
}

function complete(id) {
	todos[id].complete = true;
	update(`Completed ${todos[id].content}`);
}

function update(){};


add("Go to the store");
add("blow up ballons");
add("Move the couch");

complete(0);


remove(1);

