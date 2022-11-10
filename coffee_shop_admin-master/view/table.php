<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/table.css">
    <title>Table View</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['uname']))
{
    header('Location: ../view/login.html');
}
include '../view/header.php';
include '../model/tabledb.php';
?>
<div class="title">
    <h1>Table View From Oracle</h1>
</div>
<div class="heading-table">
    <h1>Coffee Shop:</h1>
</div>
<table border="2">
    <tr>
    <th>Coffee Shop Id</th>
    <th>Coffee Shop Name</th>
    <th>Phone number</th>
    <th>Address</th>
    <th>Zipcode</th>
    </tr>
    <?php
    $res = coffee_shopShow(); //res = sql
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
    <h1>Branch:</h1>
</div>
<table border="2">
    <tr>
    <th>Branch Id</th>
    <th>Branch Name</th>
    <th>Manager ID</th>
    <th>Coffee Shop ID</th>
    </tr>
    <?php
    $res = branchShow();
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
    <h1>Manager:</h1>
</div>
<table border="2">
    <tr>
    <th>Manager Id</th>
    <th>manager Name</th>
    <th>Manager Address</th>
    <th>Phone number</th>
    <th>Zip code</th>
    <th>Coffee Shop ID</th>
    <th>Salary</th>
    </tr>
    <?php
    $res = managerShow();
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
    <h1>Waiter:</h1>
</div>
<table border="2">
    <tr>
    <th>Waiter Id</th>
    <th>Waiter Name</th>
    <th>Manager Address</th>
    <th>Phone number</th>
    <th>Manager Address </th>
    <th>Coffee Shop ID</th>
    <th>Salary</th>
    </tr>
    <?php
    $res = waiterShow();
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
    <h1>Food Item:</h1>
</div>
<table border="2">
    <tr>
    <th>Food Id</th>
    <th>Food Name</th>
    <th>Amount</th>
    <th>Qauntity</th>
    <th>Description</th>
    </tr>
    <?php
    $res = foodShow();
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
    <h1>Customer:</h1>
</div>
<table border="2">
    <tr>
    <th>Customer Id</th>
    <th>Customer Name</th>
    <th>Phone number</th>
    <th>Order food ID</th>
    <th>Coffee Shop ID</th>
    </tr>
    <?php
    $res = customerShow();
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
    <h1>Casiher:</h1>
</div>
<table border="2">
    <tr>
    <th>Cashier Id</th>
    <th>Cashier Name</th>
    <th>Phone number</th>
    <th>Address</th>
    <th>Coffee Shop ID</th>
    <th>Salary</th>
    </tr>
    <?php
    $res = cashierShow();
    
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