

<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM kotcase WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<title>test</title>
<form action="caseedit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
CASE NUMBER<br>
<input type="text" name="case_number" value="<?php echo $row['case_number']; ?>" /><br>
DATE OF COMMENCE<br>
<input type="text" name="date_of_commence" value="<?php echo $row['date_of_commence']; ?>" /><br>
DATE OF CONCLUSION<br>
<input type="text" name="date_of_conclusion" value="<?php echo $row['date_of_conclusion']; ?>" /><br>
SUSPECT NUMBER<br>
<input type="text" name="suspect_number" value="<?php echo $row['suspect_number']; ?>" /><br>

<input type="submit" value="Save" />
</form>
<?php
	}
?>
