
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
    /* background-image: url('modalback.jpg'); */
    background-image: url(https://media.istockphoto.com/photos/vintage-retro-grungy-background-design-and-pattern-texture-picture-id656453072?k=6&m=656453072&s=612x612&w=0&h=4TW6UwMWJrHwF4SiNBwCZfZNJ1jVvkwgz3agbGBihyE=);
    background-size: cover;
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
#hello{position:absolute;
/* top:150px; */
/* left:1100px; */
right: 20px;
height:50px;
width:100px;
font-size:125%;
background-color:azure;
text-align:center;
border-radius:30px;
font-family:comic sans ms;
}
</style>
</head>
<body>
  <form action="logout.php">
<input id="hello" type="submit" value="logout">
</form>
<?php  session_start();
if($_SESSION["user_type"]=="user")
echo "<script> window.location.assign('forum.php'); </script>";
else
 echo "<h1 style='text-align:center;color:white;font-family:comic sans ms'>Hello  " .$_SESSION['name']. "  WELCOME </h1>" ; 
?>

<h1 style='text-align:center;color:white;font-family:comic sans ms'>TOPICS </h1>

<p style="color:white">TOPICS</p>
<button class="collapsible" id="0">These are collapsible boxes for topics , click on these boxes to see content</button>
<div class="content" id="1i">
  <p>This is the content for adding comments</p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

 var coll = document.getElementsByClassName("collapsible");

var i,func1=1,func2=0;
var x=coll.length;
var array=[];
var globalvar;
function delete123(id)
{
var input=document.getElementsByClassName('collapsible');
var l=Number(id)+1;
var z=input[l].innerHTML;
z=z.replace("<p>","");
z=z.replace('</p><button id="'+String(id)+'" onclick="delete123(this.id)">Delete</button>',"")

$.ajax({
  url:"delete.php", //the page containing php script
            type: "post", //request type,
            data:{topic:z},
            dataType:"text",
            success: function()  {
              alert("Data successfully deleted");
             window.location.reload();
            }
})


}
function comment()
{var x;

for(x=0;x<globalvar;++x)
{
  getid(x,2);
}
}

function getid(x,number)
{//var x=$(this).attr('id');;
    

var input=document.getElementsByClassName('collapsible');
var comment=document.getElementsByClassName('button123');

var l=Number(x)+1;

var y=input[l].innerHTML;
y=y.replace("<p>","");

y=y.replace('</p><button id="'+String(x)+'" onclick="delete123(this.id)">Delete</button>',"")

var z=comment[x].value;

   $.ajax({
            url:"comment.php", //the page containing php script
            type: "post", //request type,
            data:{'topic':y,'comment':z},
            dataType:"text",
            success: function(result)  {
              if(number==1)
             { $.ajax({
            url:"comment1.php", //the page containing php script
            type: "post", //request type,
            data:{comment:result,topic:y},
            success: function()  {
                      alert("Topic Successfully added");
                      return;
                    }
                     


         });
         }
                      
                      var i,start=0;
                      var comment1=[];
                      for( i=0;i<result.length;i=i+1)
    {
        if(result[i]=='|')
            { 
              
              
              //var word="";
              
              comment1.push(result.slice(start,i));
              
              
              i=i+1;
              start=i;
            }
            
            

    }
    var comment1234=document.getElementsByClassName('paras');
    var str="";
    var str1="<br>";
    for(i=0;i<comment1.length;++i)
    {
        str=str.concat(comment1[i]);
        str=str.concat(str1);


    }


       comment1234[x].innerHTML=str;
       

                    }
                     


         });
    

}
function noop()
{

}
function allow(array)
{
  {

    var array;
    $.ajax({
            url:"target.php", //the page containing php script
            type: "post", //request type,
            data:"",
            success: function(result)  {
                    
                  
                        
                        var array1=result;
                        
    
    
    
    
    
    var word="",count=0,i=0;
    var start=0,end=0;
    for( i=0;i<array1.length;i=i+1)
    {
        if(array1[i]==',')
            { 
              
              
              //var word="";
              
              array.push(array1.slice(start,i));
              
              
              i=i+1;
              start=i;
            }
            
            

    }
    
    var con=array;
globalvar=con.length;
for(var j=0;j<con.length;++j)
{var coll = document.getElementsByClassName("collapsible");
var newTodo = document.createElement('button');
newTodo.className="collapsible";
newTodo.innerHTML="<p>"+con[j]+"</p><button id='"+String(j)+"'onclick='delete123(this.id)'>Delete</button>";
var content = coll[coll.length-1].nextElementSibling;
content.parentNode.insertBefore(newTodo, content.nextSibling);
coll[coll.length-1].id=coll.length-1;


var content1=document.createElement('div');
//content1.innerHTML="<p>"+con[j].toString()+"</p>";
// content1.innerHTML="<form method='post'><input class='button123' type='text'><button id="+String(j)+" onclick='getid(this.id,1)'>Submit</button></form><p class='paras' id="+String(j)+">peep"+String(j)+"</p>";
content1.innerHTML="<form method='post'><input class='button123' type='text' style='width: 100%;margin-top: 2%;height: 5vh;'><div style='width:100%; text-align:center;'><button id="+String(j)+" onclick='getid(this.id,1)' style='    margin-top: 2%;width: 20%;padding: 15px 5px 15px 5px;border-readius: 20px;border-radius: 20px;border: none;font-size: 1em;'>Submit</button></div></form><p class='paras' id="+String(j)+">peep"+String(j)+"</p>";
content1.className="content";

coll[coll.length-1].parentNode.insertBefore(content1, coll[coll.length-1].nextSibling);
coll = document.getElementsByClassName("collapsible");
}
                     
     hello();                               //Optional
                flag=0;
              comment();
        allow=noop;},
            error: function(result)
                {alert("nothing");
                }


         });

        
  }

    
}
//##############################################################
function allow1(array)
{
  {

    var array;
    $.ajax({
            url:"target.php", //the page containing php script
            type: "post", //request type,
            data:"",
            success: function(result)  {
                    
                  
                        
                        var array1=result;
                        
    
    
    
    
    
    var word="",count=0,i=0;
    var start=0,end=0;
    for( i=0;i<array1.length;i=i+1)
    {
        if(array1[i]==',')
            { 
              
              
              //var word="";
              
              array.push(array1.slice(start,i));
              
              
              i=i+1;
              start=i;
            }
            
            

    }
    
    var con=array;
globalvar=con.length;
for(var j=0;j<con.length;++j)
{var coll = document.getElementsByClassName("collapsible");
var newTodo = document.createElement('button');
newTodo.className="collapsible";
newTodo.textContent=con[j];
var content = coll[coll.length-1].nextElementSibling;
content.parentNode.insertBefore(newTodo, content.nextSibling);
coll[coll.length-1].id=coll.length-1;


var content1=document.createElement('div');
//content1.innerHTML="<p>"+con[j].toString()+"</p>";
content1.innerHTML="<form method='post'><input class='button123' type='text'><button id="+String(j)+" onclick='getid(this.id)'>Submit</button></form><p class='paras' id="+String(j)+">peep"+String(j)+"</p>";
content1.className="content";

coll[coll.length-1].parentNode.insertBefore(content1, coll[coll.length-1].nextSibling);
coll = document.getElementsByClassName("collapsible");
}
                     
     hello();                               //Optional
                flag=0;
              comment();
        allow=noop;},
            error: function(result)
                {
                }


         });

        
  }

    
}
//###########################################3
/*function rendetion()
{
    var array1;
    
    
    array1=allow();
    
    alert(array1);
    var word,count=0;
    for(var i=0;i<
        array1.length;++i)
    {
        if(array1[i]==',')
            {
              array.append(word);
              count=0;
              var word;
              ++i;
            }
            word[count]=array[i];
            ++count;

    }
    return(array);
}*/

