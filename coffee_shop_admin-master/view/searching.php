<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/searching.css">
    <title>Searching</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['uname']))
{
    header('Location: ../view/login.html');
}
include '../view/header.php';
include '../model/searchingdb.php';
?>
<div class="title">
    <h1>Searching Operation from oracle</h1>
</div>
<div class="heading-table">
    <p>Display Customer Information who order 70+ food</p>
</div>
<table border="2">
    <tr>
    <th>Customer Id</th>
    <th>Customer Name</th>
    <th>Phone number</th>
    <th>Order food ID</th>
    <th>Coffee Shop ID</th>
    <th>No. of order food</th>
    </tr>
    <?php
    $res = problem1();
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
    <p>List the name of food items which price is less than 50 tk?</p>
</div>
<table border="2">
    <tr>
    <th>Food Id</th>
    <th>Food Name</th>
    <th>Price</th>
    <th>Qauntity</th>
    <th>Description</th>
    </tr>
    <?php
    $res = problem2();
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
    <p>Display the coffee_shop which carry max manager</p>
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
    $res = problem3();
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
    <p>Find out the manager who lives in DHAKA and belong from coffee shop 1</p>
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
    $res = problem4();
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
    <p>Find out the details of the CASHIER whose location is same as 'XYZ' and ID is same like 'ARMAN'.</p>
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
    $res = problem5();
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
    <p>List the name of the manager who manages maximum number of waiters</p>
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
    $res = problem6();
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
    <p>find out the highest price food</p>
</div>
<table border="2">
    <tr>
    <th>Food Id</th>
    <th>Food Name</th>
    <th>Price</th>
    <th>Qauntity</th>
    <th>Description</th>
    </tr>
    <?php
    $res = problem7();
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
    <p>Which coffee shop has highest branch</p>
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
    $res = problem8();
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
    <p>Find out the manager zipcode which is between 1000 and 2000</p>
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
    $res = problem9();
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
    <p>Which coffee shop has lowest number of customer</p>
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
    $res = problem10();
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