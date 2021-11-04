<?php
    include('../vendor/autoload.php');
    use Libs\Database\TasksTable;
    use Libs\Database\MySQL;
    use Helpers\HTTP;

    $data = [
        "title"=>$_POST['title'] ?? 'Unknown',
        "description"=>$_POST['description'] ?? 'Unknown',
        "deadline"=>$_POST['deadline'] ?? 'Unknown'
    ];
    $table = new TasksTable(new MySQL());

    if($table){
        $table->insert($data);
        HTTP::redirect("/overview.php");
    }