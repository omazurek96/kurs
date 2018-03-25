<?php
session_start();
if ((!isset($_POST['login'])) || (!isset($_POST['haslo']))) {
    header('Location : index.php');
    exit();
}
require_once "connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

if ($connection->connect_errno != 0) {
    echo "Error:" . $connection->connect_errno;
} else {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");

    if ($rezultat = @$connection->query(
        sprintf("SELECT * FROM uzytkownicy WHERE user='%s'",
            mysqli_real_escape_string($connection, $login)))) {

        $ilu_userow = $rezultat->num_rows;
        if ($ilu_userow > 0) {

            $wiersz = $rezultat->fetch_assoc();

            if (password_verify($haslo, $wiersz['pass'])) {

                $_SESSION['zalogowany'] = true;

                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['user'] = $wiersz['user'];
                $_SESSION['email'] = $wiersz['email'];
                $_SESSION['drewno'] = $wiersz['drewno'];
                $_SESSION['kamien'] = $wiersz['kamien'];
                $_SESSION['dnipremium'] = $wiersz['dnipremium'];
                $_SESSION['zboze'] = $wiersz['zboze'];

                unset($_SESSION['blad']);

                $rezultat->free_result();

                header('Location: gra.php');
            }else{
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location:index.php');
            }

        } else {
            $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
            header('Location:index.php');
        }
    }

    $connection->close();
}


?>
