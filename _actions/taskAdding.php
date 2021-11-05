<?php
    session_start();
    include("../vendor/autoload.php");
    use Libs\Database\MySQL;
    use Libs\Database\TasksTable;
    use Helpers\HTTP;

    $data = [
        "title"=>$_POST['title'] ?? 'Unknown',
        "description"=>$_POST['description'] ?? 'Unknown',
        "deadline" =>  $_POST['deadline'] ?? 'Unknown',
    ];
    $table = new TasksTable(new MySQL());

    if($table){
        $table->insert($data);
        HTTP::redirect("/overView.php", $_SESSION['signUp'] = true);
    }else{
        HTTP::redirect("/addTask.php");
    }