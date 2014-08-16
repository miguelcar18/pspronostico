<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <?php
        include("funcion_curl.php");
        
        $linkPronostico="http://www.apuestas-deportivas.es/pronostico/";
        $fijo=fijo($linkPronostico);
        preg_match_all('(<a href="http://www.apuestas-deportivas.es/pronostico/(.*)" rel="bookmark" title="(.*)">(.*)</a>)siU',$fijo, $link01);
        $cantidadNoticias=count($link01);
        
        for($i=0; $i<=$cantidadNoticias; $i++)
        {
            $variable=$link01[1][$i];
            echo 'Link '.$variable.'<br>';
        }
        
        echo $cantidadNoticias;
        ?>
    </body>
</html>
