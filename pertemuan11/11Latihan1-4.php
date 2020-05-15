<!-- Koneksi Dengan database  -->
<?php
// $servername = 'localhost';
// $dbusername = 'root';
// $dbpassword = '';
// $link = new mysqli("$servername", "$dbusername", "$dbpassword")
//     or die(" Not able to connect to server ");
// if ($link) {
//     echo "ok....koneksi berhasil";
// }
?>

<!-- Membuat Database -->

<?php
// $dbhost = 'localhost';
// $dbuser = 'root';
// $dbpass = '';
// $dbname = "lat_dbase";
// $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

// if (!$conn) {
//     echo 'Connected failure<br>';
// }
// echo 'Connected successfully<br>';
// $sql = "CREATE DATABASE $dbname";

// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
// mysqli_close($conn);
?>

<!-- Membuat Table -->

<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $dbname = "lat_dbase";
// $conn = mysqli_connect($host, $user, $pass, $dbname);

// if (!$conn) {
//     die('Could not connect: ' . mysqli_connect_error());
// }
// echo 'Connected successfully<br/>';

// $sql = "create table tbl_mhs(
//     mhsID int NOT NULL AUTO_INCREMENT,
//     PRIMARY KEY(mhsID),FirstName varchar(15),
//     LastName varchar(15),
//     Age int
//     )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table created successfully";
// } else {
//     echo "Table is not created successfully ";
// }
// mysqli_close($conn);
?>

<!-- Insert data -->

<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $dbname = "lat_dbase";

// // Create connection
// $conn = new mysqli($host, $user, $pass, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// $sql_pertama = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
//     VALUES ('Karina', 'Suwandi', '29')";

// $sql_kedua = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
//     VALUES ('Glenn', 'Gandari', '32')";

// if (mysqli_query($conn, $sql_pertama)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql_pertama . "" . mysqli_error($conn);
// }
// if (mysqli_query($conn, $sql_kedua)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql_kedua . "" . mysqli_error($conn);
// }
// $conn->close();
?>

<!-- FETCH ROWS -->

<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $dbname = "lat_dbase";

// // Create connection
// $conn = new mysqli($host, $user, $pass, $dbname);
// if ($conn->connect_errno) {
//     echo "Failed to connect to MySQL: " . $conn->connect_error;
//     exit();
// }

// $sql = "select * from tbl_mhs";
// if ($data = $conn->query($sql)) {
//     while ($row = $data->fetch_row()) {
//         echo "$row[0] $row[1] $row[2]<br>";
//     }
// }
?>
<!-- FETCH ARRAY -->

<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $dbname = "lat_dbase";

// // Create connection
// $conn = new mysqli($host, $user, $pass, $dbname);
// if ($conn->connect_errno) {
//     echo "Failed to connect to MySQL: " . $conn->connect_error;
//     exit();
// }

// $sql = "select * from tbl_mhs";
// if ($data = $conn->query($sql)) {
//     while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
//         echo "$row[FirstName] $row[LastName] $row[Age]<br>";
//     }
// }
?>

<!-- FETCH NUM ROWS -->

<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $dbname = "lat_dbase";

// // Create connection
// $conn = new mysqli($host, $user, $pass, $dbname);
// if ($conn->connect_errno) {
//     echo "Failed to connect to MySQL: " . $conn->connect_error;
//     exit();
// }
// $sql = "select * from tbl_mhs";
// if ($result = mysqli_query($conn, $sql)) {
//     // Return the number of rows in result set
//     $rowcount = mysqli_num_rows($result);
//     echo "jumlah record $rowcount";
// }
?>