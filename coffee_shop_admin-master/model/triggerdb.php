<?php  
include '../model/dbconnect.php';
 function trigger1($quantity,$id){
    $conn = connect();
    $sql = oci_parse($conn,"update food_item set i_quantity = $quantity where i_id = $id") ;
    $res = oci_execute($sql);
    return $res;
 }
 function trigger2($id,$address){
    $conn = connect();
    $sql = oci_parse($conn,"update coffee_shop set c_address = '$address' where c_id = $id") ;
    $res = oci_execute($sql);
    return $res;
 }
 function trigger3($id,$cname){
    $conn = connect();
    $sql = oci_parse($conn,"update customer set cu_name = '$cname' where cu_id = $id") ;
    $res = oci_execute($sql);
    return $res;
 }
 function logShow(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from item_log") ;
    $res = oci_execute($sql);
    return $sql;
 }

?>