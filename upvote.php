<?php
$conn=new mysqli("localhost","root","","forum");
$topic=$_POST['topic'];
$sql="SELECT upvote FROM topics WHERE topic='".$topic."'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
	echo $row['upvote'];
}
?>