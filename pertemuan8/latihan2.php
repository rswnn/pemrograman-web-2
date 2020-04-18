<html>
<head><title>Contoh Penggunaan UDF</title></head>
<body>
<! Menentukan Form Input>
<form >
Masukkan Bilangan Pertama : <br>
<input type="text" name="A" size=10><br>
Masukkan Bilangan Kedua : <br>
<input type="text" name="B" size=10><br>
<input type="submit" value="hitung">
</form>
<!membandingkan 2 buah bilangan yang diinput>
<?php
 $a=$_GET["A"];
 $b=$_GET["B"];
 Function jumlah($A,$B)
 {
 $jumlahbil=$A + $B;
 Return $jumlahbil; 
}
Function kurang($A,$B)
{
$kurangbil=$A - $B;
Return $kurangbil;
}
Function kali($A,$B)
{
$kalibil=$A * $B;
Return $kalibil;
}
Function bagi($A,$B)
{
$bagibil=$A / $B;
Return $bagibil;
}
Echo "<br>";
Echo ("Bilangan Pertama : ");
Echo "<br>";
Echo ("Bilangan Kedua : ");
Echo $b;
Echo "<br><br>";
Echo "Hasil Penjumlahan 2 buah bilangan ";
Echo "<br>";
$jumlahbil=&jumlah($a,$b);
Printf( "Penjumlahan antara : %d + %d = %d ",$a,$bx,$jumlahbil);
Echo "<br><br>";
Echo "Hasil Pengurangan 2 buah bilangan ";
Echo "<br>";
$kurangbil=&kurang($a,$b);
Printf( "Pengurangan antara : %d - %d = %d ",$a,$b,$kurangbil);
Echo "<br><br>";
Echo "Hasil Perkalian 2 buah bilangan ";
Echo "<br>";
$kalibil=&kali($a,$b);
Printf( "Perkalian antara : %d * %d = %d ", $a, $b, $kalibil);
Echo "<br><br>";
Echo "Hasil Pembagian 2 buah bilangan ";
Echo "<br>";
$bagibil=&bagi($a,$b); 
Printf( "Pembagian antara : %d / %d = %d ",$a,$b,$bagibil);
Echo "<br><br>";
?>
</body>
</html> 