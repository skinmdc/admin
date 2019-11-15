
<?php

$con=mysqli_connect("localhost","root","","id11524948_app1");

// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT * FROM appointments where status ='Scheduled'";

$result = mysqli_query($con,$query);

$rows = array();
while($r = mysqli_fetch_array($result)) {
  $rows[] = $r;
}
echo json_encode($rows);

mysqli_close($con);