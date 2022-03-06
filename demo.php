<?php
include "connection.php";
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	$admission_no=$_POST['admission no'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$course=$_POST['course'];
	$batch=$_POST['batch'];
	$contact_no=$_POST['contact no'];

$sql = "INSERT INTO `registration` ( 'id',`name`, `password`, `admission no`, `gender`, `email`,'course','batch','contact no') VALUES ( '$id','$name', '$password', '$admission no', '$gender', '$email','course','batch','contact no')";
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
<h1 style="color:white"><center>REGISTRATION PAGE</center></h1>
<form action=" " method="POST"><center>"<table style="color:white">"<tr><td>NAME:</td><td>
<input type="text" name="name" size ="20"/></td></tr>
<tr><td color="white">PASSWORD:</td><td>
<input type="text" name="password" size ="20"/></td></tr>
<tr><td>ADMISSION NUMBER</td><td>
<input type="number" name="admission number" size="6"/></td>
<tr><td>GENDER:</td><td>
<input type="radio" name="gender" value="m">MALE
<input type="radio" name="gender" value="f">FEMALE
<tr><td>E-MAIL:</td><td>
<input type="mail" name="email" size ="20"/></td></tr>
</td></tr>
</tr>
<tr><td>COURSE</td><td>
<select><option value="SELECT">SELECT</option>
<option value="MCA">MCA</option>
<option value="CSE">CSE</option>
<option value="EEE">EEE</option>
<option value="CE">CE</option>
</select></td>
</tr>
<tr><td>BATCH</td><td>
<select><option value="SELECT">SELECT</option>
<option value="sem1">sem1</option>
<option value="sem2">sem2</option>
<option value="sem3">sem3</option>
<option value="sem4">sem4</option>
<option value="sem5">sem5</option>
<option value="sem6">sem6</option>
<option value="sem7">sem7</option>
<option value="sem8">sem8</option></select></td></tr>
<br>
<tr><td>CONTACT NUMBER</td><td>
<input type="number" name="contact number" size="10"/></td>
</tr>
<tr><td>
<input type="SUBMIT" value="Submit"/></td></tr>
</table></center>
</form>
</body>
</html>