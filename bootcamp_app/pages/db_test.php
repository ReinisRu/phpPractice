<?php include "../bootcamp_app/components/head.php"; ?>
<title>Database test</title>

<?php include "../bootcamp_app/components/navigation.php"; ?>

<h3>DB test page</h3>

<?php

include "../bootcamp_app/classes/Cars.php";
include "../bootcamp_app/classes/Todo.php";


$cars = new Cars('cars');
// $cars->setData();
$cars->get();

$todo = new Todo('todo-tasks');
// $todo->setData();
$todo->get();
