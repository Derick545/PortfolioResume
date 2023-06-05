<?php
//Include database
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Device', 'Total Percentage'],
          <?php
          include 'db.php';
          //Declarations
          $mobile = "Mobile";
          $website = "Website";
          $webApp = "WebApplication";
          $desktop = "desktop";

          $mobile_query = "SELECT * FROM projects WHERE Type = '$mobile'";
          $mobile_result = mysqli_query($con, $mobile_query);
          $mobile_total = mysqli_num_rows($mobile_result);
          $website_query = "SELECT * FROM projects WHERE Type = '$website'";
          $website_result = mysqli_query($con, $website_query);
          $website_total = mysqli_num_rows($website_result);
          $webApp_query = "SELECT * FROM projects WHERE Type = '$webApp'";
          $webApp_result = mysqli_query($con, $webApp_query);
          $webApp_total = mysqli_num_rows($webApp_result);
          $desktop_query = "SELECT * FROM projects WHERE Type = '$desktop'";
          $desktop_result = mysqli_query($con, $desktop_query);
          $desktop_total = mysqli_num_rows($desktop_result);

          echo "['Mobile Application',     ".$mobile_total."],";
          echo "['Website',     ".$website_total."],";
          echo "['Web Application',     ".$webApp_total."],";
          echo "['Desktop Application',     ".$desktop_total."]";
          ?>
        ]);

        var options = {
          title: 'Project Devices',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Language', 'Total'],


          <?php
          include 'db.php';
          //Declarations
          $cSharp = "c#";
          $php = "php";
          $Java = "java";
          $Angular = "Angular";

          $cSharp_query = "SELECT * FROM projects WHERE Language = '$cSharp'";
          $cSharp_result = mysqli_query($con, $cSharp_query);
          $cSharp_total = mysqli_num_rows($cSharp_result);
          $php_query = "SELECT * FROM projects WHERE Language = '$php'";
          $php_result = mysqli_query($con, $php_query);
          $php_total = mysqli_num_rows($php_result);
          $Java_query = "SELECT * FROM projects WHERE Language = '$Java'";
          $Java_result = mysqli_query($con, $Java_query);
          $Java_total = mysqli_num_rows($Java_result);
          $Angular_query = "SELECT * FROM projects WHERE Language = '$Angular'";
          $Angular_result = mysqli_query($con, $Angular_query);
          $Angular_total = mysqli_num_rows($Angular_result);

          echo "['C Sharp',     ".$cSharp_total."],";
          echo "['PHP',     ".$php_total."],";
          echo "['JAVA',     ".$Java_total."],";
          echo "['Angular',     ".$Angular_total."]";
          ?>
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Language',
            subtitle: 'popularity by number' },
          axes: {
            x: {
              0: { side: 'top', label: 'Backend Language'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
 
	<title>Home</title>
</head>
<body>
<section id="dashboard">
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
			<div class="top-information">
				<!--PHP CODE-->
				<?PHP
       $username = $_SESSION["username"];
				$select = "Select * from users where Username = '$username'";
        $result = mysqli_query($con, $select);

        if(mysqli_num_rows($result) > 0)
        {
          foreach($result as $row)
          {
            ?>
        <div class="dash-head">
				<h1>Welcome </h1><t><h2><?=$row['Username']?></h2>
        </div>
				<div class="sideBar">
           <img src="uploads/<?php echo $row['Picture']?>">>
				   <label><?=$row['Name']?> <?=$row['Surname']?></label>
            <?php
          }
        }
        ?>
           <a href="logout.php" class="button"><i class='bx bx-log-out-circle' ></i>Logout</a>
				</div>
        
                
			</div>
			<div class="holder">
				<div class="graphOne">
				<div id="top_x_div" style="width: 100%; height: 100%;"></div>
				</div>
				<div class="graphTwo">
				<div id="piechart_3d" style="width: 100%; height: 100%;"></div>
				</div>
			</div>	
			<div class="holderTwo">
			<!--Place tabel here-->
      <h1>Projects</h1>
      <div class="table">
		<div class="table-header">
			<div class="header__item"><a id="name" class="filter__link" href="#">Id</a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Logo</a></div>
			<div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Name</a></div>
			<div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">IDE</a></div>
			<div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Type</a></div>
      <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Add Items</a></div>
      <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Action</a></div>
		</div>
		<div class="table-content">	
			
        <!--Php code-->
        <?php
          $query = "SELECT * FROM projects";
          $result = mysqli_query($con, $query);

          if(mysqli_num_rows($result) > 0)
          {
              foreach($result as $row)
              {
                ?>
                <div class="table-row">	
                <div class="table-data"><?= $row['id'] ?></div>
                <div class="table-data"><img src="uploads/<?php echo $row['Logo']?>"></div>
                <div class="table-data"><?= $row['Title']?></div>
                <div class="table-data"><?= $row['IDE']?></div>
                <div class="table-data"><?= $row['Type']?></div>
                <div class="table-data">
                  <div class="add">
                  <a href="#" onclick="getElementById('m-feature').style.display='block'" id="<?=$row['UniqueId']?>" class="projectv-btn"><i class='bx bx-show'>Add Features</i> </a>
                 <!--Creating Modal-->
              <div id="m-feature" class="modal">
                          <span onclick="document.getElementById('m-feature').style.display='none'" class="close" title="Close Modal">&times;</span>
                          <h2>Add Feature</h2>
                          <div class="my-form" id="addFeat"> 
                          <form  method="POST" class="add-feature" id="in_feature">
                            <div class="pname">
                            <input type="text" id="projectName" >
                            </div>
                            <div class="error-text">This is an error message</div>
                            <label class="f-label" id="lav">Feature</label>
                            <div class="field input">                                 
                            <input type="text" name="feature" id="feature" placeholder="Enter Feature" required> 
                            </div>
                            <input type="hidden" name="project_id" id="project_id" />  
                            <input type="submit" name="addFeature" class="f-button" id="fButton" Value="ADD">
                          </form>
                          </div>
                  </div>
                  <a href="#" onclick="getElementById('s-feature').style.display='block'" id="<?=$row['UniqueId']?>" class="projects-btn"><i class='bx bx-show'>Add Screenshots</i> </a>
                  <div id="s-feature" class="modal">
                          <span onclick="document.getElementById('s-feature').style.display='none'" class="close" title="Close Modal">&times;</span>
                          <h2>Add Screenshot</h2>
                          <div class="my-form" id="addFeat"> 
                          <form action="insert_screenshot.php" enctype="multipart/form-data"  method="POST"  class="add-feature" id="sreenshot_form">
                            <div class="pname">
                            <input type="text" id="proj" >
                            </div>
                            <div class="error-text">This is an error message</div>
                            <label class="f-label" id="lav">Screenshot</label>
                            <div class="field input">                                 
                            <input type="file" name="screenshot" id="screenshot" required> 
                            </div>
                            <input type="text" name="proj_id" id="proj_id" hidden />  
                            <input type="submit" name="addShot" class="f-button" id="addShot" Value="ADD">
                          </form>
                          </div>
                  </div>
                
                </div>
                </div>
                <div class="table-data">
                <a href="Info.php?id=<?= $row['UniqueId'];?>/" class="project-view-btn"><i class='bx bx-show'>View</i> </a>
                <a  href="Dashboard.php?delete=<?=$row['UniqueId']?>" class="projects-btn"><i class='bx bxs-trash-alt'>Delete</i> </a>
              </div>
                </div>
                <?php
                
            
              }
          }
        ?>
			
		
		</div>	
	</div>
</div>
			</div>
		</div>

</section>
<?php

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $delete =  "DELETE FROM projects WHERE UniqueId = '$id'";
  $result = mysqli_query($con, $delete);

  if($result)
  {
    echo "Deleted Successfully";
  }
  else{
    echo "Failed";
  }
}

?>
 
<script src="javascript/navigation.js"></script>
<script src="javascript/modal.js"></script>
<script type="text/javascript">
		 $(document).on('click', '.projectv-btn', function(){  
           var project_id = $(this).attr("id");  
           $.ajax({  
                url:"get.php",  
                method:"POST",  
                data:{project_id:project_id},  
                dataType:"json",  
                success:function(data){  
                     $('#project_id').val(data.UniqueId);
                     $('#projectName').val(data.Title);  
                }  
           }); 
      }); 
      $('#in_feature').on("submit", function(event){  
           event.preventDefault();  
           $.ajax({  
                     url:"insert_feature.php",  
                     method:"POST",  
                     data:$('#in_feature').serialize(),  
                     beforeSend:function(){  
                          $('#fButton').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#in_feature')[0].reset(); 
                          $('#fButton').val("ADD");  
                     }  
                });  
              });
          
	</script>
  <script type="text/javascript">
		 $(document).on('click', '.projects-btn', function(){  
           var project_id = $(this).attr("id");  
           $.ajax({  
                url:"get.php",  
                method:"POST",  
                data:{project_id:project_id},  
                dataType:"json",  
                success:function(data){  
                     $('#proj_id').val(data.UniqueId);
                     $('#proj').val(data.Title);  
                }  
           }); 
      }); 
      $('#sreenshot_form').on("submit", function(event){  
           
           $.ajax({  
                     url:"insert_screenshot.php",  
                     method:"POST",  
                     data:$('#sreenshot_form').serialize(),  
                     beforeSend:function(){  
                          $('#addShot').val("Inserting");  
                          
                     },  
                     success:function(data){  
                          $('#sreenshot_form')[0].reset(); 
                          $('#addShot').val("ADD");  
                     }  
                });  
              });
          
	</script>
</body>

</html> 

