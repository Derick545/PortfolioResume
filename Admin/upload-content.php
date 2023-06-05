<?php
   //including database
    include 'db.php';

		//Initialising variables
		$random_id = rand(time(), 100000000); //Creating random id for user 
        $name = mysqli_real_escape_string($con, $_POST['name']);
		$IDE = mysqli_real_escape_string($con, $_POST['IDE']) ;
		$GIT = mysqli_real_escape_string($con, $_POST['Git']) ;
		$ADDLANG = mysqli_real_escape_string($con, $_POST['add-lang']) ;
		$LANG = mysqli_real_escape_string($con, $_POST['Lang']) ;
		$FRONTLANG = mysqli_real_escape_string($con, $_POST['Front-Lang']);
		$OS = mysqli_real_escape_string($con, $_POST['OS']);
		$TYPE = mysqli_real_escape_string($con, $_POST['type']) ;
		$date = mysqli_real_escape_string($con, $_POST['date']) ;
		$link = mysqli_real_escape_string($con, $_POST['link']) ;
		$DESCRIPTION = mysqli_real_escape_string($con, $_POST['Description']) ;
		

		//Initialising variabels for logo
		$logo_name = $_FILES['logo']['name'];
        $logo_size = $_FILES['logo']['size'];
        $logo_tmp_name = $_FILES['logo']['tmp_name'];

		//if statement to determine logo size or image size
		if($logo_size > 1250000)
		{
			echo "Image file to large";
		}
		else{
			//Declaring Varibels
			$logo_ex = pathinfo($logo_name, PATHINFO_EXTENSION);
			$logo_ex_lc = strtolower($logo_ex);
			$allowed_exs = array("jpg", "jpeg", "png");

			if(in_array($logo_ex_lc, $allowed_exs)){
				$new_logo_name = uniqid("IMG-", true).'.'.$logo_ex_lc;
				$logo_upload_path = 'uploads/'.$new_logo_name;
				move_uploaded_file($logo_tmp_name, $logo_upload_path);
	
				//Declaring variables for video
				$vid_max_size = 525000000; //50mb
				$vid_name =  $_FILES['video']['name'];
				$vid_tmp_name = $_FILES['video']['tmp_name'];
				$vid_ex = pathinfo($vid_name, PATHINFO_EXTENSION);
				$vid_ex_lc = strtolower($vid_ex);
				$extensions_arr = array("mp4","avi","3gp","mov","mpeg");// Valid file extensions
		 
				// Check file size
				if(($_FILES['video']['size'] >= $vid_max_size) || ($_FILES["video"]["size"] == 0)){
					echo "Video file to large";
				}else
				{
				   if(in_array($vid_ex_lc,$extensions_arr)) //if statement to verify file
				   {
					$new_vid_name = uniqid("Vid-", true).'.'.$vid_ex_lc;
					$vid_upload_path = 'videos/'.$new_vid_name;
					move_uploaded_file($vid_tmp_name, $vid_upload_path);
					if($_FILES['app']['size'] > 100000000000)// file shouldn't be larger than 1gb
					{
						echo "app to large";
					}
					else
					{
			         	//Declaring variables for zip file
						 $app_max_size = 525000000000; //50mb
						 $app_name =  $_FILES['app']['name'];
						 $app_tmp_name = $_FILES['app']['tmp_name'];
						 $app_ex = pathinfo($app_name, PATHINFO_EXTENSION);
						 $app_ex_lc = strtolower($app_ex);
						 $extension_app_arr = array("zip","rar");// Valid file extensions
						if (in_array($app_ex_lc, $extension_app_arr)) {
							$new_app_name = uniqid("File-", true).'.'.$app_ex_lc;
							$app_upload_path = 'applications/'.$new_app_name;
							move_uploaded_file($app_tmp_name, $app_upload_path);
							//Writing query to insert information to database
							$query = "INSERT INTO projects(Title,UniqueId,IDE,GIT,Additional,Language,FrontLanguage,OS,Type,Description,Logo,Video,MyApp,Link,Date) values('$name','$random_id','$IDE','$GIT', '$ADDLANG', '$LANG', 
							'$FRONTLANG','$OS','$TYPE','$DESCRIPTION','$new_logo_name','$vid_name','$new_app_name','$link','$date')";

							$result = mysqli_query($con, $query);
							if($result)
                            {
							echo "Information Saved Successfully";
							}
							else{
							echo "Failed to save";
							}
							
						} else
                        {
					        $query = "INSERT INTO projects(Title,UniqueId,IDE,GIT,Additional,Language,FrontLanguage,OS,Type,Description,Logo,Video,Link,Date) values('$name','$random_id','$IDE','$GIT', '$ADDLANG', '$LANG', 
							'$FRONTLANG','$OS','$TYPE','$DESCRIPTION','$new_logo_name','$vid_name','$link','$date')";

							$result = mysqli_query($con, $query);
							if($result)
                            {
							echo "Information Saved Successfully";
							}
							else{							
							echo "Failed to save";
							}
						}
						 
					   }
				   }
				
				}
				
			}
			else{
				echo "Failed";	
			}
		}	
?>