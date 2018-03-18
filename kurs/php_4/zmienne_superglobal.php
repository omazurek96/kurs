<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    ###################################  Zmienne superglobalne  ############################################################
        echo $_SERVER['SERVER_PORT']."<br>";//80
        echo $_SERVER['SCRIPT_NAME']."<br>";
        echo $_SERVER['SERVER_PROTOCOL']."<br>";
        echo $_SERVER['DOCUMENT_ROOT']."<br>";
        echo $_SERVER['DOCUMENT_ROOT']."<br>";

    ##################################### Zmienne predefiniowane ##########################################################

    echo PHP_VERSION."<br>";//7.2.3
    $ver = PHP_VERSION;
    if($ver > 7.0){
        echo "nowa wersja PHP <br>";
    }else{
        echo "stara wersja PHP<br>";
    }

    echo PHP_OS."<br>";
    echo LINE."<br>";

    ?>
</body>
</html>
