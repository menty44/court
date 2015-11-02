

<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM user WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<title>test</title>
<form action="useredit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
FIRST NAME<br>
<input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" /><br>
SURNAME<br>
<input type="text" name="surname" value="<?php echo $row['surname']; ?>" /><br>
LAST NAME<br>
<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" /><br>
 USER NAME<br>
<input type="text" name="username" value="<?php echo $row['username']; ?>" /><br>
 PASSWORD<br>
<input type="text" name="password" value="<?php echo $row['password']; ?>" /><br>
ROLE<br>
<input type="text" name="role" value="<?php echo $row['role']; ?>" /><br>
 EMPLOYEE NUMBER<br>
<input type="text" name="employee_number" value="<?php echo $row['employee_number']; ?>" /><br>


<input type="submit" value="Save" />
</form>
<?php
	}
?>
