<?php
// configuration
include('connect.php');

// new data
$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$last_name = $_POST['last_name'];
$username= $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$employee_number= $_POST['employee_number'];
$id = $_POST['memids'];


// query
$sql = "UPDATE user 
        SET first_name=?, surname=?, last_name=? ,username=?,password=?, role=?, employee_number=? 
        where id=?" ;
$q = $db->prepare($sql);
$q->execute(array($first_name,$surname,$last_name,$username,$password,$role,$employee_number,$id));
header("location: index.php");

?>