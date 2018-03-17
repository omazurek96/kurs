<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>zadanie</title>
</head>
<body>
   <form method="post">
       <input type="number" name = " x ">x<br>
       <input type="number" name = " y ">y<br>
       <input type="submit" name = " xprzycisk "><br>
   </form>
   <?php
    function potega ($x, $y){
        return $x**$y;
    }

    function minimum ($x, $y){

    }
    if (isset ($_POST ['przycisk']) && !empty ($_POST['x'])!empty ($_POST['y'])!empty || $_POST['y']==0){
        $x = $_POST['x'];
        $y = $_POST['y'];
        echo "$x <sup>$y</sup> wynosi: " .potega($x,$y);
    }
    ?>

</body>
</html>
