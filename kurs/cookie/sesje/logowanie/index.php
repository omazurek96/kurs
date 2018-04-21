<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <h2>Logowanie do systemu</h2>
    <?ph

    if(isset($_SESSION['blad'])){
    echo $_SESSION['blad'];
} ?>
    <form method="post" action="./sprawdz.php">
        <input type="text" name="login" placeholder="Login"><br><br>
        <input type="password" name="haslo" placeholder="Hasło"><br><br>
        <input type="submit" name="przycisk" value="Zaloguj!"><br><br>
    </form>

</body>
</html>
