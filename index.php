

<html>

	<head>
		<title>Court System</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollzer.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-layers-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">Court System</h1>
							<p>beta version 1.0</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Judge</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-folder">Case</span></a></li>
								<li><a href="#contact" id="suspect-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Suspect</span></a></li>
								<li><a href="#witness" id="witness-link" class="skel-layers-ignoreHref"><span class="icon fa-binoculars">Witness</span></a></li>
								<li><a href="#user" id="users-link" class="skel-layers-ignoreHref"><span class="icon fa-user">User</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="https://twitter.com/menty44" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/fred.menty" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://github.com/menty44" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="fred.oluoch@ariftechnologies.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"> <strong>Court System</strong><br />
								app designed by <a href="http://ariftechnologies.com">arif Technologies</a>.</h2>
								
							</header>
							
							<footer>
								<!--<a href="#portfolio" class="button scrolly">Magna Aliquam</a>-->
							</footer>

						</div>
					</section>
					
				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">
					
							<header>
								<h2>Judge</h2>
							</header>
												
							<div class="row">
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
		<th> Employee Number </th>
		<th> National ID </th>
		<th> First Name </th>
		<th> Surname </th>
		<th> Last Name </th>
		<th> Date Of Birth </th>
		<th> Specialization </th>
		<th> Ruling </th>
		<th> Case Number  </th>
	</tr></br>
</thead>

<center><form action="reg.php" method="POST" style="width: 50%; margin: 15px auto; height: 54px;" >
							<center>employee_number</br></center>
                            <input type="text"  name="employee_number" value="" placeholder=" "></br>                                        
                            national_id  </br>                 
                            <input  type="text"  name="national_id" value="" placeholder=" "></br>                                        
                        	first_name			</br>	
                            <input  type="text"  name="first_name" value="" placeholder="  "> </br>                                       
							surname</br>
                            <input  type="text"  name="surname" value="" placeholder="">  </br>                                      
                        	last_name		</br>		
                            <input  type="text"  name="last_name" value="" placeholder="  "></br>                                        
							date_of_birth</br>
                            <input  type="text"  name="date_of_birth" value="" placeholder="  "> </br>                                       
							specialization</br>
                            <input  type="text"  name="specialization" value="" placeholder=" "> </br>                                       
							ruling</br>
                            <input type="text"  name="ruling" value="" placeholder=" "></br>                                        
							case_number</br>
                            <input  type="text"  name="case_number" value="" placeholder="  "> </br>                                       

                        
                        <input type="submit" style="width:230px; height:40px;" value="Save" id="secret" /></br></p></p>
                   </form></center>


<tbody>
	<?php
		include('connect.php');
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 6; 		
		$result = $db->prepare("SELECT * FROM judge ORDER BY id ASC LIMIT $start_from, 6 ");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<title>test</title>
	<tr class="record">
		<td><?php echo $row['employee_number']; ?></td>
		<td><?php echo $row['national_id']; ?></td>
		<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['surname']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		<td><?php echo $row['date_of_birth']; ?></td>
		<td><?php echo $row['specialization']; ?></td>
		<td><?php echo $row['ruling']; ?></td>
		<td><?php echo $row['case_number']; ?></td>
		<td><a href="editform.php?id=<?php echo $row['id']; ?>"> edit </a> | <a href="delete.php?id=<?php echo $row['id']; ?>"> delete </a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM judge");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 6); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='index.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?></p>  
</table>


						</div>
					</section>

				<!-- case -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>case</h2>
							</header>


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
				echo "<a href='index.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?></p>  
</table>

					</section>
			
				<!-- suspect -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>suspect</h2>
							</header>


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
		<th> First Name </th>
		<th> Surname </th>
		<th> Last Name </th>
		<th> Age </th>
		<th> Address </th>
		<th> Nationality </th>
		<th> Witness Number  </th>
	</tr></br>
</thead>

<center><form action="susreg.php" method="POST" style="width: 50%; margin: 15px auto; height: 54px;" >
							                                      
                        	first_name			</br>	
                            <input  type="text"  name="first_name" value="" placeholder=" "> </br>                                       
							surname</br>
                            <input  type="text"  name="surname" value="" placeholder="">  </br>                                      
                        	last_name		</br>		
                            <input  type="text"  name="last_name" value="" placeholder=" "></br>                                        
							age</br>
                            <input  type="text"  name="age" value="" placeholder="  "> </br>                                       
							address</br>
                            <input  type="text"  name="address" value="" placeholder=" "> </br>                                       
							nationality</br>
                            <input type="text"  name="nationality" value="" placeholder=""></br>                                        
							witness_number</br>
                            <input  type="text"  name="witness_number" value="" placeholder="  "> </br>                                       

                        
                        <input type="submit" style="width:230px; height:40px;" value="Save" id="secret" /></br></p></p>
                   </form></center>


