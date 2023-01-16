<?php
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

$todoName = $_POST["todo_name"] ?? "";
$todoName = trim($todoName);
// this will remove any todo with space value

if($todoName){
    // echo "save Todo";
    $json = file_get_contents("todo.json");
    // file_put_contents("todo.json");
    echo "<pre>";
    echo $json;
    echo "</pre>";
}
?>