<?php
    //plik wywoływany przez metode AJAX 
    require('src\Rest.php');
            $sd = new Tszy\Rest\Rest();
            $sd->wyslijzapytanie();
            $sd->zapiszstatystyki(); 
          

$d =   print_r($sd->statystyki);
echo $d;
?>