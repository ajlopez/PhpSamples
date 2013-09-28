<?php
require_once "..\DnodeSyncClient.php";
$dnode = new \DnodeSyncClient\Dnode();
$connection = $dnode->connect('localhost', 3002);
$response = $connection->call('findAll', array('hello'));
var_dump($response);
?>