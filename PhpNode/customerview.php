<?php
    $id = $_GET['id'] + 0;
    
    require_once "DnodeSyncClient.php";
    $dnode = new \DnodeSyncClient\Dnode();
    $connection = $dnode->connect('localhost', 3002);
    $result = $connection->call('findById', array($id));
    $error = $result[0];
    $customer = $result[1];
    
    $page = new stdClass();
    $page->title = 'Customer';
    include('includes/header.php');
?>
<div class="row btn-group">
<a class="btn btn-info" href="customerlist.php">Customers</a>
<a class="btn btn-primary" href="customeredit.php?id=<?= $customer['id'] ?>/edit">Edit Customer...</a>
<a class="btn btn-danger" href="customerdelete.php?id=<?= $customer['id'] ?>/remove">Delete Customer...</a>
</div>
<div class='row'>
    <table class="table-striped table-bordered">
        <tr>
            <td>Name</td>
            <td><?= $customer['name'] ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?= $customer['address'] ?></td>
        </trger
    </table>
</form>
</div>