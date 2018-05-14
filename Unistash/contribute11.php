<!DOCTYPE html>
<html>
<head>
<style> 
body {
    background-image: url("cont.jpg");
    background-color: #cccccc;
    background-size: cover;
    margin-top: -5px;
}



.container{

	margin: 0 auto;
	margin-top: 30px;
    padding: 30px;
	background-color:  rgba(0, 0, 0, 0.2);
	width: 400px;
	height: 400px;
	text-align: centre;
	font-color: #ffff;
	border-radius: 5px;
}


.content{
font-color: #fffff;
width:50px;
height:60px;
text-align:center;
margin-left: 120px
}

.new
{font-color: #fffff;
font-size:20px;
font-family:monospace;
width:500px;
height:60px;
text-align:center;}

.clear{
margin-left:170px;}
.navi h1{
font-color:white;
margin-top:100px;
text-align: center;
}

.navi p {
font-color: #fffff;
font-size: 20px;
text-align:center;
}

.navi{
	width: 100%;
	float:right;
	background-color: rgba(0, 0, 0, 0.2);
	height: 80px;
	margin:0px;
	padding: 0px;
border-radius: 5px
	
}

.para{

font-size:30px;
font-family:cursive;
}

nav{
	float: right;
}

nav ul li{
	list-style-type: none;
	display: inline-block;
	margin-left: 20px;
	padding-right: 80px;
	padding-top: 10px;
transition: 0.8s all;
}

nav ul li:hover{
	background-color:#f39d1a;
}

nav ul li a{
	text-decoration: none;
	color: white;
	padding: 50px;
	font-family: georgia;
	font-size: 18px;
}



</style>
</head>

<body>

	
	<div class="navi">
	<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About us</a></li>
					<li><a href="new1.php">Course Material</a></li>
					<li><a href="video.php">Video Lectures</a></li>
					<li><a href="contribute11.php">Contribute</a></li>
					
					
</ul>		
</nav>

	<h1><em>Contribute</em></h1>
	<p>Whether it’s bug fixing, feature development or contributions to the designing process, designers and developers from the University can help make the website one of the most advanced and efficient frameworks.</p>
<div class="container">

<p class="para"> <b><em>Join Now!</em></b></p>
<form action="contributenew11.php" method="POST">
  <div class="content">
    <label class="new"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    </div>
     <div class="content">

    <label class="new"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
</div>
<div class="content">
 <label class="new"><b>Phone</b></label>
    <input type="text" placeholder="Enter Contact Number" name="mno" required>
</div>

 <div class="content">

     <label class="new"><b>Year</b></label>
    <input type="text" placeholder="Enter Year" name="year" required>
    </div>

   

    <div class="clear">
      <button type="submit" class="signupbtn">Submit</button>
    </div>
  
</form>
</div>
</div>
</body>
</html>
