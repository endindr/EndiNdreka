<?php
$kursi = 97; // 1 € = 97 Lek

$shifra = readline("Shkruaj shifrën që do të konvertosh: ");

$zgjedhja = readline("Zgjidh drejtimin (1: Lek -> Euro, 2: Euro -> Lek): ");

$vlera = floatval($shifra);

if ($zgjedhja == "1") {
    $rezultat = $vlera / $kursi;
    echo "$vlera Lek = " . round($rezultat, 2) . " Euro\n";
} elseif ($zgjedhja == "2") {
    $rezultat = $vlera * $kursi;
    echo "$vlera Euro = $rezultat Lek\n";
} else {
    echo "Zgjedhje e pavlefshme!\n";
}
