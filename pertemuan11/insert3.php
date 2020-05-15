<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "lat_dbase";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
    VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    fetchData($conn);
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
$conn->close();

function fetchData ($conn) {
    $sql = "select * from tbl_mhs";
    if ($data = $conn->query($sql)) {
        while ($row = $data->fetch_row()) {
            echo "$row[0] $row[1] $row[2]<br>";
        }
    }
    }
