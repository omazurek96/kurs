<?php
session_start();

if ((isset($_SESSION['zalogowany']))) {
    header('Location : index.php');
    exit();
}else{
    unset($_SESSION['udanarejestracja']);
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Osadnicy - gra przeglądarkowa</title>
</head>
<body>
 Dziękujemy za rejestrację w serwisie! Możesz już zalogować się na swoje konto!<br/><br/>

<a href="index.php">Zaloguj się na swoje konto!</a>
<br/><br/>

</body>
</html>