<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ciągi znakowe</title>
</head>
<body>
    <?php
        $liczba = 10;
        $ciag = "test";
        $wiek = "25";

        $text1 = "\$liczba wynosi: $liczba";
        $text2 = "\$liczba wynosi: $liczba";

        $text3 = <<<"ID"
        Masz $wiek lat
ID;
   // echo $text3;

    //$s1 = 'abc';
    //$s2 = 'def';

   // $s3 = $s1.$s2;
    //echo $s3;

    //Szybkość wyswietlaia ciągó znakowych - kolejno od najszybszej.
     #heardock ze zmienną - najszybsa metoda
     #cudzysłów - 2
     #heardock bezpośrednio
     #apostrof
     #przecinek - pięciokrotnie wolniejsze od pozostałych

    ?>
    <form>
        <input type="text" name="kraj" placeholder="kraj">
        <input type="number" name="wiek" placeholder="wiek">
        <input type="text" name="imie" placeholder="imię">
        <input type="submit" name="przycisk">
    </form>

    <?php
        if (isset($_GET['kraj'])){
            $panstwo = $_GET['kraj'];
        }else{
            $panstwo = 'brak';
        }
    echo "Twój kraj: $panstwo <br>";

    $wiek = $_GET['wiek'] ?? 'brak';
    echo "Twój wiek: $wiek <br>";

    $imie = isset($_GET['imie']) ? $_GET['imie'] : 'brak imienia';
    echo "Twoje imię: $imie <br>";

    //spaceship
    $a = 'a';
    $b = 'b';

    echo $a <=> $b; //-1
    echo 'c' <=> 'c'; //0
    echo 'd' <=> 'c'; //1

//grawis, lewy apostrof

    #$polecenie = `dir`;
    //echo $polecenie;
    #echo "<pre> $polecenie </pre>";

    $wiersz = <<<ID
    Mam
    na imię
    Janusz
ID;
    echo "<h3>przed użuciem funkci nl2br: </h3>";
    echo $wiersz;
    echo "<h3>po użuciu funkci nl2br: </h3> ";
    echo nl2br($wiersz);

    #################################### Funkcje zmieniające wielkość liter##########################################################
     $ciag = "maM nA iMię janUsZ";
    echo " <br> $ciag";

    $male = strtolower($ciag);//wszystkie małe
    echo "<br>$male";

    $duze = strtoupper($ciag);// wszystkie duże

    $pierwszaDuza = strtolower($ciag);
    $pierwszaDuza = ucfirst($pierwszaDuza);
    echo "<br> $pierwszaDuza";
    $wyrazy = ucwords($pierwszaDuza);
    echo "<br> $wyrazy";




    ?>
</body>
</html>
