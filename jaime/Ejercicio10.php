<?php

echo "<table border='1' <tr>";
//===========================================
echo "<tr>";
for ($cab = 1; $cab <= 12; $cab++) {
    echo "<td>TABLA DEL $cab</td>";
}
echo "</tr>";
//===========================================

echo "<tr>";
for ($i = 1; $i <= 12; $i++) {
    echo "<td>";
    for ($j = 1; $j <= 12; $j++) {
        echo "$i * $j= " . ($i * $j) . "<br>";
    }

    echo "</td>";
}

echo "</tr>";

echo "</table>";
?>

