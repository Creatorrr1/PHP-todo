<?php
if (file_exists("todo.json")) {
    $json = file_get_contents("todo.json");
    $todos = json_decode($json, true)  ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <form action="newTodo.php" method="post" >
    <input type="text" name="todo_name" placeholder="Enter your Todo">
    <button>New Todo</button>
    <form/>

<?php foreach ($todos as $todoName => $todo) { ?>
    <div class="todo__spacing grid">
    <form class="remove_block" action="complete_status.php" method="post">
        <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
        <input type="checkbox" <?php echo $todo["completed"] ? "checked" : "" ?>>
    </form>
        <?php echo $todoName ?>
        <form class="remove_block" action="delete.php" method="post">
            <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
            <button>Delete</button>
        </form>
        <!-- <a href="delete.php?todo_name=<?php echo $todoName ?>">Delete</a> -->
    </div>
<?php  } ?>

</body>
</html>