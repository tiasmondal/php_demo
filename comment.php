<?php
$conn=new mysqli("localhost","root","","forum");
$topic=$_POST['topic'];
$post=$_POST['comment'];

$sql="SELECT comment FROM topics WHERE topic='".$topic."' ";
$result=$conn->query($sql);


while($row=$result->fetch_assoc())
{   
	//echo $row['comment'];
	$prev=$row['comment'];
	$str=$prev."|".$post;
	echo($str);
}


//$new= " ".$prev."<br> ".$post." "."<br>";


/*$sql="UPDATE topics SET comment='".$str."'   WHERE topic='".$topic."' ";
$result=$conn->query($sql);*/
// echo "".$result;
?>


