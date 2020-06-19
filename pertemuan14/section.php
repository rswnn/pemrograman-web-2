<!-- start section -->
<?php
session_start();

$_SESSION['user_id'] = '1';
$_SESSION['username'] = 'Riswan';

echo $_SESSION['user_id'];
echo $_SESSION['username'];
?>