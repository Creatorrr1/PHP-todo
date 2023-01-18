<?php
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

$json = file_get_contents("todo.json");
$jsonArray = json_decode($json, true);

$todoName = $_POST["todo_name"];

?>