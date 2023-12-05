function update() {
	console.log('todos: ', todos );

}

const todos = [];


function add(id, content) {
	var todo = {
		content
	};
	todos.push(todo);
	update();

}

function remove(id) {
	todos.splice(id, 1);
	update();
}

add(1, "go to the store");
add("make dinner");
add("make this video");

remove(0);


