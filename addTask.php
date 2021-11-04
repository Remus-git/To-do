<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do|Add Task</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'authHeader.php'
    ?>
    <div class="addTaskContainer">
        <?php
            include 'sideProfile.php'
        ?>
        <div class="addTask">
            <form action="taskAdding.php">
                    <div class="taskNameDes">
                        <div class="addTaskTitle">
                            <h2>Add New Task</h2>
                        </div>
                        <label for="title">Task Title</label>
                        <input type="text" name="title" id="title">
                        <label for="description">Task Description</label>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <div class="taskDeadline">
                        <label for="deadline">Deadline</label>
                        <input type="date" name="deadline" id="deadline">
                        <!-- <div class="taskColors">
                            <div class="red"></div>
                            <div class="green"></div>
                            <div class="blue"></div>
                            <div class="yellow"></div>
                        </div> -->
                    </div>
                    <input type="submit" value="CREATE NEW TASK" id="taskSubmit">
            </form>
        </div>
    </div>
</body>
</html>