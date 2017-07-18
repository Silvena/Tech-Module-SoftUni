<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<?php
$numbers = array();
if(isset($_GET['num'])){
    $num = intval($_GET['num']);
    for($i= 1; $i <= $num; $i++){
        $numbers[] = $i;
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