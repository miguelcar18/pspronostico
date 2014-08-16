<?php

function fijo($urlver)
{
    $miell=curl_init();
    curl_setopt($miell, CURLOPT_URL, $urlver);
    curl_setopt($miell, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1");
    curl_setopt($miell, CURLOPT_HTTPHEADER, array("Accept-Languaje: es-es, en"));
    curl_setopt($miell, CURLOPT_TIMEOUT, 10);
    curl_setopt($miell, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($miell, CURLOPT_RETURNTRANSFER, 1);
    $result=curl_exec($miell);
    $error=curl_error($miell);
    curl_close($miell);
    return $result;
}

function recibe_imagen ($url_origen,$archivo_destino){
    $mi_curl = curl_init ($url_origen);
    $fs_archivo = fopen ($archivo_destino, "w+");
    curl_setopt ($mi_curl, CURLOPT_FILE, $fs_archivo);
    curl_setopt ($mi_curl, CURLOPT_HEADER, 0);
    curl_exec ($mi_curl);
    curl_close ($mi_curl);
    fclose ($fs_archivo);
}

?>

