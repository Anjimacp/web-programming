<?php
 
	include 'new1.php';
	
	
	
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$course = $_POST['course'];
		$batch = $_POST['batch'];
		$contact_no = $_POST['contact no'];
		
		$sql = "UPDATE 'registration' SET 'id'='$id',`name` = '$name',`password`='$password',`gender`='$gender',`email`='$email', 'course'='$course','batch'=$batch','contact_no'='contact no',WHERE `admission no`='$admission_no';  lname = '$lname' WHERE id = '$id'";
		$result = mysqli_query($con,$sql);
		if($result){
			echo "Item updated successfully";
		}
		else{
			echo mysqli_error($con);
		}
	}
?>



<html>
<body>

<form action = "#" method = "post">
	<table>
		<tr>
			<td>
				 Name: <input type ="text" name = "name" value = <?php echo $row['name'];?> 
			</td>
		</tr>
		<tr>
			<td>
				password: <input type = "password" name = "password" value = <?php echo $row['password'];?></td>
			
		</tr>
		<tr>
			<td>
				gender: <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male

            <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female
		</td>	</tr>

            <tr>
			<td>
<input type = "email" name = "email" value = <?php echo $row['email']; ?> />
			</td>
		</tr>
		<tr>
			<td>
				course: <input type = "text" name = "course" value = <?php echo $row['course']; ?> />
			</td>
		</tr>
		<tr>
			<td>
				batch: <input type = "text" name = "batch" value = <?php echo $row['batch']; ?> />
			</td>
		</tr>
		<tr>
			<td>
				Contact no: <input type = "number" name = "contact no" value = <?php echo $row['contact_no']; ?> 
			</td>
		</tr>
		<tr>
		<td>
				<input type = "submit" name = "submit" value = "Edit" />
			</td>
		</tr>
	</table>

</form>

</body>
</html>