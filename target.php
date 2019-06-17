<?php 
$conn=new mysqli("localhost","root","","forum");
$sql="SELECT topic FROM topics ";
$result=$conn->query($sql);

$i=0;
$x=array();
while($row=$result->fetch_assoc())
{
	echo $row['topic'];
	echo ',';
}
?>
