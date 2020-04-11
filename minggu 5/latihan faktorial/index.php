<?php
echo "Pengulangan dengan For";
for ($g = 1; $g <= 5; $g++) {
    echo "<br>";
    for ($h = 1; $h <= $g; $h++) {
        echo "$g";
    }
}

echo "<br><br>";
echo "Pengulangan dengan While";
$s = 1;
$t = 1;
while ($s <= 5) {
    echo "<br>";
    while ($t <= $s) {
        echo "$s";
        $t++;
    }
    $s++;
    $t = 1;
}

echo "<br><br>";
echo "Pengulangan dengan Do While";
$b = 1;
$c = 1;
do {
    echo "<br>";
    do {
        echo "$b";
        $c++;
    } while ($c <= $b);
    $b++;
    $c = 1;
} while ($b <= 5);
