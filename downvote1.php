<?php
session_start();
$conn=new mysqli("localhost","root","","forum");
$topic=$_POST['topic'];
$sql="UPDATE topics SET downvote = downvote + 1 WHERE topic='".$topic."' ";
$result=$conn->query($sql);
if($result===True)
	echo $topic;
else
	echo "Not upvoted";
?>
