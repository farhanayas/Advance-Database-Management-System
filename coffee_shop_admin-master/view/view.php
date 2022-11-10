<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/view.css">
    <title>View</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['uname']))
{
    header('Location: ../view/login.html');
}
include '../view/header.php';
include '../model/viewdb.php';
?>
<div class="title">
    <h1>View</h1>
</div>
<div class="heading-table">
    <p>Create a view Manager_view based on the m_id, m_name, c_id, c_name from manager table and coffee_shop table. </p>
</div>
<table border="2">
    <tr>
    <th>Manager Id</th>
    <th>Manager Name</th>
    <th>Coffee Shop ID</th>
    <th>Coffee Shop Name</th>
    </tr>
    <?php
    $res = view1();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

<div class="heading-table">
    <p>Create a view AVG based on average salary from waiter </p>
</div>
<table border="2">
    <tr>
    <th>Average salary of waiter</th>
    </tr>
    <?php
    $res = view2();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

<div class="heading-table">
    <p>Create a view newAmount based on food_item table to get 20% discounted item amount. </p>
</div>
<table border="2">
    <tr>
    <th>Food Id</th>
    <th>Food Name</th>
    <th>New price</th>
    </tr>
    <?php
    $res = view3();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>


<div class="heading-table">
    <p>Create a view shop_info to get the c_name, c_address, c_phone from coffee_shop table </p>
</div>
<table border="2">
    <tr>
    <th>Coffee shop name</th>
    <th>Address</th>
    <th>Phone</th>
    </tr>
    <?php
    $res = view4();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>
</body>
</html>