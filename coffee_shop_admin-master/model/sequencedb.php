<?php
include'../model/dbConnect.php';
function branch($name,$mid,$cid){
    $conn = connect();
    $sql = oci_parse($conn,"INSERT INTO branch(b_id,b_name,m_id,c_id) VALUES (branch_seq.nextval,'$name',$mid,$cid)") ;
    $res = oci_execute($sql);
    return $res;
}
function food($fname,$amount,$quantity,$des){
    $conn = connect();
    $sql = oci_parse($conn,"INSERT INTO food_item(i_id,i_name,i_amount,i_quantity,I_DESCRIPITION) VALUES (food_seq.nextval,'$fname',$amount,$quantity,'$des')") ;
    $res = oci_execute($sql);
    return $res;
}
?>