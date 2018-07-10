<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donor";

$uname = $_POST['uname'];
$email = $_POST['email'];
$no = $_POST['no'];
$psw = $_POST['psw'];
$cpsw = $_POST['cpsw'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO donor (Dname, Email, Phone, Password)
VALUES ('$uname', '$email', '$no', '$psw')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>