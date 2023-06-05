<?php 
include 'db.php';

if(isset($_POST["project_id"]))  
 {  
      $query = "SELECT * FROM projects WHERE UniqueId = '".$_POST["project_id"]."'";  
      $result = mysqli_query($con, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>