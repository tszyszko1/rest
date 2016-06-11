<!DOCTYPE html>

<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>Usługa Rest dla Twittera</title>
       
        
    </head>
    <body>
       <?php
            require('src\Rest.php');
            $sad = new Tszy\Rest\Rest();
            //$a = $sad->wyslijzapytanie('q=%23freebandnames&since_id=24012619984051000&max_id=250126199840518145&result_type=mixed&count=4');
            $a = $sad->wyslijzapytanie();
           $sad->wyswietlstatystyki();
            //
            
       ?>

    </body>
</html>
