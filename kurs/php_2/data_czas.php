<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Data i czas</title>
</head>
<body>
    <?php
    #################funkcja date ##############
    echo 'rok - miesiąc - dzień: '.date("Y-m-d")."<br>";//rok - miesiąc - dzień: 2018-03-17
    echo date ("d-m-Y")."<br>";
    echo date ("jS , M Y"). "<br>";
    echo date ("G: i : s"). "<br>";
    echo date ("h: i : sa"). "<br>";
    echo date ("Y-m-d G:m:s"). "<br>";
    ####################funkcia getdate################

    $data = getdate();
    $dzien = $data['mday'];
     if ($dzien <10){
         $dzien = "0".$dzien;
     }
    $miesiac = $data['mon'];
     if ($miesiac <10){
         $miesiac = "0".$miesiac;
     }
    $rok = $data['year'];
    $dzienTygodnia = $data['wday'];

    echo $dzien." ".$miesiac." ".$rok." ".$dzienTygodnia."<br>";
    //Zadanie
   // Wyświetl datę w następującym formacjie:
   // 17 marzec 2018 | sobota
        switch ($miesiac){
            case 1 : $miesiac = 'styczeń';break;
            case 2 : $miesiac = 'luty';break;
            case 3 : $miesiac = 'marzec';break;
            case 4 : $miesiac = 'kwiecień';break;
            case 5 : $miesiac = 'maj';break;
            case 6 : $miesiac = 'czerwiec';break;
            case 7 : $miesiac = 'lipiec';break;
            case 8 : $miesiac = 'sierpirń';break;
            case 9 : $miesiac = 'wrzesień';break;
            case 10: $miesiac = 'październik';break;
            case 11: $miesiac = 'listopad';break;
            case 12: $miesiac = 'grudzień';break;
        }
        switch ($dzienTygodnia){
            case 1: $dzienTygodnia = 'poniedziałek'; break;
            case 2: $dzienTygodnia = 'wtorek'; break;
            case 3: $dzienTygodnia = 'środa'; break;
            case 4: $dzienTygodnia = 'czwartek'; break;
            case 5: $dzienTygodnia = 'piątek'; break;
            case 6: $dzienTygodnia = 'sobota'; break;
            case 7: $dzienTygodnia = 'niedziela'; break;
        }

     echo $dzien." ".$miesiac." ".$rok." | ".$dzienTygodnia. "<br>";

    ######################################## maketime ############################################

    $rok1 = 2018;
    $miesiac1 = 3;
    $dzien1= 17;

    $rok2 = 1990;
    $miesiac2 = 3;
    $dzien = 17;

    $time1 = mktime(0,0,0,$miesiac1,$dzien1, $rok1);

    ######################################  microtime  ##############################################

    $t1 = microtime (true);


    $t2 = microtime (true);

    $t = round ($t2 - $t2, 4);

    echo $t;

    echo strtotime ("now");

    ?>
</body>
</html>
