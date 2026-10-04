<!DOCTYPE html>
<html>
<body>
<?php
$factorial = 5;
echo "facorial de ".$factorial;
$aumento = 1;
for ($i = 1; $i <= $factorial; $i++) {
     $aumento *= $i;
}
 
 
echo $aumento;
?>
</body>
</html>