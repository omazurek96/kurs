<?php
    session_start();
    unset($_SESSION['imie']);
    $_SESSION['nazwisko'] = 'Kowal ';

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sesja 1_1</title>
</head>
<body>
    Witamy <?php echo $_SESSION['imie'];?> na ostatniej  stronie!<br>
    Identyfikatorem sesji jest: <?php echo session_id(); ?><br>
    <a href="sesja_1.php">Strona początkowa</a>
</body>
</html>
