<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>Usługa Rest dla Twittera</title>
        <script>
            window.onload = startProces
            //funkcja ajax która automatyzuje proces
            function startProces() {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("pojemnik_na_dane").innerHTML = JSON.stringify(xmlhttp.responseText,undefined, 2);
                        }
                    };
                    xmlhttp.open("GET", "index2.php", true);
                    xmlhttp.send();
                setTimeout( startProces, 1000);
            }
        </script>
    </head>
    <body>
        
       <?php
            //require('src\Rest.php');
            //$sad = new Tszy\Rest\Rest();
            //$sad->wyslijzapytanie();
            //$sad->zapiszstatystyki();         
           //$a =print_r(json_encode($sad->statystyki,JSON_PRETTY_PRINT));
        ?>
        <div id='pojemnik_na_dane'></div>

    </body>
</html>
