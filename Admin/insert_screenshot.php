<?php
 include 'db.php';

if(isset($_POST['proj_id']) && $_FILES['screenshot'])
{
    $shot_name = $_FILES['screenshot']['name'];
    $shot_size = $_FILES['screenshot']['size'];
    $shot_tmp_name = $_FILES['screenshot']['tmp_name'];
    $project_id = $_POST['proj_id'];

    if($shot_size > 125000000)
    {
        echo '<script type="text/javascript">';
        echo 'alert("file to large");';
        echo 'window.location.href = "/Admin/Dashboard.php"';
        echo '</script>';
    }
    else
    {
        //Declaring Varibels
			$shot_ex = pathinfo($shot_name, PATHINFO_EXTENSION);
			$shot_ex_lc = strtolower($shot_ex);
			$allowed_exs = array("jpg", "jpeg", "png");

            if(in_array($shot_ex_lc, $allowed_exs))
            {
                $new_shot_name = uniqid("SHOT-", true).'.'.$shot_ex_lc;
				$shot_upload_path = 'uploads/'.$new_shot_name;
				move_uploaded_file($shot_tmp_name, $shot_upload_path);

                //query to insert data into database
                $query = "INSERT INTO screenshots (P_Id,picture) VALUES ('$project_id','$new_shot_name')";
                $result = mysqli_query($con, $query);
                if($result)
                {
                    echo '<script type="text/javascript">';
                    echo 'alert("Screenshot Upload success");';
                    echo 'window.location.href = "/Admin/Dashboard.php"';
                    echo '</script>';
                }
                else
                {
                    echo '<script type="text/javascript">';
                    echo 'alert("Screenshot Upload failed");';
                    echo 'window.location.href = "/Admin/Dashboard.php"';
                    echo '</script>';
                }

            }
            else
            {
                echo '<script type="text/javascript">';
		        echo 'alert("Only .jpg, .jpeg, .png files are accepted");';
		        echo 'window.location.href = "/Admin/insert_screenshot.php"';
		        echo '</script>';
                
            }
    }
}


?>