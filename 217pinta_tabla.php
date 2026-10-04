<!DOCTYPE html>
<html>
<body>
<?php

$ordenadas = $_GET["ordenadas"];

$abcisas = $_GET["abcisas"];
echo "<table border='1'>";

for ($i = 1; $i <= $ordenadas;$i++) {
    echo "<tr>";

for ($j = 1; $j <= $abcisas;$j++) {
    echo "<td> $i,$j </td>";
    ;
}
    echo "</tr>";
}


echo "</table>";

?>
</body>
</html>