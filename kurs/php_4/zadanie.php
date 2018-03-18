<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form method="post" action="zadanie.php">
        <input type="text" name="imie" pattern="([a-z]|[A-Z]){2,20}" placeholder="Imię">
        <input type="text" name="nazwisko" pattern="([a-z]|[A-Z]){2,20}({-1}([a-z] | [A-Z]){2,20})?" placeholder="Nazwisko">
        <input type="submit" name="przycisk" value="Wyślij!">
    </form>
<?php

    if (isset($_POST['przycisk']) && !empty($_POST['imie']) && !empty($_POST['nazwisko'])){
      $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];



        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
     $pierwszaDuza1 = strtolower($imie);
     $pierwszaDuza1 = ucfirst($pierwszaDuza1);
     $pierwszaDuza2 = strtolower($nazwisko);
     $pierwszaDuza2 = ucfirst($pierwszaDuza2);
    echo "Imię: $pierwszaDuza1, nazwisko: $pierwszaDuza2";
    }
?>
</body>
</html>
