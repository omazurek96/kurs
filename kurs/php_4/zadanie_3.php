<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>zadanie 3</title>
</head>
<body>
<form method="post" action="zadanie_3.php">
        <input type="text" name="k1" pattern="([a-z]{3,20}" placeholder="kolor 1">
        <input type="text" name="k2" pattern="([a-z]{3,20}" placeholder="kolor 2">
        <input type="text" name="k3" pattern="([a-z]{3,20}" placeholder="kolor 3">
        <input type="submit" name="przycisk" value="Wyślij!">
    </form>

<?php
if (isset($_POST['przycisk']) && !empty($_POST['k1']) || !empty($_POST['k2']) || !empty($_POST['k3'])){

   $t = [];
   if (!empty ($_POST['k1']))
       $t[] = $_POST['k1'];
   if (!empty ($_POST['k2']))
       $t[] = $_POST['k2'];
   if (!empty ($_POST['k3']))
        $t[] = $_POST['k3'];
}

function wyswietl($k1, $k2, $k3){
    echo<<<E
     $k1 $k2 $k3
E;
}
      wyswietl($k1, $k2, $k3);

        $daneUzytkownika = array(
        'kolor1'=> $k1,
        'kolor2'=> $k2,
        'kolor3'=> $k3
            );
wyswietl($daneUzytkownika);
    rsort($daneUzytkownika);

    echo '<br>';
 ?>

</body>
</html>
