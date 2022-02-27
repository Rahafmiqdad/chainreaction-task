



<html>
<body>

<?php
$string = "#CD5C5C";
if( preg_match('/^#[a-f0-9]{6}$/i', $string) )
{
    echo "True";
}
else
{
    echo "False";
}
?>

</body>
</html>
