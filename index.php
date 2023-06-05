<?php
 include 'db.php';
?>

<!DOCTYPE html>
<html lang="eng">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="/js/navigation.js"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css"/>
	<!--title icon-->
	<!-- link rel="shortcut icon" href="images/icon.png"/> -->
	<title>Home</title>
</head>
<body onload="initClock()">
	<!-- section-->
	<section id="sect">
		<!--Navigation-->
		<nav>
			<!--Logo-->
			<a href="Admin/Login.php" class="logo">DK</a>
			<!--menu icon-->
			<div class="toggle"></div>
			<!--Menu-->
			<ul class="menu">
				<!--Menu items-->
			   <li><a href="index.php" class="active">Home</a></li>
			   <li><a href="about.php">About</a></li>
			   <li><a href="Portfolio.php">Portfolio</a></li>
			   <li><a href="Services.php">Resume</a></li>
			   <li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>

		<!-- div for holding name and greeting-->
		<div class="name">
			<label class="greeting">Hello</label>
			<!--my name and surname-->
			<h1>I'm Derick Kwamba</h1>
			<!--information-->
			<p class="story"> I am outgoing, dedicated, and open-minded, I believe that in life when 
				you want something you can get it, but it doesn't come on its own you have to put in work, and through that, you will something new 
   			    and because of that, I consider myself a 'forever student', which makes me of the greatest programmers you will come across.</p>
				<!--creating button to redirect to Portfolio-->
			<div class="index-btn">
			<a href="Portfolio.php" class="btn" onclick="">PORTFOLIO</button>
				<?php
				include 'db.php';
				$query = "SELECT * FROM cv";
				$result = mysqli_query($con, $query);

				if(mysqli_num_rows($result) > 0)
				{
					foreach($result as $row)
					{
						?>
						<a download="<?= $row['Cv']?>" href="Admin/uploads/<?= $row['Cv']?>" class="btn"><i class='bx bx-download' name="download"></i>DOWNLOAD CV</a>
						<?php
					}
				}
				?>

				
			
			</div>

			
		</div>
		<!--social links such as facebook-->
		<ul class="socials">
   			<li><a href="https://www.facebook.com/deza.derrick.9/"><i class='bx bxl-facebook-circle'></i></a></li>
			<li><a href="https://www.instagram.com/deza_362/"><i class='bx bxl-instagram'></i></a></li>
			<li><a href=mailto:derickKwamba.com?subject="HTML link"><i class='bx bxl-gmail'></i></a></li>
			<li><a href="https://github.com/Derick545"><i class='bx bxl-github'></i></i></a></li>
			<li><a href="https://www.linkedin.com/in/derick-kwamba-945a15221/"><i class='bx bxl-linkedin'></i></a></li>
		</ul>
	</section>
	
</body>

</html>
