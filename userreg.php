<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "court";
$dbuser		= "root";
$dbpass		= "root";


// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data
$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$employee_number = $_POST['employee_number'];


if($first_name == '') {
	$errmsg_arr[] = 'You must enter your first_name';
	$errflag = true;
}
if($surname == '') {
	$errmsg_arr[] = 'You must enter your surname';
	$errflag = true;
}
if($last_name == '') {
	$errmsg_arr[] = 'You must enter your last_name';
	$errflag = true;
}
if($username == '') {
	$errmsg_arr[] = 'You must enter your username';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your password';
	$errflag = true;
}
if($role == '') {
	$errmsg_arr[] = 'You must enter your role';
	$errflag = true;
}
if($employee_number == '') {
	$errmsg_arr[] = 'You must enter your employee_number';
	$errflag = true;
}


if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}
// query
$sql = "INSERT INTO user (case_number,date_of_commence,date_of_conclusion,suspect_number) VALUES (:a,:b,:c,:d,:e,:f,:g)";
$q = $conn->prepare($sql);
$q->execute(array(':a'=>$first_name,':b'=>$surname,':c'=>$last_name,':d'=>$username ,':e'=>$password,':f'=>$role,':g'=>$employee_number));
header("location: index.php");


?>