<?php
// configuration
include('connect.php');

// new data
$case_number = $_POST['case_number'];
$date_of_commence = $_POST['date_of_commence'];
$date_of_conclusion = $_POST['date_of_conclusion'];
$suspect_number = $_POST['suspect_number'];
$id = $_POST['memids'];


// query
$sql = "UPDATE kotcase 
        SET case_number=?, date_of_commence=?, date_of_conclusion=? ,suspect_number=? 
        where id=?" ;
$q = $db->prepare($sql);
$q->execute(array($case_number,$date_of_commence,$date_of_conclusion,$suspect_number,$id));
header("location: index.php");

?>