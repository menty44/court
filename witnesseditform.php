

<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM suspect WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<title>test</title>
<form action="witnessedit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
 WITNESS NUMBER<br>
<input type="text" name="witness_number" value="<?php echo $row['witness_number']; ?>" /><br>
FIRST NAME<br>
<input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" /><br>
SURNAME<br>
<input type="text" name="surname" value="<?php echo $row['surname']; ?>" /><br>
LAST NAME<br>
<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" /><br>
 ADRRESS<br>
<input type="text" name="address" value="<?php echo $row['address']; ?>" /><br>
NATIONALITY<br>
<input type="text" name="nationality" value="<?php echo $row['nationality']; ?>" /><br>
 NATIONAL ID<br>
<input type="text" name="national_id" value="<?php echo $row['national_id']; ?>" /><br>
 SUSPECT NUMBER<br>
<input type="text" name="suspect_number" value="<?php echo $row['suspect_number']; ?>" /><br>



<input type="submit" value="Save" />
</form>
<?php
	}
?>
