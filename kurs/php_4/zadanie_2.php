

    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>

<!--
        //Zadanie
    Użytkowanik z formularza wysyła dane : imię, nazwisko,miasto, wiek
        Zapisz dane w tablicy asocjacyjnej(Klucze nazwij jak powyżej)
        Utwórz funkcję zawierającą hirdock i wyświetlając informaję poniżej.
        Jesteś [imię nazwisko] masz [lat] mieszkasz w [miasto]
-->
        <form method="post" action="zadanie_2.php">
            <input type="text" name="imie"  placeholder="Imię">
            <input type="text" name="nazwisko"  placeholder="Nazwisko">
            <input type="text" name="miasto"  placeholder="Miasto">
            <input type="number" name="wiek" placeholder="Wiek">
            <input type="submit" name="przycisk" value="Wyślij!">

        </form>
        <?php
        if (isset($_POST['przycisk']) && !empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['miasto'])&& !empty($_POST['wiek'])){
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $miasto = $_POST['miasto'];
            $wiek = $_POST['wiek'];
        }
        function wyswietl($a,$b,$c,$d){
            echo<<<E
            Jesteś $a $b masz $c lat, mieszkasz w $d.
E;
        }
        $daneUzytkownika = array(
            'imie'=> $imie,
            'nazwisko'=> $nazwisko,
            'miasto'=> $miasto,
            'wiek'=> $wiek
        );
        wyswietl ($daneUzytkownika['imie'], $daneUzytkownika['nazwisko'], $daneUzytkownika['wiek'], $daneUzytkownika['miasto']);


        ?>
    </body>
    </html>
