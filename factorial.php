
<?php


function factorial($n)
{
    if ($n == 0)
        return 1;
    return $n * factorial($n - 1);
}

$sayi = 3;
echo "Sayı: ",$sayi," Faktoriyeli: ", factorial($sayi);


?>