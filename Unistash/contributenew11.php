<?php

$host="localhost";
$dbuser="root";
$pass="";
$dbname="unistash";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);

if(mysqli_connect_errno())
{

	die("Connection Failed!". mysqli_connect_errno());
}
?>

<html>
<head>
<title>Contribute Page</title>
<link rel="stylesheet" type="text/css" href="fullstyle11.css">

</head>
<body>
	
 <div class="fake">

<?php


if(!isset($_POST['signupbtn']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$mno=$_POST['mno'];

$year=$_POST['year'];

 if (empty($name)||empty($email)||empty($mno)||empty($year))
 	 
{

 	 echo "Oops! Can't leave any field blank!"; 
 	}
 	
    else

    {
    	$sql="INSERT INTO contribute1 (name,email,mno,year)".
    	"VALUES('$name','$email','$mno','$year')";

    	$res=mysqli_query($conn,$sql); 

    	if(!$res)
    	{

    		die("Query Failed!". mysqli_error($conn));
    	}
    	else{
    		echo "Hello $name"."<br>";
    		echo "Your response has been recorded successfully!"."<br>";
    	     echo "We will contact you soon"."<br>";
            
    	}

    }
}
else{
	echo "FORM NOT SUBMITTED" ;
}
    

?>

</div>

<p class="true"><a href="contribute11.php">Click Here to go back</a></p>
</body>
</html>