allow(array);

function rendetion()
{

}
function hello()
{flag=1;
    var open=0,close=0;

/*var newTodo = document.createElement('button');
newTodo.className="collapsible";
newTodo.textContent="My homework"
var content = coll[coll.length-1].nextElementSibling;
content.parentNode.insertBefore(newTodo, content.nextSibling);
coll[coll.length-1].id=coll.length-1;


var content1=document.createElement('div');
content1.innerHTML="<p>The nextElementSibling property returns the element immediately following the specified element, in the same tree level.</p>";
content1.className="content";

coll[coll.length-1].parentNode.insertBefore(content1, coll[coll.length-1].nextSibling);
coll = document.getElementsByClassName("collapsible");*/

for(i=0;i<coll.length;i=i+1)
    {
        coll[i].addEventListener("click", function() {
          
    //alert(i.toString()+"gg");
    //alert(coll[i].innerHTML);
    x=this.id;
    
  
    //this.classList.toggle("active");
    var content = document.getElementsByClassName("content");
    

    if(content[x].style.display==='block')
        {

}
else
{
    content[x].style.display='block';
            
}
   
    
 
    //alert(content[x].innerHTML);
    



  });
}

}

   { for(i=0;i<coll.length;i=i+1)
    {
        coll[i].addEventListener("click", function() {
    //alert(i.toString()+"gg");
    //alert(coll[i].innerHTML);
    x=this.id;
    
    
    //this.classList.toggle("active");
    var content = document.getElementsByClassName("content");
    

    {if(content[x].style.display==='block' )
        {

}
    else 
        {
            content[x].style.display='block';
            
           
        }
    
 
    //alert(content[x].innerHTML);
    

}
  });
}
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
    <!-- <span class="close" onclick="fff()">close</span> -->
    <span class="close" style='font-size:30px; color: white' onclick="fff()">&#10006;</span>
    <form method="post" id="tias"> 
    <!-- <input type="text" id="tias1" name="newtopic">
    <button type="submit" onclick='data()'>Submit</button> -->
    <input type="text" id="tias1" name="newtopic" style="width: 100%;
    margin-top: 5%;
    height: 6vh;
    /* padding: 5px; */
    border-radius: 20px;
    padding-left: 15px;">
    <div style="width: 100%;text-align:center;">
    <button type="submit" style="    
    margin-top: 4%;
    width: 20%;
    padding: 5px 5px 5px 5px;
    border-readius: 20px;
    border-radius: 20px;
    border: none;
    font-size: 1em;"
    onclick='data()'>Submit</button>
    </div>
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
    allow=allow1;
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
<!-- <button onclick='modd()'>Add topic</button> -->
<div class="mid-d" style="width: 100%; text-align: center;">
<button onclick='modd()' class="btn-top" style="  margin: 0 auto;
    /* margin-left: 47%; */
    width: 20%;
    /* height: 29%; */
    font-size: 2em;
    margin-top: 4%;
    border-radius: 22px;
    background-color: rgba(78,68,56,0.6);
    padding: 5px 2px 2px 2px;
    color: white;
    outline: none;
    border: none;">Add topic</button>
</div>
<script type="text/javascript">
    function data()
{   
    var x=document.getElementById('tias1').value;
    
    if(x!="")
    {
$.ajax({
            url:"topic.php", //the page containing php script
            type: "post", //request type,
            data:{topic:x},
            success: function(result)  {
                      alert("Topic Successfully added");
                      hello();
                    }
                     


         });
    }

}
</script>