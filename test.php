<?php
require_once 'include/config.php';
require_once 'include/class/database.php';

$db = new database($pdo);
$rows = $db->getData();


var_dump($rows[0]["customers_firstname"]);
