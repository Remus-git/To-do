<?php
include('../vendor/autoload.php');
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\TasksTable;

$table = new TasksTable(new MySQL());
$id =  intval($_GET['id']);
$table->complete($id);
HTTP::redirect("/overview.php");