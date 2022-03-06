
<?php

	include "connection.php";
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$admissionno=$_POST['admissionno'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$course=$_POST['course'];
	$batch=$_POST['batch'];
	$contactno=$_POST['contactno']; 
$sql = "INSERT INTO `reg1`(`name`,`password`,'admissionno','gender','email',`course`,`batch`,'contactno',) VALUES ('$name','$password','$admissionno','$gender','$email','$course','$batch','$contactno')";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "New record added";
	}
	else{
	 die("connection failed".$conn->connect_error);
	}
}
?>
<html>
	<body>
		<form action =" " method = "POST">
			<table>
			<tr><td>
			 Name :<input type = "text" name = "name" >
			</td></tr>
			
			<tr><td>
				Password: <input type = "password" name = "password">
			</td></tr>
			<tr><td>
				Admission no: <input type = "number" name = "admission no">
			</td></tr>
			<tr><td>
				Gender: <input type = "radio" value = "Male" name = "gender">Male
				<input type = "radio" value = "Female" name = "gender">Female
			</td></tr>
			<tr><td>Course:
				<select><option value="SELECT">SELECT</option>
				<option value="MCA">MCA</option>
                <option value="CSE">CSE</option>
<option value="EEE">EEE</option>
<option value="CE">CE</option>
<br>
					
				</select>
			</td></tr>
			<tr><td>
				Batch: <select><option value="SELECT">SELECT</option>
<option value="sem1">sem1</option>
<option value="sem2">sem2</option>
<option value="sem3">sem3</option>
<option value="sem4">sem4</option>
<option value="sem5">sem5</option>
<option value="sem6">sem6</option>
<option value="sem7">sem7</option>
<option value="sem8">sem8</option></select>
<br>
			</td></tr>
			<tr><td>
				Contact Number : <input type = "number" name = "contact no">
			</td></tr>
			<tr><td>
				<input type = "submit" Value = "Submit" name = "submit">
			</td></tr>
			</table>
		</form>
	</body>
</html>