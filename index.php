<?php
if (file_exists("todo.json")) {
    $json = file_get_contents("todo.json");
    $todos = json_decode($json, true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="todo-app">

        <div>
            <form action="newTodo.php" method="post" class="todo-form">
                <input type="text" name="todo_name" placeholder="Enter your Todo" class="add-input todo-input">
                <button class="add-button todo-button">New Todo</button>
                <form />
        </div>

        <?php foreach ($todos as $todoName => $todo) : ?>
            <div class="todo__spacing todo-items-grid todo-row">
                <form class="remove_block" action="completeStatus.php" method="post">
                    <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                    <input type="checkbox"class="todo-styling"<?php echo $todo["completed"] ? "checked" : "" ?>>
                </form>
                <?php echo $todoName ?>
                <form class="remove_block icons" action="delete.php" method="post">
                    <input type="hidden" name="todo_name" class="delete-icon" value="<?php echo $todoName ?>">
                    <button class="delete-button">Delete</button>
                </form>
                <!-- <a href="delete.php?todo_name=?php echo $todoName ?>">Delete</a> -->
            </div>
        <?php endforeach ?>
    </div>

    <script>
        const checkboxes = document.querySelectorAll("input[type=checkbox");
        checkboxes.forEach(checkbox => {
            checkbox.onclick = function() {
                this.parentNode.submit();
                // 'this' also corresponds to the checkbox itself
                // this will submit the form whenever the checkbox is checked
            }
        })
    </script>

</body>

</html>