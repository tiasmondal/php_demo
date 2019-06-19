<?php
$conn=new mysqli("localhost","root","","forum");

$str=$_POST['comment'];
$topic=$_POST['topic'];

$sql="UPDATE topics SET comment='".$str."'   WHERE topic='".$topic."' ";
$result=$conn->query($sql);
echo 1;
?>
