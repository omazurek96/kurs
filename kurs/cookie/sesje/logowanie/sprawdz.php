<?php
session_start();
if(isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
    $login = htmlentities($_POST['login']);
    $haslo = htmlentities($_POST['haslo']);
//echo "$login $haslo";
    if($login='jan' && $haslo = 'tajne'){
        $_SESSION['zalogowany'] = true;
        unset($_SESSION['blad']);
        header('location: ./zalogowany.php');
    }else{
         $_SESSION['blad'] = "Uzupełnij błedne dane logowania!";
    header('location: index.php');
    }
}else{
    $_SESSION['blad'] = "Błedne dane logowanie!";
    header('location: index.php');
}


?>
