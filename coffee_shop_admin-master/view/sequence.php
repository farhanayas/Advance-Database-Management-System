<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequence</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['uname']))
{
    header('Location: ../view/login.html');
}
include '../view/header.php';
?>
<h1>Branch insertion</h1>
<form action="../controller/sequenceAction.php" method="post">
            <label for="name">Name</label>
            <input id="bname" type="text" name="bname">
            <span id="bnameError"></span> <br><br>
       
            <label for="mid">Manager ID</label>
            <input id="mid" type="text" name="mid">
            <span id="midError"></span> <br><br>
            <span>*</span>
            <label for="csid">Coffee shop ID</label>
            <input id="csid" type="text" name="csid">
            <span id="csidError"></span> <br><br>
            <input class="submit" type="submit" name="branch" value="Register">
</form>

<h1>Food item insertion</h1>
<form action="../controller/sequenceAction.php" method="post">
            <label for="name">Name</label>
            <input id="fname" type="text" name="fname">
            <span id="bnameError"></span> <br><br>
       
            <label for="amount">Amount</label>
            <input id="amount" type="text" name="amount">
            <span id="amountError"></span> <br><br>
            
            <label for="quantity">Quantity</label>
            <input id="quantity" type="text" name="quantity">
            <span id="quantityError"></span> <br><br>
            <label for="des">Description</label>
            <input id="des" type="text" name="des">
            <span id="desError"></span> <br><br>
            <input class="submit" type="submit" name="food" value="Register">
</form>
</body>
</html>