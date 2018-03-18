<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    //instrukcja if

    $x = 2;
    $y = 4;

//    if ($x < $y){
//        echo "zmienna x jest mniejsz od zmiennej y <br>";
//    }
//
//    if ($x < $y):
//        echo "zmienna x jest mniejsz od zmiennej y <br>";
//    endif;
//
//       if ($x < $y){
//        echo "zmienna x jest mniejsz od zmiennej y <br>";
//    }else if{
//           echo "zmienna x nie jest mniejsz od zmiennej y <br>";
//       }
//
//    if ($x < $y):
//        echo "zmienna x jest mniejsz od zmiennej y <br>";
//    elseif ($x == $y):
//        echo "zmienna x jest równa zmiennej y <br> ";
//    else:
//        echo "zmienna x nie jest mniejsz od zmiennej y <br>";
//    endif;
//

    ####### instrukcja switch

    $a = 5;
    switch($a){
        case 0:
            echo "Zmienna a == 0<br>";
            break;
        case 5:
            echo "Zmienna a == 5<br>";
            break;
        case 10:
            echo "Zmienna a == 10<br>";
            break;
    }

     switch($a):
        case 0:
            echo "Zmienna a == 0<br>";
            break;
        case 5:
            echo "Zmienna a == 5<br>";
            break;
        case 10:
            echo "Zmienna a == 10<br>";
            break;
   endswitch;

    ####################### Pętla for/ weź sobie z gita kurspam, tm samo break, if, for

    //continue, if , for ściągnąć z gita
    //

    ?>
</body>
</html>
