<?php
// configuration
include('connect.php');

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
$id = $_POST['memids'];
// query
$sql = "UPDATE judge 
        SET employee_number=?, national_id=?, first_name=?,surname=?, last_name=?, date_of_birth=?,specialization=?, ruling=?, case_number=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($employee_number,$national_id,$first_name,$surname,$last_name,$date_of_birth,$specialization,$ruling,$case_number,$id));
header("location: index.php");


// new data
$case_number = $_POST['case_number'];
$date_of_commence = $_POST['date_of_commence'];
$date_of_conclusion = $_POST['date_of_conclusion'];
$suspect_number = $_POST['suspect_number'];
$id = $_POST['memids'];


// query
$sql = "UPDATE kotcase 
        SET case_number=?, date_of_commence=?, date_of_conclusion=? ,suspect_number=?,
		where id=?";
$q = $db->prepare($sql);
$q->execute(array($case_number,$date_of_commence,$date_of_conclusion,$suspect_number,$id));
header("location: index.php");

?>