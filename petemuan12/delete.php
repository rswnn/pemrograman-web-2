<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "lat_dbase";
$tbl_name = "tbl_mhs";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo 'Connected successfully<br>';

// =========== DELETE DATABASE =============
$sql = "DROP DATABASE $dbname";

if (mysqli_query($conn, $sql)) {
    echo "Database terhapus";
} else {
    echo "err " . mysqli_error($conn);
}

// =========== DELETE TABLE =============

$sql = "DROP TABLE $tbl_name";

if (mysqli_query($conn, $sql)) {
    echo "Table is deleted successfully";
} else {
    echo "Table is not deleted successfully\n";
}
mysqli_close($conn);
?>

<!-- DELETE -->