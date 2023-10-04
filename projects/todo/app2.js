
var todos = [];
var count = 0

function print(note = ""){
	console.log(`----- ${note}`);
	console.log('todos: ', todos);
};

function add(project){
	var todo = {
		id: count++,
		project
	};
	todos.push(todo);
	print(`Added ${project}`);
	
};

function remove(id){
	print(`Removed ${todos[id].project}`);
		todos.splice(id, 1);
};

function complete(id){
	todos[id].complete = true;
	print(`Completed ${todos[id].project}`);
};

function update(id){
	
}





add("coffee");
add("water");

//complete(1);
update(1, "wine");

add("apple juice");


remove(0);




