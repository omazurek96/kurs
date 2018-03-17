<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post">
     Wpisz X: <input  type="number" name="x"> <br><br>
     Wpisz Y: <input  type="number" name="y">  <br><br>
        <input type="radio" name="zaznacz" value="p" checked> Pole
       <input type="radio" name="zaznacz" value="o"> Obwód
       <input type="submit" name="przycisk" value="oblicz">
   </form>
   <?php
    require('13_5_1_formularze.php')
    ?>
</body>
</html>
