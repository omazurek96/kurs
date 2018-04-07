<?php
if(!isset($_COOKIE['szkola'])):
        setcookie('szkola', 'TEB');
        $komunikat = 'cookie o nazwie szkoła nie było ustawione';
    else:
        $komunikat = 'cookie o nazwie szkołą jest utawione<br>';
        $komunikat .= 'Jego zawartość to: '.$_COOKIE['szkola'];
    endif;
?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
    <?php
       // setcookie('imie','janusz',time()+15);
    echo $komunikat;

    ?>
</body>
</html>
