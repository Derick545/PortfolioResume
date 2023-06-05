<?php
include 'db.php';
include("auth_session.php");
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="/css/adminStyle.css"/>
	<script src="script.js"></script>
	<title>Home</title>
</head>
<body>
<section id="projects">
<nav >
			<!--Logo-->
			<label class="logo">DK<label class="dash">Dashboard</label></label>

			
			<!--menu icon-->
			<i class='bx bx-menu btn-menu' ></i>
			<!--Menu-->
			
			<ul class="menu">
				<!--Menu items-->
		
				
			</li>
			<li><!--Title menu--><h3 class="m-title">Menu</h3></li>
			   <li><a href="/Admin/Dashboard.php" class="active"><i class='bx bxs-dashboard'></i><span class="nav-item">Home</span></a></li>
   		       <li><a href="Upload.php" class="active"><i class='bx bx-upload'></i><span class="nav-item">Upload</span></a></li>
			   <li><a href="Projects.php" class="active"><i class='bx bx-briefcase'></i><span class="nav-item">Projects</span></a></li>
			</ul>
		</nav>

		<div class="wrapper">
            <div class="project-container">
                <h1>Websites</h1>

                <div class="table">
                    <div class="table-header">
                        <div  class="header__item"><a id="name" class="filter__link" href="#">ID</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Logo</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">IDE</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">GIT</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Type</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Operating System</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Backend Language</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Front-End Languege</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Additional Languages</a></div>          
                </div>    
                <div class="table-content">	
                        <?php
                            $type = "Website";
                            $query = "SELECT * FROM projects WHERE Type = '$type'";
                            $result = mysqli_query($con, $query);

                            if(mysqli_num_rows($result) > 0)
                            { 
                                foreach($result as $row)
                                {
                                    ?>
                                    <div class="table-row">
                                     <div class="table-data" data-label="id"><?=$row['id']?></div>
                                    <div class="table-data" data-label="logo"><img class="tbl-img" src="uploads/<?php echo $row['Logo']?>"></div>
                                    <div class="table-data" data-label="name"><?=$row['Title']?></div>
                                    <div class="table-data" data-label="IDE"><?=$row['IDE']?></div>
                                    <div class="table-data" data-label="GIT"><a href="<?=$row['GIT']?>"><?=$row['GIT']?></a></div>
                                    <div class="table-data" data-label="Type"><?=$row['Type']?></div>
                                    <div class="table-data" data-label="OS"><?=$row['OS']?></div>
                                    <div class="table-data" data-label="BK"><?=$row['Language']?></div>
                                    <div class="table-data" data-label="FL"><?=$row['FrontLanguage']?></div>
                                    <div class="table-data" data-label="AL"><?=$row['Additional']?></div>
                                    </div>
                                    <?php
                                }
                            }
                           ?>
                        </div> 
                   
