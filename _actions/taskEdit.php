<?php
    include('../vendor/autoload.php');
    use Libs\Database\MySQL;
    use Libs\Database\TasksTable;
    use Helpers\HTTP;
    $table = new TasksTable(new MySQL());
    $taskData=$table->getTasks();
    foreach ($taskData as $task) {
        $updateTitle = $_POST['title'];
        $updateDescription = $_POST['description'];
        $updateDeadline = $_POST['deadline'];
        $taskId = $task->id;
        $table->taskEdit($updateTitle,$updateDescription,$updateDeadline,$taskId);
    }
    HTTP::redirect('overview.php');

    
