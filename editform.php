<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM judge WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
employee_number<br>
<input type="text" name="employee_number" value="<?php echo $row['employee_number']; ?>" /><br>
national_id<br>
<input type="text" name="national_id" value="<?php echo $row['national_id']; ?>" /><br>
first_name<br>
<input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" /><br>
surname<br>
<input type="text" name="surname" value="<?php echo $row['surname']; ?>" /><br>
Last Name<br>
<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" /><br>
Age<br>
<input type="text" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" /><br>
First Name<br>
<input type="text" name="specialization" value="<?php echo $row['specialization']; ?>" /><br>
Last Name<br>
<input type="text" name="ruling" value="<?php echo $row['ruling']; ?>" /><br>
Age<br>
<input type="text" name="case_number" value="<?php echo $row['case_number']; ?>" /><br>
<input type="submit" value="Save" />
</form>
<?php
	}
?>