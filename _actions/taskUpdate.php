<?php
    include('../vendor/autoload.php');
    use Libs\Database\MySQL;
    use Libs\Database\TasksTable;
    use Helpers\HTTP;
    $table = new TasksTable(new MySQL());
    $taskData=$table->getTasks();
    
    $updateTitle = $_POST['title'];
    $updateDescription = $_POST['description'];
    $updateDeadline = $_POST['deadline'];
    $taskId = $_GET['id'];
    
    $table->taskEdit($updateTitle,$updateDescription,$updateDeadline,$taskId);
    HTTP::redirect('overview.php');

    
