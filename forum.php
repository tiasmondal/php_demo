<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{font-family: Arial, Helvetica, sans-serif;
background-image:url('libexper.png');
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* E#modal-content {
    background-image: url('modalback.jpg');
    margin: auto;
    padding: 80px;
    border: 1px solid #888;
    width: 60%;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.5s;
    animation-name: animatetop;
    animation-duration: 0.5s;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
nable scroll if needed */
    background-color: cornsilk; /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
#modal-content {
    background-image: url('modalback.jpg');
    margin: auto;
    padding: 80px;
    border: 1px solid #888;
    width: 60%;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.5s;
    animation-name: animatetop;
    animation-duration: 0.5s;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

#myBtn{position:absolute;
top:120px;
left:150px;
height:100px;
width:200px;
font-size:125%;
border-radius:30px;
font-family:comic sans ms;
}
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<?php  session_start();
if($_SESSION["user_type"]=="admin")
echo "<script> window.location.assign('admin.php'); </script>";
else
 echo "<h1 style='text-align:center;color:white;font-family:comic sans ms'>Hello  " .$_SESSION['name']. "  WELCOME </h1>" ; 
?>
<button id="myBtn" onclick='modd()'>New Topic</button>
<h1 style='text-align:center;color:white;font-family:comic sans ms'>TOPICS </h1>

<p>Collapsible Set:</p>
<button class="collapsible" id="0">Open Section 1</button>
<div class="content" id="1i">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="collapsible" id="1">Open Section 2</button>
<div class="content" id="2i">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="collapsible" id="2">Open Section 3</button>
<div class="content" id="3i">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<script>

 var coll = document.getElementsByClassName("collapsible");

var i,func1=0,func2=0;
var x=coll.length;
function hello()
{var func1=0;
var newTodo = document.createElement('button');
newTodo.className="collapsible";
newTodo.textContent="My homework"
var content = coll[coll.length-1].nextElementSibling;
content.parentNode.insertBefore(newTodo, content.nextSibling);
coll[coll.length-1].id=coll.length-1;
alert(coll.length);

var content1=document.createElement('div');
content1.innerHTML="<p>The nextElementSibling property returns the element immediately following the specified element, in the same tree level.</p>";
content1.className="content";

coll[coll.length-1].parentNode.insertBefore(content1, coll[coll.length-1].nextSibling);
coll = document.getElementsByClassName("collapsible");

for(i=0;i<coll.length;i=i+1)
    {
        coll[i].addEventListener("click", function() {
    alert(i.toString()+"gg");
    //alert(coll[i].innerHTML);
    x=this.id;
    
    alert(x);
    //this.classList.toggle("active");
    var content = document.getElementsByClassName("content");
    

    if(content[x].style.display=='block' )
        {content[x].style.display='none';
   
}
    else 
        {
            content[x].style.display='block';
            
        }
    
 
    alert(content[x].innerHTML);
    


  });
}

}

    for(i=0;i<coll.length;i=i+1)
    {
        coll[i].addEventListener("click", function() {
    alert(i.toString()+"gg");
    //alert(coll[i].innerHTML);
    x=this.id;
    
    alert(x);
    //this.classList.toggle("active");
    var content = document.getElementsByClassName("content");
    

    if(content[x].style.display=='block' )
        {content[x].style.display='none';
   
}
    else 
        {
            content[x].style.display='block';
            
        }
    
 
    alert(content[x].innerHTML);
    


  });
}

    





//for (i = 0; i<coll.length; i++)

/*for (i = 0; i<coll.length; i++) {
    
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    alert(content.innerHTML);
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });

}*/
  

//alert(content[3].innerHTML);
</script>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div id="modal-content">
    <span class="close" onclick="fff()">close</span>
    <form method="post" id="tias" action="target.php"> 
    <input type="text" name="newtopic">
    <button type="submit">Submit</button>
</form>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
 function modd() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function fff() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<button onclick='hello()'>Hello</button>