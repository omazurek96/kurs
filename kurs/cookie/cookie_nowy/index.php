<?php
    if(empty($_COOKIE['wiek']) && empty($_GET['wiek'])){
        include('./header.html');
        include('./form.html');
        include('./footer.html');
    }
    else if(isset($_GET['wiek']) && !empty($_GET['wiek'])){
        setcookie('wiek', "$_GET[wiek]", time()+60*60+24*365);
        include('./header.html');
            echo "<p>Dziękujęmy za podnie danych</p>";
        include('./footer.html');
    }else{
        include('./header.html');
            echo "Twój wiek: $_COOKIE[wiek]";
        include('./footer.html');
    }
?>
