<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $l =10;//zmienna globalna
    echo $l;

//    function zmien(){
//       echo "Wartość \$l w funkci wynosi: ".$_GLOBALS['l'];
//    }
//    zmien();
//    echo "Wartość zmiennej poza funkcią wynosi : $l";

    // zmienne lokalne

    function f (){
        $liczba =20;
        echo "zmienna liczna wewnątrz finkcji wynosi :.$liczba <br>";// liczba tylko dostępna wewnątrz finkci
    }
    f();

    ################################# zmienne statyczne #####################################################

    function suma (){
        $x = 4;
        $x += 10;
        echo "Zmienna \$x wynosi: $x <br>";
    }
    suma();

    function suma1(){
         static $y=4;
        $y+=10;
        echo "Zmienna \$y wynosi: $y <br>";
    }
         suma1();
         suma1();
         suma1();

    ############################################ Przekazywanie argumentów #############################################
    //przekazywanie argówntów przez wartość

    function dodajTrzy ($l){
        $l = $l + 3;
    }
        $liczba = 5;
        echo "\$liczba przed wywoałaniem finkcji wynosi $liczba <br>";
        dodajTrzy($liczba);
        echo "\$liczba po wywoałniu wynosi : $liczba <br>";

    //przez referencje

    function dodajCztery(&$l){
        $l = $l + 4;
    }
        $liczba = 5;
        echo "\$liczba przed wywoałaniem finkcji wynosi $liczba <br>";
        dodajCztery($liczba);
        echo "\$liczba po wywoałniu wynosi : $liczba <br>";

    ################################### argumenty domyślne #############################################################

    function dodaj($x, $y = 4){
        return $x + $y;
    }
    echo dodaj(2,4);
    echo "<br>";


    ############################ argumenty i typy danych ##############################################################

    function mnozenie (int x, int y =5 ){
        return $x * $y;
    }
    echo mnozenie(1);


    #Napisz finkcję, która będzie przyjmowała 2 argumenty liczbowe z formularza.
    #Na ekranie pod formularzem będzie zwrócony mniejszy z nich np. Najmnejsza wartość:
    #Podnieś pierwszy podany argument do potęgi drugiego argumentu i wyświetl w formacje "3 dopotęgo 10 wyosi............."

    ?>


</body>
</html>
