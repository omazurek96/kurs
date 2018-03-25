<?php
session_start();

if (isset($_POST['mail'])) {
    //Udana walidacja? Załóżmy, że tak xD
    $wszystko_ok = true;

    //Sprawdź nickname
    $nick = $_POST['nick'];

    //Sprawdzenie długości nick-u
    if ((strlen($nick) < 3) || (strlen('nick') > 20)) {
        $wszystko_ok = false;
        $_SESSION['e_nick'] = "Nick musi posiadać od 3 do 20 znaków!";
    }

    if (ctype_alnum($nick) == false) {
        $wszystko_ok = false;
        $_SESSION['e_nick'] = "Nick może składac się tylko z liter i cyfr (bez polskich znaków)";
    }

    //Sprawdź poprawność maila
    $mail = $_POST['mail'];
    $mailB = filter_var($mail, FILTER_SANITIZE_EMAIL);
    if ((filter_var($mailB, FILTER_VALIDATE_EMAIL) == false) || ($mailB != $mail)) {
        $wszystko_ok = false;
        $_SESSION['e_mail'] = "Podaj poprawny e-mail!";

    }

    //Sprawdź poprawność hasła

    $haslo = $_POST['haslo'];
    $haslo1 = $_POST['haslo1'];

    if ((strlen($haslo) < 8) || (strlen($haslo) > 20)) {
        $wszystko_ok = false;
        $_SESSION['e_haslo'] = "Hasło musi zawierać od 8 do 20 znaków";
    }
    if ($haslo != $haslo1) {
        $wszystko_ok = false;
        $_SESSION['e_haslo'] = "Podane hasłą różnią się!";
    }

    $haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);

    //czy zaakceptowano regulamin
    if (!isset($_POST['regulamin'])) {
        $wszystko_ok = false;
        $_SESSION['e_regulamin'] = "Potwierdź akceptację regulaminu!";
    }

    //Odznaczenie pola "nie jestem robotem"
    $sekret = "6LeDrU4UAAAAAFvy-8MTanF8GLQG58lr-f5bgsn1";
    $grecaptcharesponse = $_POST['g-recaptcha-response'];
    $sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$grecaptcharesponse);

    $odpowiedz = json_decode($sprawdz);

    if ($odpowiedz->success==false){
        $wszystko_ok = false;
        $_SESSION['e_bot'] = "Potwierdź, że nie jesteś botem!";
    }

    //czy powtarza się login w bazie

    require_once 'connect.php';

    try{

        $connection = new mysqli($host, $db_user, $db_password, $db_name);
        if ($connection->connect_errno != 0) {
            throw new Exception(mysqli_connect_errno());
        }
        else{
            //Czy e-mail już istnieje
            $rezultat= $connection->query("SELECT id FROM uzytkownicy WHERE email ='$mail'");

            if (!$rezultat) throw new Exception($connection->error);
            $ile_maili=$rezultat->num_rows;
            if ($ile_maili>0){
                $wszystko_ok = false;
                $_SESSION['e_mail'] = "Istnieje już konto przypisane do tego adresu e-mail";
            }

            //Czy nick już istnieje
            $rezultat= $connection->query("SELECT id FROM uzytkownicy WHERE user ='$nick'");

            if (!$rezultat) throw new Exception($connection->error);
            $ile_nickow=$rezultat->num_rows;
            if ($ile_nickow>0){
                $wszystko_ok = false;
                $_SESSION['e_nick'] = "Wybrana nazwa użytkownika jest już zajęta, prosze wybierz inną";
            }

            if ($wszystko_ok == true) {
                //hurra, wszystkie testy zaliczone, dodajemy graca do bazy!
                if ($connection->query("INSERT INTO uzytkownicy VALUES(NULL, '$nick', '$haslo_hash','$mail',100, 100, 100, 14)")){
                    $_SESSION['udanarejestracja']=true;
                    header('Location : witamy.php');
                }else{
                    throw new Exception($connection->error);
                }
            }

            $connection->close();
        }
    }
    catch(Exception $e){

        echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację winnym terminie!</span>';
        //echo '<br/> Informacja dla developera '.$e;
    }


}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Osadnicy - załóż darmowe konto!</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        .error {
            color: red;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<form method="post">
    Nickname: <br/><input name="nick" type="text" placeholder="Nickname"><br/>
    <?php
    if (isset($_SESSION['e_nick'])) {
        echo '<div class="error">' . $_SESSION['e_nick'] . '</div>';
        unset($_SESSION['e_nick']);
    }
    ?>
    E-mail: <br/><input name="mail" type="text" placeholder="E-mail"><br/>
    <?php
    if (isset($_SESSION['e_mail'])) {
        echo '<div class="error">' . $_SESSION['e_mail'] . '</div>';
        unset($_SESSION['e_mail']);
    }
    ?>
    Hasło: <br/><input name="haslo" type="password" placeholder="Hasło"><br/>

    <?php
    if (isset($_SESSION['e_haslo'])) {
        echo '<div class="error">' . $_SESSION['e_haslo'] . '</div>';
        unset($_SESSION['e_haslo']);
    }
    ?>
    Powtórz hasło: <br/><input name="haslo1" type="password" placeholder="Powtórz hasło"><br/>
    <label>
        <input type="checkbox" name="regulamin"> Akceptuję regulamin
    </label>
    <?php
    if (isset($_SESSION['e_regulamin'])) {
        echo '<div class="error">' . $_SESSION['e_regulamin'] . '</div>';
        unset($_SESSION['e_regulamin']);
    }
    ?>
    <div class="g-recaptcha" data-sitekey="6LeDrU4UAAAAALYcGbU_vvKCduIpnRb3lepSWbO5"></div>
    <?php
    if (isset($_SESSION['e_bot'])) {
        echo '<div class="error">' . $_SESSION['e_bot'] . '</div>';
        unset($_SESSION['e_bot']);
    }
    ?>
    <br/>
    <input type="submit" value="Zarejestruj się!" name="button">
</form>
</body>
</html>