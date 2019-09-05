<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function findMaxArr($arr){
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++){
        for ($j = 0; $j < count($arr[$i]); $j++){
            if ($max < $arr[$i][$j]){
                $max = $arr[$i][$j];
            }
        }
    }return $max;
}
$arr = [[2,4,5,7],[1,9,6,3]];
echo "Giá trị lớn nhất: " . findMaxArr($arr);
?>
</body>
</html>
