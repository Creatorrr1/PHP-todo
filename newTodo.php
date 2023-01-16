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
    $jsonArray = json_decode($json, true);
    // will return an associative array
    // an object in json is converted into an array using json_decode

    $jsonArray[$todoName] = ["completed" => false];
    // this will insert the todoName into the associative array
    // and for this todoName it will  correspond to an associative array of completed => false

    // echo "<pre>";
    // echo var_dump($jsonArray);
    // echo "</pre>";

    // $jsonFile = "todo.json";

    file_put_contents("todo.json", json_encode($jsonArray)); 
    // an associative array in json is converted into json using json_encode
    // this will in result save the todo into the json file

}
?>