<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Not Divisor Numbers</title>

</head>
<body>
<?php
$numbers = array();
if(isset($_GET['num'])){
    $num = intval($_GET['num']);
    for($i= $num; $i >= 1 ; $i--){
        if($num % $i != 0){
            $numbers[] = $i;
        }
    }
}
?>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?= implode(" ",$numbers)?>
</body>
</html>