<?php
    include("vendor/autoload.php");
    use Libs\Database\MySQL;
    use Libs\Database\TasksTable;
    use Helpers\Auth;
    $table = new TasksTable(new MySQL());
    $auth = Auth::check();
    $taskData = $table->getTasks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do|Overview</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
            include 'authHeader.php';
        ?>
    <div class="overViewContainer">
        <?php
           include 'sideProfile.php';
        ?>
        <div class="overView">
            <div class="overViewTitle">
                <h1>Overview</h1>
    
            </div>
            <div class="overViewTaskTitle">
                <div class="toDoTitle">
                    <a href="/overview.php">
                        To Do
                    </a>    
                </div>
                <div class="expiredTitle">
                    <a href="/overviewExpired.php">
                        Expireds
                    </a>  
                </div>
                <div class="completeTitle">
                    <a href="/overviewCompleted.php">
                        Completed
                    </a>    
                </div>
            </div>
            <h2>To Do Tasks</h2>
            <div class="overViewTaskContainer">
                        <?php foreach ($taskData as $task) : ?>
                            <?php if($task->completed == 0 && $task->expired == 0) : ?>
                                <div class="task" data-value="<?=$task->id?>">
                                    <div class="taskDisplayWrapper">
                                        <div class="displayTask">
                                            <div class="displayTitle">
                                                <h2><?=$task->title ?></h2>
                                            </div>
                                            <div class="displayDescription">
                                                <span><?= $task->description ?></span>
                                            </div>
                                            <div class="displayDeadline">
                                                <span><?= $task->deadline?><span>
                                            </div>
                                        </div>    
                                        <div class="taskUpdate">
                                            <div class="taskEdit">
                                                <i class="fas fa-edit" data-value="<?= $task->id?>"></i>
                                            </div>
                                            <div class="taskDelete">
                                                <a href="/_actions/delete.php?id=<?=$task->id?>"><i class="far fa-times-circle"></i></a>
                                                <a href="/_actions/complete.php?id=<?=$task->id?>"><i class="far fa-check-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="taskEditWrapper">
                                        <form action="/_actions/taskUpdate.php?id=<?=$task->id?>" method="post">
                                            <h4>Edit Your Task</h4>
                                            <input type="text" value="<?=$task->title?>" name="title" id="title">
                                            <input type="text" value="<?=$task->description?>" name="description" id="description">
                                            <input type="datetime-local" name="deadline" id="deadline" value="<?= date('Y-m-d\TH:i',strtotime($task->deadline)) ?>">
                                            <button type="submit">Save</button>
                                        </form>
                                        <div class="taskEdit"id="taskCancel">
                                            <i class="fas fa-edit" data-value="<?=$task->id?>"></i>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>       
                        <?php endforeach ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>