<?php
$rows = 5;

for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "&nbsp;"; // Menambahkan spasi kosong
        echo "&nbsp;";
    }
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
?>