<?php
require 'connect.php';
$query="select *from details";
if($is_query_run=mysqli_query($con,$query));
{
echo "query executed<br>";
while($query_execute=mysqli_fetch_assoc($is_query_run))
   {
echo '<table><tr><td>'.$query_execute['id'].'</td><td>'.$query_execute['name'].'</td></tr></table>';
    }
}

?>