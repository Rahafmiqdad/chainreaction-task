<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(1,3, 2,7, 6 ,4, 5); sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>

</body>
</html>

