<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "9374070589";
$dbname = "sitalumnidb";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM uploadeddetails"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<b>FName&nbsp;&nbsp;&nbsp;&nbsp;LName&nbsp;&nbsp;&nbsp;&nbsp;Phone&nbsp;&nbsp;&nbsp;&nbsp;City&nbsp;&nbsp;&nbsp;&nbsp;Address</b><br>";

	while($row = $result->fetch_assoc()) {
        echo "" . $row["fname"]."&nbsp;&nbsp;&nbsp;&nbsp;". $row["lname"]."&nbsp;&nbsp;&nbsp;&nbsp;". $row["pnumber"]."&nbsp;&nbsp;&nbsp;&nbsp;" . $row["city"]."&nbsp;&nbsp;&nbsp;&nbsp;" . $row["address"]."<br>";
    }
}
else
   echo "No Alumnis Added!";
?>
