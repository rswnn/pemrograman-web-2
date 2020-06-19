<!-- check condition section -->
<?php
session_start();

if (!isset($_SESSION['username'])) {
    die("Anda Belum login");
}
?>
<h2>Selamat Datang</h2>

<?php

echo $_SESSION['username'];
echo "<br>";
echo "<a href='delete-section.php'>Hapus Section</a>";
?>