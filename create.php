<?php
include "connection.php";
if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$password=$_POST['password'];
	$admissionno=$_POST['admissionno'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$course=$_POST['course'];
	$batch=$_POST['batch'];
	$contactno=$_POST['contactno'];

$sql = "INSERT INTO `reg1` ( `name`, `password`, `admissionno`, `gender`, `email`,'course','batch','contactno') VALUES ('$name', '$password', '$admissionno', '$gender', '$email','course','batch','contactno')";
$result=$conn->query($sql);
if($result==TRUE)
{
	echo "new record created successfully";
}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
<body>
<h2> Signup Form </h2>
<form action="" method="POST">
<fieldset>
<legend> Personal Information </legend>

Name:<br>
<input type="text" name="name">
<br>
Password:<br>
<input type="password" name="password">
<br>
Admission no:
<br>
<input type="number" name="admissionno">
<br>
gender:<br>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br><br>

Email:<br>
<input type="email" name="email">
<br>
Course:<br>
<input type="text" name="course">
<br>
Batch:<br>
<input type="text" name="batch">
<br>
Contact no:<br>
<input type="number" name="contactno">
<br>
<input type="submit" name="submit" value="submit">
</fieldset>
</body>
</html>	