<!DOCTYPE html>
<html>
<body>
<?php

$numero = $_GET["numero"];

echo "<table border='1'>";

echo "<thead>";
echo "<tr>";
echo "<th>Multiplicación</th>";
echo "<th>Resultado</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";

for ($i = 1; $i <= 10;$i++) {
    echo "<tr>";

    echo "<td>$numero x $i =</td>";
    echo "<td>" . ($numero * $i) . "</td>";

    echo "</tr>";
}

echo "</tbody>";

echo "</table>";

?>
</body>
</html>