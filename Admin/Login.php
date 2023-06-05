<?php
session_start();
?>

<!DOCTYPE html>
<html lang="eng">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/adminStyle.css"/>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="script.js"></script>
	<script src="password-show-hide.js"></script>
	<title>Login</title>
</head>
<body>
	<!--Container for login form-->
	<div class="login-container">
	<div class="form-box">
	<form action="Login.php" method="post" class="my-form">
	
		<div class="header-text">
		 Login
		</div>
		<div class="single-input">
		 <span><i class="fa fa-user-circle"></i></span>
		 <input placeholder="Username" type="text" name="uName" class="login-input" required>
		</div>
		 <!-- span for password icon-->
		 
		 <div class="single-input">
		 <span><i class="fa fa-lock"></i></span>
		  <input placeholder="Password" type="password" name="password" id="pwd"  class="login-password" required>
		<span ><i class="fa fa-eye " id="eye"></i></span>
		</div>
		 <div class="single-input submit-btn">
         <input type="submit" name="login" value="Login">
         </div>
		  
	</form>
	</div>
	</div>
	
	<?php
include 'db.php';

if(isset($_POST['login']))
{
	$username = $_POST['uName'];
	$Password = $_POST['password'];
	
	$select = "SELECT * From users where  username = '$username' And password = '".md5($Password)."'";
	$result = mysqli_query($con, $select);
	
	if(mysqli_num_rows($result) > 0)
	{
		$_SESSION['username'] = $username;
		// Redirect to user dashboard page
		header("Location: Dashboard.php");
		
	}
	else
	{
		echo '<script type="text/javascript">';
		echo 'alert("Welcome");';
		echo 'window.location.href = "Login.php"';
		echo '</script>';
	}
}


 ?>

 <script  type="text/javascript">
	function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);
 </script>
</body>


</html>
