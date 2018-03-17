<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <form method="get" action="./13_3_formularze.php">
      <input  type="text" name="login">
      <input  type="password" name="pass">
        <input type="radio" name="kolor" value="b"> biały
       <input type="radio" name="kolor" value="czer"> czerwony
       <input type="radio" name="kolor" value="cz"> czarny
       <input type="submit" name="przycisk" value="wyślij kolor">
   </form>


    <?php
        if (isset($_GET['przycisk']) && !empty($_GET['login']) && !empty($_GET['pass'])){
        $login = $_GET['login'];
        $pass = $_GET['pass'];
        echo "Wtaj $login<br>Twoje hasło: $pass";
            if(isset ($_GET['kolor']))
                $kolor = $_GET['kolor'];
                switch ($kolor){

                        case'b':
                        $kolor = "Biały";
                        break;
                    case 'czer':
                        $kolor = "Czerwony";
                        break;
                    case 'cz':
                        $kolor = "Czarny";
                        break;
                }
                echo "<br>Twój ulubiony kolor: $kolor ";
        }
    ?>


</body>
</html>
