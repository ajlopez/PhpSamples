<?php
    $page = new stdClass();
    $page->title = 'New Customer';
    include('includes/header.php');
?>
<div class="row btn-group">
<a class="btn btn-info" href="customerlist.php">Customers</a>
</div>

<div class='row'>
<form method="post" action="customernewpost.php">
    <table class="table-striped table-bordered">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address"/></td>
        </tr>
        <tr>
            <td colspan="2"><input class="btn btn-primary" type="submit" value="Create" /></td>
        </tr>
    </table>
</form>
</div>
<?php
    include('includes/footer.php');
?>