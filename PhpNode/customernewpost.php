<?php
    require_once "DnodeSyncClient.php";
    $dnode = new \DnodeSyncClient\Dnode();

    $customer = new stdClass();

    $customer->name = $_POST['name'];
    $customer->address = $_POST['address'];

    $connection = $dnode->connect('localhost', 3002);
    $result = $connection->call('add', array($customer));
    
    header('Location: customerlist.php');
    exit;    
?>