<?php
require_once "DnodeSyncClient.php";
$dnode = new \DnodeSyncClient\Dnode();

$customer = new stdClass();

$customer->name = 'Adam';
$customer->age = 800;

$connection = $dnode->connect('localhost', 3002);
$response = $connection->call('add', array($customer));
var_dump($response);
?>