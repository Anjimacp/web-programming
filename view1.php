<?php
include "connect.php";
$sql = " SELECT * FROM `train` " ;
$result=$conn->query($sql);
?>
<html>
<head>
<title>view page</title>
</head>
<body>
<div class="container">
<h2>USERS</h2>
<table>
<tr>

<th> age</th>
<th>name</th>
<th>Address</th>
<th>phone no</th>
<th>from</th>
<th>to</th>
<th>date</th>

<th>Action</th>
</tr>
<?php
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
?>
<tr>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['Address'];?></td>
<td><?php echo $row['phone no'];?></td>
<td><?php echo $row['from'];?></td>
<td><?php echo $row['to'];?></td>
<td><?php echo $row['date'];?></td>


<?php
	}
}
?>
</table>
</html>