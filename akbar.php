<!DOCTYPE html>
<html>
<body>
<?php

for ($x = 1; $x <= 100; $x++) {
	if (($x % 3) == 0 and ($x % 5) == 0 ){
    		echo " APEL DAN JERUK <br>";
	} else if (($x % 3) == 0) {
  		echo "APEL <br>";
	} else if ($x % 5 == 0) {
    		echo "JERUK <br>";
	} 

}
?>

</body>
</html>