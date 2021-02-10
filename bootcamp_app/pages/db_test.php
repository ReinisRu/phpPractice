<?php include "../bootcamp_app/components/head.php"; ?>
<title>Database test</title>

<?php include "../bootcamp_app/components/navigation.php"; ?>

<h3>DB test page</h3>

<?php

include "../bootcamp_app/classes/Cars.php";
include "../bootcamp_app/classes/Todo.php";


$cars = new Cars('cars');
// $cars->update(2, "color='blue'");
// $cars->update(6, ['model' => 'Kodiak', 'brand' => "Škoda"]);
// $cars->delete(6);
// $cars->setData();
echo $cars->last_message;
$cars->get();
echo $cars->last_message;


$todo = new Todo('todo-tasks');
// $todo->setData();
$todo->get();
echo $todo->last_message;