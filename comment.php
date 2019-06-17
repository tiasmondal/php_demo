<?php 
$conn=new mysqli("localhost","root","","forum");
$topic=$_POST['topic'];
$comment=$_POST['comment'];
$sql="INSERT INTO `topics`(`comment`, `upvote`, `downvote`) VALUES (".$comment.",0,0) WHERE topic IS ".$topic."";
$result=$conn->query($sql);
?>