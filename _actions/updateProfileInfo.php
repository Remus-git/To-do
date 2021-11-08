<?php
    session_start();
    include("../vendor/autoload.php");
    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\HTTP;
    $updateName = $_POST['name'];
    $updateEmail = $_POST['email'];
    $updatePhone = $_POST['phone'];

    $table = new UsersTable(new MySQL());
    $table->updateProfile($updateName,$updateEmail,$updatePhone);
    HTTP::redirect('overview.php');
    