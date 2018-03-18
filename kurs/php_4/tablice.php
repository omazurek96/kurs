<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tablice</title>
</head>
<body>
    <?php

    //tablice imdeksowane numerycznie

//    $kolor = array ('biały' , 'ziolony' , 'czerwony' , 'aqua');
//    echo 'ilość elementów tablicy: '.count($kolor);
//    echo 'początkowa zawartość tablicy: <br> ';
//    //$kolor[0] = "czarny";
//    for ($i=0; $i<count($kolor); $i++):
//    $x= $i+1;
//    echo"Element[$x]: $kolor[$i]  <br>";
//
//    endfor;

//    $tab = array('biały' , 'zielony' , 'czerwony' , 'aqua');
//	$n = count($tab);
//	for ($i=0;$i<$n; $i++)
//		echo $tab[$i]."<br />";

//    function wyswietl($kolor){
//         for ($i=0; $i<count($kolor); $i++):
//        $x= $i+1;
//        echo"Element[$x]: $kolor[$i] <br>";
//        endfor;
//    }
//
    ###########################Tablice asocjacyjne#####################################


    $dane = array(
    'imie' => 'Janusz',
    'nazwisko' => 'Nowak',
    'miasto' => 'Poznań',
    'wiek' => 18

    );
       // echo $dane[0];//błąd
        echo $dane['imie']."<hr>";

        $z = <<<TAB
        Imię: $dane[imie]
        Nazwisko: $dane[nazwisko]
        Miasto: $dane[miasto]
        Wiek: $dane[wiek]
TAB;
    //echo nl2br($z);

    ############################### RFOREACH #############################################

    foreach($dane as $wartosc){
        echo"Warość: $wartosc<br> ";
    }

    foreach($dane as $klucz => $wartosc){
        echo" $klucz:$wartosc<br> ";
    }

    #################Tablica wielowymiarowa ###################################
    $cyfry = array(
        array(1,2,3,4),
        array(5,6,7),
        array(8),
        array(9,10)
    );

    foreach($cyfry as $wartosc){
       foreach($wartosc as $x){
           echo $x;
       }
         echo '<br>';
    }


    ################################## Sortowanie #################################

    $tab = array(10,2, 7, 29, 73,55);
    function w($tab){
    foreach($tab as $w){
        echo"$w ";
        }
    }
    w($tab);
    //rosnąco:

    sort($tab);
    w($tab);
    echo '<br>';
    //malejąco:

    rsort($tab);
    w($tab);
    echo '<br>';
    ############################################################################################################################

    $tab = array("Julia" , "anna", "Tomek", "Martyna");
     w($tab);


    sort($tab);
    w($tab);
    echo '<br>';


    rsort($tab);
    w($tab);
    echo '<br>';
    ############################################# sortowanie tablicy asocjacyjnej################################################
    #############################################################################################################################

    $nazwiska = array(
    'pierwszy' => 'nowak',
    'drugi' => 'kowal',
    'trzeci' => 'ananas',
    'czwarty' => 'zając'

    );
    w($nazwiska);
    asort($nazwiska);
    echo '<br>';
    arsort($nazwiska);
    echo '<br>';
    ksort($nazwiska);
    echo '<br>';
    w($nazwiska);

    ########################################## Wyświetlanie tablicy ####################################################
    echo '<br>';
    $tab4 = array(2,1,'Janusz',4.5,56,3,8);

    var_dump($tab4);
    echo '<br>';

    print_r($tab4);
    echo '<br>';

    echo '<pre>';
    print_r($tab4);
    echo '</pre>';
    echo '<br>';
##########################################################################################################################
    //Zadanie
    Użytkowanik z formularza wysyła dane : imię, nazwisko,miasto, wiek
        Zapisz dane w tablicy asocjacyjnej(Klucze nazwij jak powyżej)
        Utwórz funkcję zawierającą hirdock i wyświetlając informaję poniżej.
        Jesteś [imię nazwisko] masz [lat] mieszkasz w [miasto]


    ?>
</body>
</html>
