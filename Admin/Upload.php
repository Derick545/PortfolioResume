<?php
include("auth_session.php");
?>
<html>
    <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/adminStyle.css"/>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="script.js"></script>
	
	<title>Home</title>
    </head>
    <body>
	<section class="myUpload">
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
<div class="upload">
			<h1>Upload Project</h1>
	 <div class="uploadForm">
        <form  method="post" enctype="multipart/form-data">
		    <div class="error-text">This is an error message</div>
			<div class="upload-details">
				<div class="field input">
					<label>Application Name</label>					
					<input type="text" name="name" placeholder="Enter Application Name">
				</div>
				<div class="field input">	
					<label>IDE Used</label>				
					<input type="text" name="IDE" placeholder="Enter IDE Name">
				</div>
			</div>
			<div class="upload-details">
				<div class="field input">
					<label>Link</label>					
					<input type="url" name="link" placeholder="Enter Link Url">
				</div>
				<div class="field input">	
					<label>Date Created</label>				
					<input type="date" name="date" >
				</div>
			</div>
			<div class="upload-details">			    
				<div class="field">
				    <label>Github Link</label>
					<input type="url" name="Git" placeholder="Enter Github Link" required>
				</div>				
				<div class="field input">
					<label>Addtional Language</label>
				    <input type="text" name="add-lang" placeholder="Enter Additional Language Used" required>
				</div>
			</div>
			<div class="upload-details">			
				<div class="field input">
					<label>Backend Language</label>
					<select name="Lang" id="Lang">
					<option value="C#">C#</option>
					<option value="PHP">PHP</option>
					<option value="Java">Java</option>
					<option value="Javascript">Javascript</option>
					</select>
				</div>
				<div class="field input">
				    <label>Front End Language</label>
					<select name="Front-Lang" id="Front-Lang" >
					<option value="Javascript">Javascript</option>
					<option value="HTML">HTML</option>
					<option value="XML">XML</option>
					<option value="CSS6">CSS6</option>
					</select>
				</div>
			</div>
            <div class="upload-details">
				<div class="field input">
					<label>Platform</label>
					<select name="OS" id="OS" >
					<option value="Windows">Windows</option>
					<option value="Android">Android</option>
					<option value="Cross-Platform">Cross-Platform</option>
					<option value="IOS">IOS</option>
					</select>
				</div>
				<div class="field input">
					<label>Type of Application</label>
					<select name="type" id="type" placeholder="Languege">
					<option value="Mobile">Mobile App</option>
					<option value="Desktop">Desktop</option>
					<option value="WebApplication">Web-Application</option>
					<option value="Website">Website</option>
					</select>
				</div>
			</div>
			<div class="field description">
				<textarea name="Description" placeholder="Description..." ></textarea>
			</div>
		   <div class="field input">
				<label>Upload Logo</label>
				<input type="file" class="select-logo" name="logo">
		   </div>	
		   <div class="field input">
				<label>Upload Video</label>
				<input type="file" class="select-logo" name="video" >
		   </div>
		   <div class="field input">
		  	    <label>Upload zip File</label>
		   		<input type="file" class="select-logo" name="app">
		   </div>
		   		<input type="submit" name="insert" id="up-btn" class="Button" value="UPLOAD">			
		</form>
	 </div>
   </div>
</div>

</section>
<script src="javascript/navigation.js"></script>
<script src="javascript/upload-content.js"></script>
</body>

</html>