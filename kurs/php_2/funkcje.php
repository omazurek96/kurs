<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>funkcje</title>
</head>
<body>
   <?php
    //ścisła kontrola typów:
   // declare(scrict_types=1);
    function f(){
        echo "Janusz <br>";}
    f();

    function wyswietl($x){
        echo "Zmienna wynosi : $x <br>";

    }
     wyswietl(3);
    $test = 12;
    wyswietl ($test);

    function suma ($x, $y){
        $wynik = $x + $y;
        echo "Suma $x i $y wynik: $wynik<br>";
    }
    suma (2,5);

    function suma1($x, $y){
        return $x + $y;
    }
    echo "suma: ".suma1(13,4)."<br>";

    echo "średnia: " .suma1(13,7)/2 . "<br>";

    function f1(){
        echo "test<br>";
        return;
        echo "Janusz";
    }
    f1();

    function calkowita ($a){
        return $a;
    }
    echo calkowita(10.5 )."<br>";
    $one = calkowita(20.5);
    echo $one;
    echo gettype ($one);
    echo "<br>";

         function calkowita1 ($a):int{
        return $a;
    }
    echo calkowita1(10.5)."<br>";

    function rzeczywista($x) {
        return $x;
    }
    echo rzeczywista(3.5);

    function nowa ():int{
        return 1.25;

    }
    echo "<br>";
    echo nowa();



    ?>

</body>
</html>
