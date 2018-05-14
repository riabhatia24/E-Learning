<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" >
function test(e){
if(document.getElementById(e.id+"det").style.display=="none")
document.getElementById(e.id+"det").style.display="block"
else
document.getElementById(e.id+"det").style.display="none"


}
function test1(e){ 
if(document.getElementById(e.id+"det").style.display=="none")
document.getElementById(e.id+"det").style.display="block"
else
document.getElementById(e.id+"det").style.display="none"


}
function test2(e){ 
if(document.getElementById(e.id+"det").style.display=="none")
document.getElementById(e.id+"det").style.display="block"
else
document.getElementById(e.id+"det").style.display="none"

}
function test3(e){ 
if(document.getElementById(e.id+"det").style.display=="none")
document.getElementById(e.id+"det").style.display="block"
else
document.getElementById(e.id+"det").style.display="none"

}


</script>
	<title>Unistash</title>
<link href="notes1.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Course Notes</h1>
<div class="clear">
      <a href="new1.php"><button type="submit" class="signupbtn">Previous Page</button></a>
    </div>
<div>
<nav class="navigation">
  <ul class="mainmenu">
  	<li><a href="#">Computer Science<span class="arrow">&#9660;</span></a>
    	 <ul class="submenu">
      
        <li id="sem1" onclick="test(this)"><a href="#">Semester 1<span class="arrow">&#9660;</span></a>
        	<ul id="sem1det" style="display:none">
        		<li><a href="#">Applied Maths</a></li>
		<li><a href="#">Applied Physics</a></li>
	    <li><a href="#">EME</a></li>
	    <li><a href="#">ITC</a></li>
	     <li><a href="#">Applied Chemistry</a></li>
	      <li><a href="#">Communication Skills</a></li>
	</ul></li>

        <li id="sem2" onclick="test(this)"><a href="#">Semester 2<span class="arrow">&#9660;</span></a>
        	<ul id="sem2det" style="display:none">
        		<li><a href="#">Applied Mathematic</a></li>
		<li><a href="#">Applied Physics</a></li>
	    <li><a href="#">Electrical Science</a></li>
	    <li><a href="#">EVS</a></li>
	     <li><a href="#">EM</a></li>
	      <li><a href="#">Communication Skills</a></li>
	</ul></li>
		<li id="sem3" onclick="test(this)"><a href="#">Semester 3<span class="arrow">&#9660;</span></a>
			<ul id="sem3det" style="display:none">
        		<li><a href="#">Discrete Mathematics</a></li>
		<li><a href="#">Database & Management</a></li>
	    <li><a href="https://drive.google.com/open?id=1wPqxcwAW0bXKyRBPg83M8YUB1ZeL14kh">Data Structures</a></li>
	    <li><a href="#">Analog and Digital Electronics</a></li>
	     <li><a href="#">OOPS</a></li>
	      
	</ul></li>
	    <li id="sem4" onclick="test(this)"><a href="#">Semester 4<span class="arrow">&#9660;</span></a>
	    	<ul id="sem4det" style="display:none">
        		<li><a href="#">Subject-1</a></li>
		<li><a href="#">Subject-2</a></li>
	    <li><a href="#">Subject-3</a></li>
	    <li><a href="#">Subject-4</a></li>
	     <li><a href="#">Subject-5</a></li>
	      
	</ul></li>
		<li id="sem5" onclick="test(this)"><a href="#">Semester 5<span class="arrow">&#9660;</span></a>
			<ul id="sem5det" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem6" onclick="test(this)"><a href="#">Semester 6<span class="arrow">&#9660;</span></a>
			<ul id="sem6det" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem7" onclick="test(this)"><a href="#">Semester 7<span class="arrow">&#9660;</span></a>
			<ul id="sem7det" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem8" onclick="test(this)"><a href="#">Semester 8<span class="arrow">&#9660;</span></a> 
			<ul id="sem8det" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
      </ul>
    </li>
    <li><a href="">Information Technology<span class="arrow">&#9660;</span></a>
    	 <ul class="submenu">
        <li id="sem1it" onclick="test1(this)"><a href="#">Semester 1 <span class="arrow">&#9660;</span></a>
        	<ul id="sem1itdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      <li><a>Subject-6</a></li>
	</ul>
