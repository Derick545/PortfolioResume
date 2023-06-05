<?php
session_start();
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="eng">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css"/>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Portfolio</title>
</head>
<body>
	<!--Section-->
	<section id="portfolio">
		<!--Navigation-->
		<nav>
			<!--Logo-->
			<a href="Login.php" class="logo">DK</a>
			<!--menu icon-->
		    <div class="toggle"></div>
			<!--Menu-->
			<ul class="menu">
				<!--Menu items-->
			   <li><a href="index.php" >Home</a></li>
			   <li><a href="about.php">About</a></li>
			   <li><a href="Portfolio.php" class="active">Portfolio</a></li>
			   <li><a href="Services.php">Resume</a></li>
			   <li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	<div class="port">
	<h1 >My Projects</h1>
	<div class="container">
	<div class="content content-1"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
	<i class='bx bx-world' style='color:whitesmoke'  ></i>
	<h2>Websites</h2>
	
	</div>
	<!--Creating modal-->
	<div id="id01" class="modal">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			 <!--heading-->
       		 <h1 class="m-heading">Websites</h1>
			<!-- Projects container-->
			<div class="m-p-container">
			<?php
					$Type = "Website";
					$query = "SELECT * FROM projects WHERE Type= '$Type'";
					$result = mysqli_query($con, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
						foreach($result as $row)
						{
						?>
						<!--first box-->
						
						<div class="m-box">
						<!--text information-->
						<a href="Info.php?id=<?= $row['UniqueId'];?>/" >
						<div class="text-overlay">
							<h1><?= $row['Title'] ?></h1>
							<p><?= $row['OS']?></p>
						</div>
						<img src="Admin/uploads/<?php echo $row['Logo']?>" alt="project">
						</a>
						</div>
						
						
						<?php
						}
					}

					?>
			
			</div>	
		</div>
	<div class="content content-2" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
	<i class='bx bx-globe' style='color:whitesmoke'></i>
	<h2>Web Apps</h2>
	</div>
	<!--Creating modal 2-->
	<div id="id02" class="modal">
		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
			 <!--heading-->
       		 <h1 class="m-heading">Web Applications</h1>
			<!-- Projects container-->
			<div class="m-p-container">
				
					<?php
					$Type = "WebApplication";
					$query = "SELECT * FROM projects WHERE Type= '$Type'";
					$result = mysqli_query($con, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
						foreach($result as $row)
						{
						?>
						<!--first box-->
						
						<div class="m-box">
						<!--text information-->
						<a href="Info.php?id=<?= $row['UniqueId'];?>/" >
						<div class="text-overlay">
							<h1><?= $row['Title'] ?></h1>
							<p><?= $row['OS']?></p>
						</div>
						<img src="Admin/uploads/<?php echo $row['Logo']?>" alt="project">
						</a>
						</div>
						
						<?php
						}
					}

					?>
				
			
			</div>	
		</div>
	<div class="content content-3" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">
	<i class='bx bx-mobile' style='color:whitesmoke'></i>
	<h2>Mobile Apps</h2>
	
	</div>
	<!--Creating modal-->
	<div id="id03" class="modal">
		<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
			 <!--heading-->
       		 <h1 class="m-heading">Mobile Applications</h1>
			<!-- Projects container-->
			<div class="m-p-container">
			<?php
					$Type = "Mobile";
					$query = "SELECT * FROM projects WHERE Type= '$Type'";
					$result = mysqli_query($con, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
						foreach($result as $row)
						{
						?>
						<!--first box-->
						<div class="m-box">
						<!--text information-->
						<a href="Info.php?id=<?= $row['UniqueId'];?>/" >
						<div class="text-overlay">
							<h1><?= $row['Title'] ?></h1>
							<p><?= $row['OS']?></p>
						</div>
						<img src="Admin/uploads/<?php echo $row['Logo']?>" alt="project">
						</a>
						</div>
						<?php
						}
					}

					?>
			
			</div>	
		</div>
		<div class="content content-1"  onclick="document.getElementById('id04').style.display='block'" style="width:auto;">
		<i class='bx bx-desktop'  style='color:whitesmoke'  ></i>
		<h2>Desktop Apps</h2>
	
		</div>
		<div id="id04" class="modal">
		<span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
			 <!--heading-->
       		 <h1 class="m-heading">Desktop Applications</h1>
			<!-- Projects container-->
			<div class="m-p-container">
			<?php
					$Type = "Desktop";
					$query = "SELECT * FROM projects WHERE Type= '$Type'";
					$result = mysqli_query($con, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
						foreach($result as $row)
						{
						?>
						<!--first box-->						
						<div class="m-box">
						<!--text information-->
						<a href="Info.php?id=<?= $row['UniqueId'];?>/" >
						<div class="text-overlay">
							<h1><?= $row['Title'] ?></h1>
							<p><?= $row['OS']?></p>
						</div>
						<img src="Admin/uploads/<?php echo $row['Logo']?>" alt="project">
						</a>
						</div>						
						<?php
						}
					}

					?>
			
			</div>	
	</div>
	</div>
	<div class="services">
	<h2 class="s-head">My Services</h2>
	
	<!--Services containe-->
	<div class="s-container">
		<!--container 1-->
		<div class="code-box">
			<!--Service image-->
		 <div class="s-image">
			<!-- prog as in type-->
			<div class="prog">Back End</div>
			<!--back end image-->
			<img src="/image/back-end.png" alt="back-end">
		 </div>
		 <!-- code text -->
		 <div class="code-text">
			<a href="#"> The Following are the programming langueges I'm fluent in C#, PHP, JAVA, JAVASCRIPT</a>
		 </div>
		</div>
		<div class="code-box">
			<!--Service image-->
		 <div class="s-image">
			<!-- prog as in type-->
			<div class="prog">Front End</div>
			<!--back end image-->
			<img src="/image/front.png" alt="back-end">
		 </div>
		 <!-- code text -->
		 <div class="code-text">
			<a href="#"> The Following are the programming langueges I'm fluent in HTML5, CSS6, JAVASCRIPT, XML</a>
		 </div>
		</div>
		<div class="code-box">
			<!--Service image-->
		 <div class="s-image">
			<!-- prog as in type-->
			<div class="prog">Database</div>
			<!--back end image-->
			<img src="/image/sql.png" alt="back-end">
		 </div>
		 <!-- code text -->
		 <div class="code-text">
			<a href="#"> The Following are the programming langueges I'm fluent in MySql, Sql, Firebase</a>
		 </div>
		</div>
	</div>
	</div>
	</section>
		<!--Jquery-->
	<script type="text/javascript" src="/js/Jquery.js"></script>
	<!--Changing bar icon to x-->
	<script type="text/javascript">
		$(document).ready(function() {
			$('.toggle').click(function() {
				$('.toggle').toggleClass('active')
				$('nav ul').toggleClass('active-menu')
			})
		})
	</script>
	<script src="script.js"></script>
</body>


</html>
