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

$case_number = $_POST['case_number'];
$date_of_commence = $_POST['date_of_commence'];
$date_of_conclusion = $_POST['date_of_conclusion'];
$suspect_number = $_POST['suspect_number'];


if($case_number == '') {
	$errmsg_arr[] = 'You must enter your case_number';
	$errflag = true;
}
if($date_of_commence == '') {
	$errmsg_arr[] = 'You must enter your date_of_commence';
	$errflag = true;
}
if($date_of_conclusion == '') {
	$errmsg_arr[] = 'You must enter your date_of_conclusion';
	$errflag = true;
}
if($suspect_number == '') {
	$errmsg_arr[] = 'You must enter your suspect_number';
	$errflag = true;
}

if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	//footer("location: index.php");
	exit();
}
// query
$sql = "INSERT INTO kotcase (case_number,date_of_commence,date_of_conclusion,suspect_number) VALUES (:a,:b,:c,:d)";
$q = $conn->prepare($sql);
$q->execute(array(':a'=>$case_number,':b'=>$date_of_commence,':c'=>$date_of_conclusion,':d'=>$suspect_number));
header("location: index.php");


?>