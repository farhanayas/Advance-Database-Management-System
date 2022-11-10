<?php
include '../model/sequencedb.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
if(isset($_POST['branch'])){
    $bname = $mid = $cid = "";
    $flag = false;
    if (empty($_POST['bname'])) {
        echo "Name Required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['mid'])) {
        echo "mid required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['csid'])) {
        echo "csid required";
        echo "<br>";
        $flag = true;
    }
    if(!$flag){
        $bname = input_data($_POST['bname']);
        $mid = input_data($_POST['mid']);
        $cid = input_data($_POST['csid']);
        $res = branch($bname,$mid,$cid);
        if($res){
            echo "Successful";
        }
        else{
            echo "failed";
        }
    }

}

if(isset($_POST['food'])){
    $fname = $quantity = $amount = $des="";
    $flag = false;
    if (empty($_POST['fname'])) {
        echo "Name Required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['quantity'])) {
        echo "quantity required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['amount'])) {
        echo "amount required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['des'])) {
        echo "Description required";
        echo "<br>";
        $flag = true;
    }
    if(!$flag){
        $fname = input_data($_POST['fname']);
        $quantity = input_data($_POST['quantity']);
        $amount = input_data($_POST['amount']);
        $des = input_data($_POST['des']);
        $res = food($fname,$amount,$quantity,$des);
        if($res){
            echo "Successful";
        }
        else{
            echo "failed";
        }
    }

}
?>