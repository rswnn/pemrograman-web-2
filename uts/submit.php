<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riswan Ardiansah 171011401402</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="result">
        <div class="result-header">
            <p>Data Pemantauan COVID19 Wilayah <?php echo $_POST["wilayah"]; ?> <br>
                <?php $tanggal = new DateTime('now', new DateTimezone('Asia/Jakarta')); ?>
                Per <?php echo $tanggal->format("d-F-y H:i:s"); ?> <br>
                <?php echo $_POST['nama']; ?>
                <?php echo $_POST['nim']; ?>
        </div>
        <table>
            <tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
            <tr>
                <th><?php echo $_POST["positive"]; ?></th>
                <th><?php echo $_POST["dirawat"]; ?></th>
                <th><?php echo $_POST["dirawat"]; ?></th>
                <th><?php echo $_POST["meninggal"]; ?></th>
            </tr>
        </table>
        </p>
    </div>
    <?php
    $wilayah = $_POST["wilayah"];
    $positive = $_POST["positive"];
    $dirawat = $_POST["dirawat"];
    $dirawat = $_POST["dirawat"];
    $meninggal = $_POST["meninggal"];
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $fp = fopen('data.txt', 'w');
    fwrite($fp, $wilayah);
    fwrite($fp, $positive);
    fwrite($fp, $dirawat);
    fwrite($fp, $dirawat);
    fwrite($fp, $meninggal);
    fwrite($fp, $nama);
    fwrite($fp, $nim);
    fclose($fp);
    ?>
</body>

</html>