<?php 

include_once "../includes/data/UserTable.php";

$userTable = new UserTable();
$userTable->logout();

header("Location: /");
exit();