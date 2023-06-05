<?php

$con = mysqli_connect("localhost", "root", "", "portfolio");
//check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect MySql";
	mysqli_connect_errno();
}


?>