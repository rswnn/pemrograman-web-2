<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Buku Tamu</title>
</head>

<body>
    <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = "buku_tamu";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if (!$conn) {
        echo 'Connected failure<br>';
    }
    $sql = "CREATE DATABASE $dbname";

    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    }
    createTable();

    $conn->close();

    function createTable()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = "buku_tamu";
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if (!$conn) {
            die('Could not connect: ' . mysqli_connect_error());
        }

        $sql = "CREATE TABLE isi_buku(id int NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),FirstName varchar(15), LastName varchar(15), Username varchar(15), Age int, Pesan varchar(256))";

        if (mysqli_query($conn, $sql)) {
            echo "Table created successfully";
        }
    }
    ?>
    <div class="container">
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Depan</label>
                <input class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan" name="firstname">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Belakang</label>
                <input class="form-control" id="exampleFormControlInput1" placeholder="Nama Belakang" name="lastname">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Panggilan</label>
                <input class="form-control" id="exampleFormControlInput1" placeholder="Username" name="username">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Umur</label>
                <input class="form-control" id="exampleFormControlInput1" placeholder="Umur" name="age">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Pesan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"></textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
</body>

</html>