</div>

                <h1>Web Application</h1>

                <div class="table">
                    <div class="table-header">
                        <div  class="header__item"><a id="name" class="filter__link" href="#">ID</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Logo</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">IDE</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">GIT</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Type</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Operating System</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Backend Language</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Front-End Languege</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Additional Languages</a></div>          
                </div>    
                        
                <div class="table-content">	
                        <?php
                            $type = "WebApplication";
                            $query = "SELECT * FROM projects WHERE Type = '$type'";
                            $result = mysqli_query($con, $query);

                            if(mysqli_num_rows($result) > 0)
                            { 
                                foreach($result as $row)
                                {
                                    ?>
                                    <div class="table-row">
                                     <div class="table-data" data-label="id"><?=$row['id']?></div>
                                    <div class="table-data" data-label="logo"><img class="tbl-img" src="uploads/<?php echo $row['Logo']?>"></div>
                                    <div class="table-data" data-label="name"><?=$row['Title']?></div>
                                    <div class="table-data" data-label="IDE"><?=$row['IDE']?></div>
                                    <div class="table-data" data-label="GIT"><a href="<?=$row['GIT']?>"><?=$row['GIT']?></a></div>
                                    <div class="table-data" data-label="Type"><?=$row['Type']?></div>
                                    <div class="table-data" data-label="OS"><?=$row['OS']?></div>
                                    <div class="table-data" data-label="BK"><?=$row['Language']?></div>
                                    <div class="table-data" data-label="FL"><?=$row['FrontLanguage']?></div>
                                    <div class="table-data" data-label="AL"><?=$row['Additional']?></div>
                                    </div>
                                    <?php
                                }
                            }
                           ?>
                        </div> 


            </div>

            <div class="project-container2">
            <h1>Mobile Application</h1>

            <div class="table">
                    <div class="table-header">
                        <div  class="header__item"><a id="name" class="filter__link" href="#">ID</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Logo</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">IDE</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">GIT</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Type</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Operating System</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Backend Language</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Front-End Languege</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Additional Languages</a></div>          
                </div>    
                <div class="table-content">	
                        <?php
                            $type = "Mobile";
                            $query = "SELECT * FROM projects WHERE Type = '$type'";
                            $result = mysqli_query($con, $query);

                            if(mysqli_num_rows($result) > 0)
                            { 
                                foreach($result as $row)
                                {
                                    ?>
                                    <div class="table-row">
                                     <div class="table-data" data-label="id"><?=$row['id']?></div>
                                    <div class="table-data" data-label="logo"><img class="tbl-img" src="uploads/<?php echo $row['Logo']?>"></div>
                                    <div class="table-data" data-label="name"><?=$row['Title']?></div>
                                    <div class="table-data" data-label="IDE"><?=$row['IDE']?></div>
                                    <div class="table-data" data-label="GIT"><a href="<?=$row['GIT']?>"><?=$row['GIT']?></a></div>
                                    <div class="table-data" data-label="Type"><?=$row['Type']?></div>
                                    <div class="table-data" data-label="OS"><?=$row['OS']?></div>
                                    <div class="table-data" data-label="BK"><?=$row['Language']?></div>
                                    <div class="table-data" data-label="FL"><?=$row['FrontLanguage']?></div>
                                    <div class="table-data" data-label="AL"><?=$row['Additional']?></div>
                                    </div>
                                    <?php
                                }
                            }
                           ?>
                        </div> 
            </div>

            <h1>Desktop Application</h1>

            <div class="table">
                    <div class="table-header">
                        <div  class="header__item"><a id="name" class="filter__link" href="#">ID</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Logo</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">IDE</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">GIT</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Type</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Operating System</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Backend Language</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Front-End Languege</a></div>
                        <div  class="header__item"><a id="name" class="filter__link" href="#">Additional Languages</a></div>          
                </div>    
                <div class="table-content">	
                        <?php
                            $type = "Desktop";
                            $query = "SELECT * FROM projects WHERE Type = '$type'";
                            $result = mysqli_query($con, $query);

                            if(mysqli_num_rows($result) > 0)
                            { 
                                foreach($result as $row)
                                {
                                    ?>
                                    <div class="table-row">
                                     <div class="table-data" data-label="id"><?=$row['id']?></div>
                                    <div class="table-data" data-label="logo"><img class="tbl-img" src="uploads/<?php echo $row['Logo']?>"></div>
                                    <div class="table-data" data-label="name"><?=$row['Title']?></div>
                                    <div class="table-data" data-label="IDE"><?=$row['IDE']?></div>
                                    <div class="table-data" data-label="GIT"><a href="<?=$row['GIT']?>"><?=$row['GIT']?></a></div>
                                    <div class="table-data" data-label="Type"><?=$row['Type']?></div>
                                    <div class="table-data" data-label="OS"><?=$row['OS']?></div>
                                    <div class="table-data" data-label="BK"><?=$row['Language']?></div>
                                    <div class="table-data" data-label="FL"><?=$row['FrontLanguage']?></div>
                                    <div class="table-data" data-label="AL"><?=$row['Additional']?></div>
                                    </div>
                                    <?php
                                }
                            }
                           ?>
                        </div> 
            </div>
		</div>

</section>

    <script>
		const btn_menu = document.querySelector(".btn-menu");
		const nav_g = document.querySelector('nav');

		btn_menu.addEventListener("click", function(){
			nav_g.classList.toggle("expand");
			changebtn();
		});

		function changebtn(){
			if(nav_g.classList.contains("expand")){
				btn_menu.classList.replace("bx-menu","bx-menu-alt-right")
			}
			else{
				btn_menu.classList.replace("bx-menu-alt-right","bx-menu")
			}
		}
	</script>
</body>

</html> 