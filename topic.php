<?php
$conn=new mysqli("localhost","root","","forum");
$topic=$_POST['topic'];
echo $topic;
//$sql="INSERT INTO 'topics' VALUES(".$topic.",NULL,0,0)";
$sql="INSERT INTO topics(topic, comment, upvote, downvote) VALUES ('".$topic."','NULL',0,0)";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
?>