<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <form method="post" action="./13_3_formularze.php">
      <input  type="text" name="login">

         <input type="submit" name="przycisk" value= "wyślij">
   </form>


    <?php
        $login = $_GET['login'];
        echo "Wtaj $login";
    ?>

</body>
</html>
