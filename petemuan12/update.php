<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "lat_dbase";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = 'UPDATE tbl_mhs SET Age="22" WHERE FirstName="Glenn"';

if (mysqli_query($conn, $sql)) {
    echo "New record update successfully";
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
$conn->close();
?>

<!-- UPDATE -->