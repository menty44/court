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

$employee_number = $_POST['employee_number'];
$national_id = $_POST['national_id'];
$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$specialization = $_POST['specialization'];
$ruling = $_POST['ruling'];
$case_number = $_POST['case_number'];


if($employee_number == '') {
	$errmsg_arr[] = 'You must enter your employee_number';
	$errflag = true;
}
if($national_id == '') {
	$errmsg_arr[] = 'You must enter your national_id';
	$errflag = true;
}
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
if($date_of_birth == '') {
	$errmsg_arr[] = 'You must enter your date_of_birth';
	$errflag = true;
}
if($specialization== '') {
	$errmsg_arr[] = 'You must enter your specialization';
	$errflag = true;
}
if($ruling == '') {
	$errmsg_arr[] = 'You must enter your ruling';
	$errflag = true;
}
if($case_number == '') {
	$errmsg_arr[] = 'You must enter your case_number';
	$errflag = true;
}



if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}
// query
$sql = "INSERT INTO judge (employee_number,national_id,first_name,surname,last_name,date_of_birth,specialization,ruling,case_number) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i)";
$q = $conn->prepare($sql);
$q->execute(array(':a'=>$employee_number,':b'=>$national_id,':c'=>$first_name,':d'=>$surname,':e'=>$last_name,':f'=>$date_of_birth,':g'=>$specialization,':h'=>$ruling,':i'=>$case_number));
header("location: index.php");


?>