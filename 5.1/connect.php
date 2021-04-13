<?php

$Username= filter_input(input_post, 'Username');
$Password= filter_input(input_post, 'Password');
if(!empty($Username)){
if(!empty($Password)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="youtube";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
	die('Connect error('.mysqli_connect_errno().')'
		.mysqli_connect_error());
}
	else{
		$sql="insert into account(username,password) values('$username','$password')"; 
		if($conn->query($sql)){
			echo "New record has been insert sucessfully";
		}
		else{
			echo "Error".$sql."<br>".$conn->error;
		}
		$conn->close();
	}
}

}
else{
	echo"Username should not be empty";
	die();
}
?>