<tbody>
	<?php
		include('connect.php');
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 6; 		
		$result = $db->prepare("SELECT * FROM suspect ");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<title>test</title>
	<tr class="record">
	
		<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['surname']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		<td><?php echo $row['age']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['nationality']; ?></td>
		<td><?php echo $row['witness_number']; ?></td>
		<td><a href="witnesseditform.php?id=<?php echo $row['id']; ?>"> edit </a> | <a href="witnessdelete.php?id=<?php echo $row['id']; ?>"> delete </a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM witness");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 6); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='index.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?></p>  
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM witness");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 6); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='index.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?>

						</div>
					</section>
			
			</div>
			
			
			
			<!--freddy hack-->
			
			<!-- witness -->
			<div id="main">
					<section id="witness" class="five">
						<div class="container">

							<header>
								<h2>Witness</h2>
							</header>


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
		<th> Witness Number </th>
		<th> First Name </th>
		<th> Surname </th>
		<th> Last Name </th>
		<th> Address </th>
		<th> Nationality </th>
		<th> national_id </th>
		<th>  Suspect_number  </th>
	</tr></br>
</thead>

<center><form action="reg.php" method="POST" style="width: 50%; margin: 15px auto; height: 54px;" >
							witness_number</br>
                            <input type="text"  name="witness_number" value="" placeholder=" "></br>                                        
                            first_name			</br>	
                            <input  type="text"  name="first_name" value="" placeholder=" "> </br>                                       
							surname</br>
                            <input  type="text"  name="surname" value="" placeholder=" ">  </br>                                      
                        	last_name		</br>		
                            <input  type="text"  name="last_name" value="" placeholder="  "></br>                                        
							address</br>
                            <input  type="text"  name="address" value="" placeholder="  "> </br>                                       
							nationality</br>
                            <input  type="text"  name="nationality" value="" placeholder=" "> </br>                                       
							national_id</br>
                            <input type="text"  name="national_id" value="" placeholder=""></br>                                        
							suspect_number</br>
                            <input  type="text"  name="suspect_number" value="" placeholder="  "> </br>                                       

                        
                        <input type="submit" style="width:230px; height:40px;" value="Save" id="secret" /></br></p></p>
                   </form></center>


<tbody>
	<?php
		include('connect.php');
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 6; 		
		$result = $db->prepare("SELECT * FROM witness ");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<title>test</title>
	<tr class="record">
		<td><?php echo $row['witness_number']; ?></td>
		<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['surname']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['nationality']; ?></td>
		<td><?php echo $row['national_id']; ?></td>
		<td><?php echo $row['suspect_number']; ?></td>
		<td><a href="witeditform.php?id=<?php echo $row['id']; ?>"> edit </a> | <a href="witdelete.php?id=<?php echo $row['id']; ?>"> delete </a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM witness");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 6); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='index.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?></p>  
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM witness");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 6); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='index.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?>

						</div>
					</section></div>
			
				<!-- user -->
				<div id="main">
					<section id="user" class="six">
						<div class="container">

							<header>
								<h2>user</h2>
							</header>


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
		<th> First Name </th>
		<th> Surname </th>
		<th> Last Name </th>
		<th> User Name </th>
		<th> Password </th>
		<th> Role </th>
		<th> Employee Number  </th>
	</tr></br>
</thead>

<center><form action="userreg.php" method="POST" style="width: 50%; margin: 15px auto; height: 54px;" >
							                                      
                        	first_name			</br>	
                            <input  type="text"  name="first_name" value="" placeholder=" "> </br>                                       
							surname</br>
                            <input  type="text"  name="surname" value="" placeholder="">  </br>                                      
                        	last_name		</br>		
                            <input  type="text"  name="last_name" value="" placeholder=" "></br>                                        
							user_name</br>
                            <input  type="text"  name="user_name" value="" placeholder="  "> </br>                                       
							password</br>
                            <input  type="text"  name="password" value="" placeholder=" "> </br>                                       
							role</br>
                            <input type="text"  name="role" value="" placeholder=""></br>                                        
							employee_number</br>
                            <input  type="text"  name="employee_number" value="" placeholder="  "> </br>                                       

                        
                        <input type="submit" style="width:230px; height:40px;" value="Save" id="secret" /></br></p></p>
                   </form></center>


<tbody>
	<?php
		include('connect.php');
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 6; 		
		$result = $db->prepare("SELECT * FROM user ");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<title>test</title>
	<tr class="record">
	
		<td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['surname']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
		<td><?php echo $row['username']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><?php echo $row['role']; ?></td>
		<td><?php echo $row['employee_number']; ?></td>
		<td><a href="usereditform.php?id=<?php echo $row['id']; ?>"> edit </a> | <a href="userdelete.php?id=<?php echo $row['id']; ?>"> delete </a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM user");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 6); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='index.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?></p>  
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM user");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 6); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='index.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?>

						</div>
					</section>
			
			</div></div >

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://arifTechnologies.com">arifTechnologies</a></li>
					</ul>
				
			</div>

	</body>
</html>