<?php
    include ('../vendor/autoload.php');
    use Libs\Database\MySQL;
    use Libs\Database\TasksTable;
    use Helpers\HTTP;
    $table = new TasksTable(new MySQL());
    $id = $_GET['id'];
    $table->delete($id);
    HTTP::redirect("/overview.php");