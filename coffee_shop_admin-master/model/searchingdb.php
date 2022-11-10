<?php
include '../model/dbconnect.php';
function problem1(){
    $conn = connect();
    $sql = oci_parse($conn,"select customer.* , food_item.i_quantity from customer,food_item where customer.i_id = food_item.i_id and food_item.i_quantity>70") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem2(){
    $conn = connect();
    $sql = oci_parse($conn,"SELECT * FROM FOOD_ITEM WHERE I_AMOUNT < 150") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem3(){
    $conn = connect();
    $sql = oci_parse($conn,"select coffee_shop.* from coffee_shop where coffee_shop.c_id IN ( 
        select coffee_shop.c_id from coffee_shop,manager where coffee_shop.c_id = manager.c_id group by coffee_shop.c_id having count(*) = (
        select max(count(*)) from coffee_shop,manager where coffee_shop.c_id = manager.c_id group by coffee_shop.c_id))
        ") ;
    $res = oci_execute($sql);
    return $sql;
}
function problem4(){
    $conn = connect();
    $sql = oci_parse($conn,"select manager.* from manager,coffee_shop where manager.c_id = coffee_shop.c_id and coffee_shop.c_id = 1 and m_address = 'Dhaka'") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem5(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from cashier where ca_address = ( select m_address from manager where m_name = 'xyz' ) and ca_id = ( select w_id from waiter where w_name = 'Arman')") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem6(){
    $conn = connect();
    $sql = oci_parse($conn,"select manager.* from manager where m_id = (
        select manager.m_id from manager,waiter where manager.m_id = waiter.m_id group by manager.m_id having count(*) = (
        select max(count(*)) from manager,waiter where manager.m_id = waiter.m_id group by manager.m_id ))
        ") ;
    $res = oci_execute($sql);
    return $sql;
}

function problem7(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from food_item where i_amount = (select max(i_amount) from food_item )") ;
    $res = oci_execute($sql);
    return $sql;
}
function problem8(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from coffee_shop where c_id IN (
        select coffee_shop.c_id from coffee_shop,branch where coffee_shop.c_id = branch.c_id group by coffee_shop.c_id having count(*) = (
        select max(count(*)) from coffee_shop,branch where coffee_shop.c_id = branch.c_id group by coffee_shop.c_id ))
        ") ;
    $res = oci_execute($sql);
    return $sql;
}
function problem9(){
    $conn = connect();
    $sql = oci_parse($conn,"select manager.* from manager where m_zipcode between 1000 and 2000") ;
    $res = oci_execute($sql);
    return $sql;
}
function problem10(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from coffee_shop where c_id = (
        select coffee_shop.c_id from coffee_shop,customer where coffee_shop.c_id = customer.c_id group by coffee_shop.c_id having count(*) = (
        select min(count(*)) from coffee_shop,customer where coffee_shop.c_id = customer.c_id group by coffee_shop.c_id))
        ") ;
    $res = oci_execute($sql);
    return $sql;
}
?>