<?php
include'../model/dbConnect.php';
  function register($name,$fname,$mname,$gender,$religion,$dob,$phone,$nid,$uname,$email,$pass,$image){
     $conn = connect();
     $sql = oci_parse($conn,"INSERT INTO UINFORMATION(NAME,FNAME,MNAME,GENDER,RELIGION,DOB,PHONE,NID,UNAME,EMAIL,PASS,IMAGE) VALUES ('$name','$fname','$mname','$gender','$religion','$dob','$phone','$nid','$uname','$email','$pass','$image')") ;
     $res = oci_execute($sql);
     return $res;
}


function get($userName){
    $conn = connect();
    $query = oci_parse($conn,"SELECT * FROM UINFORMATION WHERE uname = ?");
    $res = oci_execute($query);
    $row = oci_fetch_all($query,$res);
    return $row;
}


?> 