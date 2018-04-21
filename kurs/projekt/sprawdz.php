<?php
    if(isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
        include_once('./polaczenie.php');
        if(!$polaczenie->connect_error){
            $login = $polaczenie->real_escape_string(htmlentities($_POST['login']));
            $haslo = $polaczenie->real_escape_string(htmlentities($_POST['haslo']));
            $sql = "SELECT * FROM `administracja` WHERE login = '$login' AND haslo = '$haslo'";

                if($rezultat = $polaczenie->query($sql)){
                    if ($rezultat->num_rows > 0){
                        $wiersz = $rezultat->fetch_assoc();
                        $uprawnienia = $wiersz['uprawnienieId'];
                        $aktywny = $wiersz['aktywny'];
                    }else{
                        header('location: ./index.php');
                    }
                }else{
                    echo 'błędne zapytanie';
                }
        }else{
            echo 'błąd połączenia';
        }
    }else{
        header('location: ./index.php');
    }
?>
