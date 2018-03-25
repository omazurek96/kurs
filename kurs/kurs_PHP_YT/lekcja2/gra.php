<?php
session_start();

if (!isset($_SESSION['zalogowany'])) {
    header('Location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Osadnicy - gra przeglądarkowa</title>
</head>
<body>
<?php

echo "<p>Witaj " . $_SESSION['user'] . "! [<a href='logout.php'> Wyloguj się !</a>]</p>";
echo "<p></p><b>Drewno: " . $_SESSION['drewno'];
echo "| <b> Kamień: " . $_SESSION['kamien'];
echo "| <b> Zboże: " . $_SESSION['zboze'] . "</p>";


echo "<p><b> E-mail: " . $_SESSION['email'];
echo "<br/><b> Dni premium: " . $_SESSION['dnipremium'] . "</p>";

?>
</body>
</html