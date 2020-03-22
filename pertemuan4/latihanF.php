<?php
$duaBelas = 12;
echo "<h1>Tabel Perkalian</h1>";
echo "=================== <br/>";
for($i = 15 ;$i<= 45 ;$i++) {
if ($i % 2 == 0 ) continue ;
else
    $hasil = $duaBelas * $i;
  print("12 * $i  =  $hasil <br/>" );
}
?>