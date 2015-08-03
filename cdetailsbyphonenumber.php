<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "9374070589";
$dbname = "sitalumnidb";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

$pnumber = $_POST['pnumber'];


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM uploadeddetails WHERE pnumber = '" . $pnumber . "'"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
		 echo "" . $row["fname"]."&nbsp;&nbsp;&nbsp;&nbsp;". $row["lname"]."&nbsp;&nbsp;&nbsp;&nbsp;". $row["pnumber"]."&nbsp;&nbsp;&nbsp;&nbsp;" . $row["city"]."&nbsp;&nbsp;&nbsp;&nbsp;" . $row["address"]."<br>";
    }
}
else
   echo "No students avaialble for this number!";
?>