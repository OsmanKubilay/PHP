
<?php
$Bolunen = 2;
$Kalan = 0;
$Sayi = 8;
do
{
    $Kalan = $Sayi%$Bolunen;
    $Bolunen = $Bolunen + 1;
} while ($Kalan !=0 AND $Bolunen<$Sayi);
if (($Bolunen<$Sayi) || ($Sayi == 0)){

    echo ("Sayiniz asal bir sayi DEGIL");
}
else {
    echo ("Sayiniz ASAL  bir sayidir.");
}
?>