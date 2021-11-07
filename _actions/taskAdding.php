<?php
    session_start();
    include("../vendor/autoload.php");
    use Helpers\Auth;
    use Libs\Database\MySQL;
    use Libs\Database\TasksTable;
    use Helpers\HTTP;
    $auth = AUTH::check();
    $task = [
        "title"=>$_POST['title'] ?? 'Unknown',
        "description"=>$_POST['description'] ?? 'Unknown',
        "deadline" =>  $_POST['deadline'] ?? 'Unknown',
        "user_id" =>    $auth[0]->id
    ];
    $task_table = new TasksTable(new MySQL());
    if($task_table){
        $task_table->insert($task);
        HTTP::redirect("/overView.php");
    }else{
        HTTP::redirect("/addTask.php","error = true");
    }
    

    