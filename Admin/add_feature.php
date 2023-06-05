<?php
include 'db.php';
?>

<form action="add_feature.php" method="POST" class="add-feature" id="in_feature">
                              
                                  <h3>proj</h3>
                                      <div class="error-text">This is an error message</div>
                                      <label class="f-label">Feature</label>
                                      <div class="field input">                                 
                                      <input type="text" name="featur" id="featur" placeholder="Enter Feature" required> 
                                      </div>
                                      <input type="submit" name="addFeature" class="f-button" id="fButton" Value="ADD">
                                     
                               


</form>
<?php
if(isset($_POST['add_feature'])){


  $feat = $_POST['featur'];

  $query = "INSERT INTO features (Feature) VALUES ('$feat')";
  $result = mysqli_query($con, $query);

  if($result){
    echo "success";
  }
  else{
    echo "Faile";
  }
}

?>


