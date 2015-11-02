<style>
table { border-collapse: separate; background-color: #FFFFFF; border-spacing: 0; width: 50%; color: #666666; text-shadow: 0 1px 0 #FFFFFF; border: 1px solid #CCCCCC; box-shadow: 0; margin: 0 auto; }
table thead tr th { background: none repeat scroll 0 0 #EEEEEE; color: #222222; padding: 10px 14px; text-align: left; border-top: 0 none; font-size: 12px; }
table tbody tr td{
    background-color: #FFFFFF;
	font-size: 11px;
    text-align: left;
	padding: 10px 14px;
	border-top: 1px solid #DDDDDD;
}
#pagination {
	text-align: center;
	margin-top: 20px;
}
#pagination a {
	border: 1px solid #CCCCCC;
	padding: 5px 10px;
	font-family: arial;
	text-decoration: none;
	background: none repeat scroll 0 0 #EEEEEE;
	color: #222222;
}
#pagination a:hover {
	background-color: #FFFFFF;
}
a#active{
	background-color: #FFFFFF;
}
#sample thead tr th {
	font-size: 20px;
}
input {
	border: 1px solid #CCCCCC;
}
#secret {
	margin-top: 19px; width: 168px;
}
</style>

</style>
<?php
session_start();
?>

<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	echo '<ul style="padding:0; color:red;">';
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<li>',$msg,'</li>'; 
	}
	echo '</ul>';
	unset($_SESSION['ERRMSG_ARR']);
}
?>

<table cellspacing="0" cellpadding="2" id="sample" >
<thead>
	<tr>
		<th> Case Number </th>
		<th> Date Of Commence </th>
		<th> Date Of Conclusion </th>
		<th> Suspect Number  </th>
	</tr></br>
</thead>

<center><form action="casereg.php" method="POST" style="width: 50%; margin: 15px auto; height: 54px;" >
							<center>case_number</br></center>
                            <input type="text"  name="employee_number" value="" placeholder="  "></br>                                        
                            date_of_commence  </br>                 
                            <input  type="text"  name="national_id" value="" placeholder=" "></br>                                        
                        	date_of_conclusion			</br>	
                            <input  type="text"  name="first_name" value="" placeholder="  "> </br>                                       
							Suspect_number</br>
                            <input  type="text"  name="surname" value="" placeholder=" ">  </br>                                      
                        	                   
                        <input type="submit" style="width:230px; height:40px;" value="Save" id="secret" /></br></p></p>
                   </form></center>


<tbody>
	<?php
		include('connect.php');
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 6; 		
		$result = $db->prepare("SELECT * FROM kotcase ORDER BY id ASC LIMIT $start_from, 6");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<title>test</title>
	<tr class="record">
		<td><?php echo $row['case_number']; ?></td>
		<td><?php echo $row['date_of_commence']; ?></td>
		<td><?php echo $row['date_of_conclusion']; ?></td>
		<td><?php echo $row['suspect_number']; ?></td>
		
		<td><a href="caseeditform.php?id=<?php echo $row['id']; ?>"> edit </a> | <a href="casedelete.php?id=<?php echo $row['id']; ?>"> delete </a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM kotcase");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 6); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='case.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?></p>  
</table>