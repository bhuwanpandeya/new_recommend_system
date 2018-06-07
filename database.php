<?php 
if(isset($_POST['signup'])){
$conn=mysqli_connect('localhost','root','','db_recommend');
if(!$conn){
	echo "Not connected to database";
}
else
{
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$sql="INSERT INTO tbl_user_register (first_name,middle_name,last_name,username,password,email) VALUES ('$firstname','$middlename','$lastname','$username','$password','$email')";
}
if (!mysqli_query($conn,$sql)) {
	echo "<p style='color:red;'>can't register your account</p>";
}else{
	echo "register Success please reload the page";
}
}


?>
