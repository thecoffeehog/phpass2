<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "9374070589";
$dbname = "sitalumnidb";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pnumber = $_POST['pnumber'];
$altpnumber = $_POST['altpnumber'];
$email = $_POST['email'];
$altemail = $_POST['altemail'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$country = $_POST['country'];



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO uploadeddetails	(fname,lname,pnumber,altpnumber,email,altemail,address,state,city,country)
VALUES ('$fname','$lname', '$pnumber', '$altpnumber', '$email' , '$altemail' , '$address' ,'$state','$city' , '$country')";

if($conn->query($sql) === TRUE) {
	echo "Your details added scuccessfully! Check all details ";
	//TODO: Add all details link here
	echo "<a href='/phpass2/cdetailsbyphonenumber.html'>here</a>";
}

?>
