<?php
$conn=new mysqli("localhost","root","","forum");


$topic=$_POST['topic'];
$sql="DELETE FROM topics WHERE topic='".$topic."'";
$result=$conn->query($sql);
?>