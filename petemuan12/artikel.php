<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = "artikel_db";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    echo 'Connected failure<br>';
}
echo 'Connected successfully<br>';

// =========== CREATE DATABASE =============
$sql = "CREATE DATABASE $dbname";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// =========== INSERT TABLE =============

$sql = "create table articles(articleID int(10), 
        judul varchar(100), penulis varchar(100), 
        lead varchar(255), 
        content TEXT, 
        waktu DATE)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Table is not created successfully " . mysqli_error($conn);
}

// =========== DELETE TABLE =============

$sql = "DROP TABLE articles";

if (mysqli_query($conn, $sql)) {
    echo "Table is deleted successfully";
} else {
    echo "Table is not deleted successfully\n";
}
mysqli_close($conn);
?>





<!-- ARTIKEL -->