<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post" action="./13_5_1formularze.php">
     Wpisz X: <input  type="number" name="x"> <br><br>
     Wpisz Y: <input  type="number" name="y">  <br><br>
        <input type="radio" name="zaznacz" value="p" checked> Pole
       <input type="radio" name="zaznacz" value="o"> Obwód
       <input type="submit" name="przycisk" value="oblicz">
   </form>
   <?php
        if (!empty ($_POST['y']) && !empty($_POST['y'])){
            $x = $_POST['x'];
            $y = $_POST['y'];
                if($x>0 && $y>0){
                    if ($_POST['zaznacz']=='p'){
                        echo " Pole wynosi: ".$x * $y. " cm <sup>2</sup>";
                    }else{
                        $wynik = 2* $x + 2*$y;
                        echo "Obwód wynosi: ".$wynik. " cm";
                    }
                }
        }



    ?>
</body>
</html>
