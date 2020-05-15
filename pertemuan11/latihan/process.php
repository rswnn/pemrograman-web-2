<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "buku_tamu";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO isi_buku (FirstName, LastName, Username ,Age, Pesan)
    VALUES ('$_POST[firstname]','$_POST[lastname]', '$_POST[username]','$_POST[age]','$_POST[pesan]')";


if (mysqli_query($conn, $sql)) {
    fetchData($conn);
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
$conn->close();

function fetchData($conn)
{
    $sql = "select * from isi_buku";
    if ($data = $conn->query($sql)) {
        while ($row = $data->fetch_row()) {
            echo "$row[0] $row[1] $row[2] $row[5]<br>";
        }
    }
}
