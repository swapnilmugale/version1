<?php



//input from enquiry form.
if(isset($_POST['submit']))
{

$name = $_POST['name'];
$country = $_POST['CountryCode'];
$number = $_POST['mobile'];
$email =  $_POST['email'];
}
//database connection information 
$servername = "localhost";
$database = "parkdb";
$username = "root";
$password = "";

//validate
$namerr = '';

if(isset($_POST['submit']))
{
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
	  }
	
	
}

//connect to db

$conn = mysqli_connect($servername, $username, $password, $database);

//check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


//echo "Connected successfully";

if(!empty($name)&& !empty($Phone)  && !empty($country) && !empty($Email) )
{

$query="insert into `enquiry-tb` (`Name`, `country`, `Phone`, `Email`) values('$name','$country','$number','$email')";

if($conn->query($query) === TRUE)
{
	//echo "data insert";
}

//echo "name=$name country = $country number=$number";
}
mysqli_close($conn);



?>