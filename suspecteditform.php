

<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM suspect WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<title>test</title>
<form action="suspectedit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
FIRST NAME<br>
<input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" /><br>
SURNAME<br>
<input type="text" name="surname" value="<?php echo $row['surname']; ?>" /><br>
LAST NAME<br>
<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" /><br>
 AGE<br>
<input type="text" name="age" value="<?php echo $row['age']; ?>" /><br>
 ADRRESS<br>
<input type="text" name="address" value="<?php echo $row['address']; ?>" /><br>
NATIONALITY<br>
<input type="text" name="nationality" value="<?php echo $row['nationality']; ?>" /><br>
 WITNESS NUMBER<br>
<input type="text" name="witness_number" value="<?php echo $row['witness_number']; ?>" /><br>


<input type="submit" value="Save" />
</form>
<?php
	}
?>
