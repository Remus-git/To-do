<?php
    include ('../vendor/autoload.php');
    use Libs\Database\TasksTable;
    use Libs\Database\MySQL;
    $table = new TasksTable(new MySQL());
    $taskData =$table->getTasks();
    // date_default_timezone_set('Asia/Yangon');
    $dateNow =strtotime(date('Y-m-d H:i:s'));
    foreach($taskData as $task){
        $targetDate=strtotime($task->deadline);
        $timeDifferent = $targetDate - $dateNow;
        $deadline = $dateNow + $timeDifferent;
        echo "$deadline <br>";
        echo "$timeDifferent <br>";
        echo "$dateNow <br>";
        if($dateNow > $deadline ){
           $table->expired();
        }
    }
   