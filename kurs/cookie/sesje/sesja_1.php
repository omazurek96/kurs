<?php
    session_start();
    $_SESSION['imie'] = 'Filip';
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>sesja1</title>
</head>
<body>
    <?php
        echo "Witamy $_SESSION[imie] " ;
        if(isset($_SESSION['nazwisko'])){
            echo $_SESSION['nazwisko'];
        }

        echo "na stronie!<br>";
        echo "Identyfikator sesji: ".session_id()."<br>";

    ?>

    <a href="sesja_1_1.php">Następna strona</a><br>
    <a href="sesja_1.php?usunSesje=">Usuń sesję!</a><br>
    <?php
        if(isset($_GET['usunSesje'])){
            session_destroy();
        }
    ?>
</body>
</html>
