<?php

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css"/>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Information</title>
    </head>
    <body>
        <!-- section to contain all information-->
        <section class="app_info">
            <!--PHP CODE-->
            <?php
            if(isset($_GET['id']))
            {
                $project_id = mysqli_real_escape_string($con, $_GET['id']);
                //query t get information from database
                $query = "SELECT * FROM projects WHERE UniqueId= '$project_id'";
                $result = mysqli_query($con, $query);

                if(mysqli_num_rows($result) > 0)
                {
                    $row = mysqli_fetch_array($result);
                    ?>
                      <!--first container to hold logo,name and link or download button-->
                <div class="logo_container">
                <!-- container to hold logo image-->
                <div class="logo">
                    <img src="Admin/uploads/<?= $row['Logo']?>" alt="logo"/>
                </div>
                <!-- container to hold details-->
                <div class="details">
                    <ul>
                        <li class="info_title"><?= $row['Title']?></li>
                        <li class="design">Designed for: <?= $row['OS']?></li>
                        <?php
                         if($row['Link'] == null)
                         {
                            ?>
                               
                            <a download="<?= $row['MyApp']?>" href="Admin/applications/<?= $row['MyApp']?>" class="d_btn">Download<i class='bx bxs-download'></i><a>
                        <?php
                        }

                        elseif($row['MyApp'] == null)
                        {
                            ?>
                            <a  href="Admin/applications/<?= $row['Link']?>" class="d_btn">Demo<a>
                            <?php 
                        }
                         ?>
                        
                    </ul>
                </div>
            </div>
            <hr class="line">
            <!-- container to hold information such as screen shots, description, features and a video-->
            <div class="information_container">
                <!-- card for information-->
                <div class="total_information">
                <div class="info_card1">
                <div class="heading">
                <h1>Information</h1>
                <h3>About the app</h3>
                <p><?=$row['Description']?></p>
                </div>
                </div>
                <div class="features">
                  <h1>Features</h1>
                    <?php 
                     $sql = "SELECT * FROM features WHERE P_Id = '$project_id'";
                     $sql_result = mysqli_query($con, $sql);
                     if(mysqli_num_rows($sql_result) > 0)
                     {
                        foreach($sql_result as $feature_row)
                        {
                        ?>
                        
                        <ul>
                            <li><?= $feature_row['Feature'] ?></li>
                        </ul>
                        <?php
                        }
                     }
                  ?>
                  </div>
                    </div>  
                </div>
                 
                <!-- card to hold screenshots and videos -->
                <div class="sv_card">

               
                <div class="features">
                    <h1>Description</h1>
                    <ul>
                        <li>IDE: <label><?= $row['IDE']?></label></li>
                        <li>Backend Language used: <label><?= $row['Language']?></label></li>
                        <li>Frontend Language used: <label><?= $row['FrontLanguage']?></label></li>
                        <li>Additional Languages: <label><?= $row['Additional'] ?></label></li>
                        <li>Operating System: <label><?= $row['OS'] ?></label></li>
                        <li>Type: <label><?= $row['Type'] ?></label></li>
                        <li>Github: <label><a href="<?= $row['GIT']?>"><?= $row['GIT']?></a></label></li>
                    </ul>
                  </div>
                    
                  <div class="screenshot">
                    <h1>Screenshots</h1>
                    <ul class="picture">
                           <!--PHP CODE-->  
                        <?php
                         $id= mysqli_real_escape_string($con, $_GET['id']);
                         $shotquery = "SELECT * FROM screenshots WHERE projectId = '$project_id'";
                         $shot_result = mysqli_query($con, $shotquery);

                         if(mysqli_num_rows($shot_result) > 0)
                         {
                           
                            foreach($shot_result as $shot_row)
                            {
                                ?>
                                      <li class="image">
                                      <img src="Admin/uploads/<?php echo $shot_row['picture']?>">
                                      </li>  
                                <?php
                            }
                         }
                      ?>
                       
                                               
                     </ul>
                    </div>

                </div>
                <div class="video_card">
                    <h1>Video</h1>
                <div class="video">
                        <video  controls>
                            <source src="Admin/videos/<?= $row['Video']?>" >
                        </video>
                </div>
                </div>
            </div>
            <?Php
                }
                
            }
            ?>
        </section>
  </body>
</html>