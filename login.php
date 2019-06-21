<?php
session_start();

?>




<!DOCTTYPE html>
<html>
<style>
body{  background-image: linear-gradient(to bottom right, #6a2eea,#BDF1ED);
}
#tias{
  margin:0;
  padding: 0;
  position: absolute;
  top: 25%;
  left: 25%;
  height: 70%;
  width: 90%;
}
.x{
  font-family:Comic Sans Ms;
  width: 60%;
  height: 10%;
  line-height: 1.2;
  font-size: 75%;
  color:white;
  border-right: none;
  border-top: none;
  border-radius: 2px;
}




div.t1{
  position:absolute;
  top:15%;
  left: 27%;
  bottom: 15%;
  width: 45%;
  font-family:Comic Sans Ms;
  color:white;
  border-radius:5px;
  background-size: contain;
  background-image: linear-gradient(to bottom left, white,#bec2c4);
}
#t2{
  width:20%;
  height:12%;
  font-family:Comic Sans MS;
  font-size:150%;
  position:absolute;
  left: 20%;
  bottom: 18%;
  border-radius:5px;
  box-shadow: none;
  background-color: #03bdc4;
}
#t2:hover{
  background-color:#02c47d;
}

#t3{
  width:25%;
  height:6%;
  font-family:Comic Sans MS;
  font-size:150%;
  position:absolute;
  bottom: 18%;
  left: 38%;
  border-radius:5px;
  box-shadow: none;
  border-color: #FF634D;
}
#t3:hover{
  background-color:#e7ff70;
}


::placeholder {
    color: #4f5653;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
   color: white;
}
.radio-b{
  font-family:Comic sans ms;
  font-size: 80%;
  font-weight: bold;
}
.labels{
color:black;
font-size:18px;
font-family: Arial, Helvetica, sans-serif;
font-weight: bold;
}
</style>
<body>
<?php
$nameerr="";
$name="";
$username=$usererr=$email=$emailerr=$password=$passworderr=$user_type=$user_typeerr="";


if(empty($_POST["username"]))
$usererr="Username";
else
{$_SESSION["username"]=$username=$_POST["username"];
if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usererr = "Only letters and white space allowed"; 
      $username="";
    }
}

if(empty($_POST["password"]))
$passworderr="Password";
else
$_SESSION["password"]=$password=$_POST["password"];

if(empty($_POST["user_type"]))
$user_typeerr="User type";
else
$_SESSION['user_type']=$user_type=$_POST["user_type"];

?>

<div class=t1>
<h1 style="text-align:center;font-size:300%;font-family: 'Open Sans', sans-serif;color:#103024;">Login Portal</h1>
<form method="post" id="tias" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 
      <span class="labels" ><?php echo $usererr; ?></span><br>
      <input type="text" class="x" placeholder="Username" title="your username" name="username">
      <br>
      <br>
      <span class="labels"> <?php echo $passworderr; ?></span> <br>
      <input type="password" class="x" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
      <br>
      <br>
          <span class="labels"><?php echo $user_typeerr; ?></span> <br>
         	<input type="radio" name="user_type" value="user" class="radio-b">User   
          <input type="radio" name="user_type" value="admin" class="radio-b">Admin   <br>
      <br>

<input type="submit" value="login" id="t2">
</form>
</div>
<form action="test1.php" >
<input type="submit" value="Register" id="t3">
</form>
<?php

if(($username!="")&&($password!="")&&($user_type!=""))
{$conn=new mysqli("localhost","root","","forum");
$sql="SELECT * FROM members WHERE username='$username'";
$result=$conn->query($sql);
try
{$row=$result->fetch_assoc();
}
catch (Exception $e)
{
	echo '<script language="javascript">';
echo 'alert("Wrong username or password or usertype. Please register")';
echo '</script>';
}
echo $row['name'];
$_SESSION['name']=$row['name'];

$y=$row['password'];
$z=$row['user_type'];


if(($password==$y)&&($user_type==$z))
 echo "<script> window.location.assign('forum.php'); </script>";
else if (($username!="")&&($password!=""))
{echo '<script language="javascript">';
echo 'alert("Wrong username or password or usertype. Please register")';
echo '</script>';
}
$username="";
$password="";

}


?>
<?php $_SESSION['tias']=0 ?>
</body>
</html>