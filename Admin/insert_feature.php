<?php
 include 'db.php';

     //Declarations
    if(isset($_POST['project_id']))
    {
      $feature = mysqli_real_escape_string($con, $_POST['feature']);
      $project_Id = $_POST['project_id'];
      $query = "INSERT INTO features (P_Id,Feature) VALUES ('$project_Id','$feature')";

      $result = mysqli_query($con, $query);
      if($result)
      {
        echo "success";
      }
      else
      {
        echo "failed";
      }
    }
?>
