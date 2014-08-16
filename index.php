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
        preg_match_all('(<h2>(.*)</h2>)siU',$fijo, $matches);
        $cantidadNoticias=count($matches);
        for($i=0; $i<=9; $i++)
        {
            $variable=$matches[1][$i];
            $ejemplo=explode('html',$variable);
            $extraerFinal=str_replace($ejemplo[1],'',$variable);
            $extraerPrincipio=str_replace('<a href="http://www.apuestas-deportivas.es/pronostico/','',$extraerFinal);
            $linkSolo=$extraerPrincipio;
            echo $linkSolo.'<br>';
        }
       
        ?>
    </body>
</html>