</li>

        <li id="sem2it" onclick="test1(this)"><a href="#">Semester 2<span class="arrow">&#9660;</span></a>
        	<ul id="sem2itdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      <li><a>Subject-6</a></li>
	</ul></li>
		<li id="sem3it" onclick="test1(this)"><a href="#">Semester 3<span class="arrow">&#9660;</span></a>
			<ul id="sem3itdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
	    <li id="sem4it" onclick="test1(this)"><a href="#">Semester 4<span class="arrow">&#9660;</span></a>
	    	<ul id="sem4itdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem5it" onclick="test1(this)"><a href="#">Semester 5<span class="arrow">&#9660;</span></a>
			<ul id="sem5itdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem6it" onclick="test1(this)"><a href="#">Semester 6<span class="arrow">&#9660;</span></a>
			<ul id="sem6itdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem7it" onclick="test1(this)"><a href="#">Semester 7<span class="arrow">&#9660;</span></a> 
			<ul id="sem7itdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem8it" onclick="test(this)"><a href="#">Semester 8<span class="arrow">&#9660;</span></a>
			<ul id="sem8itdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
      </ul>
    </li>

<li><a href="">ECE<span class="arrow">&#9660;</span></a>
    	 <ul class="submenu">
        <li id="sem1ece" onclick="test2(this)"><a href="#">Semester 1<span class="arrow">&#9660;</span></a>
        	<ul id="sem1ecedet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      <li><a>Subject-6</a></li>
	</ul></li>

        <li id="sem2ece" onclick="test2(this)"><a href="#">Semester 2<span class="arrow">&#9660;</span></a>
        	<ul id="sem2ecedet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      <li><a>Subject-6</a></li>
	</ul></li>
		<li id="sem3ece" onclick="test2(this)"><a href="#">Semester 3<span class="arrow">&#9660;</span></a>
        	<ul id="sem3ecedet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
	    <li id="sem4ece" onclick="test2(this)"><a href="#">Semester 4<span class="arrow">&#9660;</span></a>
        	<ul id="sem4ecedet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem5ece" onclick="test2(this)"><a href="#">Semester 5<span class="arrow">&#9660;</span></a>
        	<ul id="sem5ecedet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem6ece" onclick="test2(this)"><a href="#">Semester 6<span class="arrow">&#9660;</span></a>
        	<ul id="sem6ecedet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem7ece" onclick="test2(this)"><a href="#">Semester 7<span class="arrow">&#9660;</span></a>
        	<ul id="sem7ecedet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem8ece" onclick="test2(this)"><a href="#">Semester 8<span class="arrow">&#9660;</span></a>
        	<ul id="sem8ecedet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
      </ul>
    </li>

<li><a href="">Mechanical<span class="arrow">&#9660;</span></a>
    	 <ul class="submenu">
       <li id="sem1m" onclick="test3(this)"><a href="#">Semester 1<span class="arrow">&#9660;</span></a>
        	<ul id="sem1mdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      <li><a>Subject-6</a></li>
	</ul></li>

        <li id="sem2m" onclick="test3(this)"><a href="#">Semester 2<span class="arrow">&#9660;</span></a>
        	<ul id="sem2mdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      <li><a>Subject-6</a></li>
	</ul></li>
		<li id="sem3m" onclick="test3(this)"><a href="#">Semester 3<span class="arrow">&#9660;</span></a>
        	<ul id="sem3mdet" style="display:none">
        		<li><a href="#">Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
	    <li id="sem4m" onclick="test3(this)"><a href="#">Semester 4<span class="arrow">&#9660;</span></a>
        	<ul id="sem4mdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem5m" onclick="test3(this)"><a href="#">Semester 5<span class="arrow">&#9660;</span></a>
        	<ul id="sem5mdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem6m" onclick="test3(this)"><a href="#">Semester 6<span class="arrow">&#9660;</span></a>
        	<ul id="sem6mdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem7m" onclick="test3(this)"><a href="#">Semester 7<span class="arrow">&#9660;</span></a>
        	<ul id="sem7mdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
		<li id="sem8m" onclick="test3(this)"><a href="#">Semester 8<span class="arrow">&#9660;</span></a>
        	<ul id="sem8mdet" style="display:none">
        		<li><a>Subject-1</a></li>
		<li><a>Subject-2</a></li>
	    <li><a>Subject-3</a></li>
	    <li><a>Subject-4</a></li>
	     <li><a>Subject-5</a></li>
	      
	</ul></li>
      </ul>
    </li>
</ul></nav></div></body></html>
