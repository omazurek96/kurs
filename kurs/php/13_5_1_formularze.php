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
