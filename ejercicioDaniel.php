


    
<!DOCTYPE html>
<html>
<body>
<?php

$var1 = 3;
$var2 = 5;
$c= (($var2 ** 2) >= ($var1 + $var2)) xor ($var1 >= !($var2 % $var1));



echo "valor c:  ".var_dump($c)." <br>";


?>
</body>
</html>