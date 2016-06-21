<?php
    //plik wywoływany przez metode AJAX 
    require('src\Rest.php');
            $sd = new Tszy\Rest\Rest();
            $sd->wyslijzapytanie();
            $sd->zapiszstatystyki(); 
          

//$d =   print_r($sd->statystyki); 
echo "<pre>".print_r(json_encode($sd->statystyki,JSON_PRETTY_PRINT),true)."</pre>";
echo count($sd->statystyki);
?>