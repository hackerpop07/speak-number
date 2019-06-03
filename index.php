<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movedNumber = $_POST["number"];
    function move()
    {
        global $movedNumber;
        if ($movedNumber >= 0 && $movedNumber < 10) {
            switch ($movedNumber) {
                case 1:
                    $movedNumberDS= "mot";
                    break;
                case 2:
                    $movedNumberDS= "hai";
                    break;
                case 3:
                    $movedNumberDS= "ba";
                    break;
                case 4:
                    $movedNumberDS= "bon";
                    break;
                case 5:
                    $movedNumberDS= "nam";
                    break;
                case 6:
                    $movedNumberDS= "sau";
                    break;
                case 7:
                    $movedNumberDS= "bay";
                    break;
                case 8:
                    $movedNumberDS= "tam";
                    break;
                case 9:
                    $movedNumberDS= "chin";
                    break;
                case 0:
                    $movedNumberDS= "khong";
                    break;
            }
            return $movedNumberDS;
        }
        if ($movedNumber > 0 && $movedNumber < 100) {
            $donvi=$movedNumber%10;
            switch ($donvi) {
                case 1:
                    $donviDS= "mot";
                    break;
                case 2:
                    $donviDS= "hai";
                    break;
                case 3:
                    $donviDS= "ba";
                    break;
                case 4:
                    $donviDS= "bon";
                    break;
                case 5:
                    $donviDS= "nam";
                    break;
                case 6:
                    $donviDS= "sau";
                    break;
                case 7:
                    $donviDS= "bay";
                    break;
                case 8:
                    $donviDS= "tam";
                    break;
                case 9:
                    $donviDS= "chin";
                    break;
                case 0:
                    $donviDS= "khong";
                    break;
            }
            $chuc=($movedNumber-$donvi)/10;
            switch ($chuc) {
                case 1:
                    $chucDS= "mot";
                    break;
                case 2:
                    $chucDS= "hai";
                    break;
                case 3:
                    $chucDS= "ba";
                    break;
                case 4:
                    $chucDS= "bon";
                    break;
                case 5:
                    $chucDS= "nam";
                    break;
                case 6:
                    $chucDS= "sau";
                    break;
                case 7:
                    $chucDS= "bay";
                    break;
                case 8:
                    $chucDS= "tam";
                    break;
                case 9:
                    $chucDS= "chin";
                    break;
                case 0:
                    $chucDS= "khong";
                    break;
            }
            return $chucDS." ".$donviDS;
        }
    }
echo move();
}

?>
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
<form method="POST">
    <input type="number" name="number" placeholder="number">
    <input type="submit" value="onclick">
</form>
</body>
</html>
